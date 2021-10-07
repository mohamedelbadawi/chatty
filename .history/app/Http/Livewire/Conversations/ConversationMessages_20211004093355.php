<?php

namespace App\Http\Livewire\Conversations;

use App\Models\Conversation;
use Illuminate\Support\Collection as SupportCollection;
use Livewire\Component;

class ConversationMessages extends Component
{
    public $conversation;
    public $messages;
    public function getListeners()
    {
        return [
            'message.created' => 'preparedMessage',
        ];
    }
    public function mount(Conversation $conversation, SupportCollection $messages)
    {
        $this->conversation = $conversation;
        $this->messages = $messages;
    }
    public function render()
    {
        return view('livewire.conversations.conversation-messages');
    }
}
