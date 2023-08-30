<?php

namespace App\Http\Controllers\Admin;

use App\Events\ChatEvent;
use App\Http\Controllers\Controller;
use App\Models\Chat;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class ChatController extends Controller
{
    function index(): View
    {
        $userId = auth()->user()->id;
        $chatUsers = User::where('id', '!=', $userId)
            ->whereHas('chats', function($query) use ($userId) {
                $query->where(function($subQuery) use ($userId){
                    $subQuery->where('sender_id', $userId)
                        ->orWhere('receiver_id', $userId);
                });
            })
            ->orderByDesc('created_at')
            ->distinct()
            ->get();

        return view('admin.chat.index', compact('chatUsers'));
    }

    function getConversation(string $senderId) : Response {
        $receiverId = auth()->user()->id;

        $messages = Chat::whereIn('sender_id', [$senderId, $receiverId])
            ->whereIn('receiver_id', [$senderId, $receiverId])
            ->with(['sender'])
            ->orderBy('created_at', 'asc')
            ->get();
        return response($messages);
    }

    function sendMessage(Request $request) {
        $request->validate([
            'message' => ['required', 'max:1000'],
            'receiver_id' => ['required', 'integer']
        ]);

        $chat = new Chat();
        $chat->sender_id = auth()->user()->id;
        $chat->receiver_id = $request->receiver_id;
        $chat->message = $request->message;
        $chat->save();

        $avatar = asset(auth()->user()->avatar);
        broadcast(new ChatEvent($request->message, $avatar, $request->receiver_id))->toOthers();

        return response(['status' => 'success']);
    }
}
