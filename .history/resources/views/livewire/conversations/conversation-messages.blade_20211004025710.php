<div>
    @forelse ($messages as $message)
        @if ($message->isOwn())
            <!-- Reciever Message-->
            <livewire:conversations.conversation-message-own :message="$message" :key="$message->id" />
        @else
            <livewire:conversations.conversation-message :message="$message" :key="$message->id" />

        @endif

    @empty
        <h3>No Messages yet</h3>
    @endforelse

</div>
