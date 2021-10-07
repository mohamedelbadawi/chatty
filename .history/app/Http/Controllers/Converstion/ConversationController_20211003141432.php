<?php

namespace App\Http\Controllers\Converstion;
use App\Models\Conversation;
use App\Http\Controllers\Controller;

class ConversationController extends Controller
{
    public function index()
    {
        $conversations = auth()->user()->Conversations;
        return view('conversation.index', compact('conversations'));
    }

    public function show(Conversation $conversation, Request $request)
    {

    }
}