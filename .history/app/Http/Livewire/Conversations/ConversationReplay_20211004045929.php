<?php

namespace App\Http\Livewire\Conversations;

use Livewire\Component;
use Livewire\WithFileUploads;

class ConversationReplay extends Component
{
    use WithFileUploads;
    public $body = '';
    public $attachment = '';
    public $attachment_name = '';
    public $conversation = '';
    public function render()
    {
        return view('livewire.conversations.conversation-replay');
    }
}
