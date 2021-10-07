<?php

namespace App\Http\Controllers\Converstion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConversationController extends Controller
{
    public function index()
    {

        $conversations = auth()->user()->Conversations;
        return view('conversation.index', compact('conversations'));
    }
}
