<?php

namespace App\Http\Controllers\Converstion;

use App\Http\Controllers\Controller;

class ConversationController extends Controller
{
    public function index()
    {
        $converstions=Conversation::get();
        return view('conversation.index');
    }
}
