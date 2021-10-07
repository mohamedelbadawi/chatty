<?php

namespace App\Http\Controllers\Converstion;

use App\Http\Controllers\Controller;
use App\Models\Conversation;
use Illuminate\Http\Request;

class ConversationController extends Controller
{
    public function index(Request $request,)
    {
        $conversations = Conversation::get();
        return view('conversation.index', compact('conversations'));
    }
}
