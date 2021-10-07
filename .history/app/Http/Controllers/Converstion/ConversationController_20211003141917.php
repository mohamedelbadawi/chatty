<?php

namespace App\Http\Controllers\Converstion;

use App\Http\Controllers\Controller;
use App\Models\Conversation;
use Illuminate\Http\Request;

class ConversationController extends Controller
{
    public function index()
    {
        $conversations = auth()->user()->Conversations;
        return view('conversation.index', compact('conversations'));
    }

    public function show(Conversation $conversation)
    {
        $conversations = auth()->user()->Conversations;
    return view('conversation.show',compact('conversations','coversation'));
    }
}
