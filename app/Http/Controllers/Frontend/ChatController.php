<?php

namespace App\Http\Controllers\Frontend;

use App\Events\ChatEvent;
use App\Http\Controllers\Controller;
use App\Models\Chat;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ChatController extends Controller
{
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
        $senderId = auth()->user()->id;
        broadcast(new ChatEvent($request->message, $avatar, $request->receiver_id, $senderId))->toOthers();

        return response(['status' => 'success', 'msgId' => $request->msg_temp_id]);
    }

    function getConversation(string $senderId) : Response {
        $receiverId = auth()->user()->id;

        Chat::where('sender_id', $senderId)->where('receiver_id', $receiverId)->where('seen', 0)->update(['seen' => 1]);

        $messages = Chat::whereIn('sender_id', [$senderId, $receiverId])
            ->whereIn('receiver_id', [$senderId, $receiverId])
            ->with(['sender'])
            ->orderBy('created_at', 'asc')
            ->get();
        return response($messages);
    }
}
