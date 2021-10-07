<?php

namespace App\Http\Livewire\Converstions;

use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class ConversationMessage extends Component
{
    public $conversation;
    public function mount(Converstion $conversation ,Collection $messages)
    {

    }
    public function render()
    {
        return view('livewire.converstions.conversation-message');
    }
}
