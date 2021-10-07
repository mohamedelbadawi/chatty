<?php

namespace App\Http\Livewire\Converstions;

use App\Models\Conversation;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class ConversationMessage extends Component
{
    public function mount(Message $message)
    {
        $this->message = $message;
    }
    public function render()
    {
        return view('livewire.conversations.conversation-message');
    }
}
