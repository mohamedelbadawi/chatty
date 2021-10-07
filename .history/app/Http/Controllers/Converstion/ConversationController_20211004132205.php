<?php

namespace App\Http\Controllers\Converstion;

use App\Http\Controllers\Controller;
use App\Models\Conversation;

class ConversationController extends Controller
{
    public function index()
    {
        $conversations = auth()->user()->Conversations->orderBy('last_message_at','DESC');
        return view('conversation.index', compact('conversations'));
    }

    public function show(Conversation $conversation)
    {
        $conversations = auth()->user()->Conversations->orderBy('last_message_at','DESC');
        return view('conversation.show', compact('conversations', 'conversation'));
    }
}
