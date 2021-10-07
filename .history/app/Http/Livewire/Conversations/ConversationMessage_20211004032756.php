<?php

namespace App\Http\Livewire\Converstions;

use App\Models\Conversation;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class ConversationMessage extends Component
{
    public $conversation;
    public function mount(Conversation $conversation, Collection $messages)
    {
        $this->conversation = $conversation;
    }
    public function render()
    {
        return view('livewire.converstions.conversation-message');
    }
}
