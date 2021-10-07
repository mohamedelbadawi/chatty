<?php

namespace App\Http\Livewire\Conversations;

use Illuminate\Support\Collection;
use Livewire\Component;

class ConversationList extends Component
{
    public $conversations;
    public function mount(Collection $conversations)
    {
        $this->conversations = $conversations;
    }
    public function render()
    {
        return view('livewire.conversations.conversation-list');
    }
    public function getListeners()
    {
        return [
            'echo-private:User.' . auth()->id() . ',Conversations\\ConversationUpdated' => 'updateConversationFromBroadcast',
        ];
    }
    public function updateConversationFromBroadcast($payload)
    {
        $this->conversations->find($payload['conversation']['id']) ? $this->conversation->fresh() : '';
    }
}
