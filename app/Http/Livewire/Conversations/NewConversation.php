<?php

namespace App\Http\Livewire\Conversations;

use App\Models\Conversation;
use App\Models\User;
use Illuminate\Support\Str;
use Livewire\Component;

class NewConversation extends Component
{
    public $message;
    public function render()
    {
        return view('livewire.conversations.new-conversation');
    }

    public function newMessage()
    {
// TODO:first get the user id ,get random user id ,make a conversation between them ,open the conversation

        $user = User::all()->except(auth()->id())->random();
        // dd(Str::uuid());
        $conversation = Conversation::create([
            'name' => auth()->user()->name . '_' . $user->name,
            'user_id' => auth()->id(),
            'uuid' => Str::uuid(),
        ]);
        $conversation->Messages()->create([
            'user_id' => auth()->id(),
            'body' => $this->message,
        ]);
        $conversation->Users()->sync([$user->id, auth()->id()]);

        return redirect()->route('conversation.show', $conversation);
    }
}
