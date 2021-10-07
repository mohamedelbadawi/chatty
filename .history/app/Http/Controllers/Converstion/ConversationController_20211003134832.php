<?php

namespace App\Http\Controllers\Converstion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConversationController extends Controller
{
    public function index(Request $request, )
    {dd(auth());
        $conversations = auth()->user()->Conversations->get();
        return view('conversation.index', compact('conversations'));
    }
}
