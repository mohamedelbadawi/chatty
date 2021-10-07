<div>
    @forelse ($conversations as $conversation )


        <a href="{{ route('conversation.show',[$conversation->uuid]) }}" class="list-group-item list-group-item-action active text-white rounded-0">
            <div class="media"><img src="{{ asset('images/avatar.jpg') }}" alt="user" width="50"
                    class="rounded-circle">
                <div class="media-body ml-4">
                    <div class="d-flex align-items-center justify-content-between mb-1">
                        {{ $conversation->name? $conversation->name:$conversation->users->pluck('name')->join(', ') }}</h6><small class="small font-weight-bold">{{ $conversation->Messages->last()->created_at->diffForHumans() }}</small>
                    </div>
                    <p class="font-italic mb-0 text-small">{{ $conversation->Messages->last()->User->id===auth()->id()?'You':$conversation->Messages->last()->User->name }}: {{ $conversation->Messages->last()->body }}</p>
                </div>
            </div>
        </a>
    @empty

    @endforelse

    {{-- <a href="#" class="list-group-item list-group-item-action list-group-item-light rounded-0">
        <div class="media"><img src="https://res.cloudinary.com/mhmd/image/upload/v1564960395/avatar_usae7z.svg"
                alt="user" width="50" class="rounded-circle">
            <div class="media-body ml-4">
                <div class="d-flex align-items-center justify-content-between mb-1">
                    <h6 class="mb-0">Jason Doe</h6><small class="small font-weight-bold">14 Dec</small>
                </div>
                <p class="font-italic text-muted mb-0 text-small">Lorem ipsum dolor sit amet,
                    consectetur. incididunt ut labore.</p>
            </div>
        </div>
    </a> --}}

</div>
