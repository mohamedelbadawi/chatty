<?php

namespace App\Http\Livewire\Conversations;

use Livewire\Component;

class ConversationMessageOwn extends Component
{
    public $conversation;
    public $messages;
    public function mount(Conversation $conversation, Collection $messages)
    {
        $this->conversation = $conversation;
        $this->messages = $messages;
    }
    public function render()
    {
        return view('livewire.converstions.conversation-message-own');
    }
}
