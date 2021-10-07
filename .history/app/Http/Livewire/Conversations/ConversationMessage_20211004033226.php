<?php

namespace App\Http\Livewire\Converstions;

use App\Models\Conversation;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class ConversationMessage extends Component
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
        return view('livewire.conversations.conversation-message');
    }
}
