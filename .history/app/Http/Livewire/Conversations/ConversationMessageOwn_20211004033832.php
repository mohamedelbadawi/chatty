<?php

namespace App\Http\Livewire\Conversations;

use App\Models\Conversation;
use App\Models\Message;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class ConversationMessageOwn extends Component
{
    public $message;
    public function mount(Message $message)
    {
        $this->message = $message;
    }
    public function render()
    {
        return view('livewire.conversations.conversation-message-own');
    }
}
