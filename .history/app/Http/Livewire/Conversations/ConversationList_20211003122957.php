<?php

namespace App\Http\Livewire\Conversations;

use Livewire\Component;

class ConversationList extends Component
{
    public function mount(Collection $conversations)
    {

    }
    public function render()
    {
        return view('livewire.conversations.conversation-list');
    }
}
