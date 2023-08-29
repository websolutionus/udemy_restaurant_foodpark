<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
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

        dd($chatUsers);


        return view('admin.chat.index');
    }
}
