<?php

namespace App\Http\Livewire\Conversations;

use App\Models\Conversation;
use function PHPUnit\Framework\isNull;
use Livewire\Component;
use Livewire\WithFileUploads;

class ConversationReplay extends Component
{
    use WithFileUploads;
    public $body = '';
    public $attachment = '';
    public $attachment_name = '';
    public $conversation;
    public function mount(Conversation $conversation)
    {
        $this->conversation = $conversation;
    }
    protected $rules = ['body' => 'required', 'attachment' => 'nullable|file|mimes:png,jpg,jpeg,gif,wav,mp3,mp4|max:102400',
    ];

    public function Reply()
    {
        $this->validate();
        if (!isNull($this->attachment)) {

        }
    }

    public function saveAttachment()
    {
        $this->attachment_name = md5($this->attachment . microtime()) . '.' .$this->attachment->extension();
        $this->attachment->storeAs('/',$this->attachment_name,'media');

    }

    public function render()
    {
        return view('livewire.conversations.conversation-replay');
    }
}
