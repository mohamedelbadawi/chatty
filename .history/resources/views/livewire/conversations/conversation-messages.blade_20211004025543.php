<div>
    @forelse ($messages as $message)
        @if ($message->isOwn())
            <!-- Reciever Message-->
            <livewire:conversations.conversation-message-own />
        @else
            <livewire:conversations.conversation-message />

        @endif

    @empty
        <h3>No Messages yet</h3>
    @endforelse

</div>
