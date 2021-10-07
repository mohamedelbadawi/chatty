<?php

namespace App\Http\Livewire\Conversations;

use App\Models\Conversation;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class ConversationMessageOwn extends Component
{
    public $conversation;
    public $message;
    public function mount(Conversation $conversation, Collection $message)
    {
        $this->conversation = $conversation;
        $this->message = $message;
    }
    public function render()
    {
        return view('livewire.conversations.conversation-message-own');
    }
}
