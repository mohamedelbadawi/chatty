<div>
    @forelse ($conversations as $conversation )


        <a href="{{ route('conversation.show', [$conversation->uuid]) }}"
            class="list-group-item list-group-item-action {{ \Str::contains(request()->path(), $conversation->uuid) ? 'active text-white' : 'text-black' }} rounded-0">
            <div class="media"><img src="{{ asset('images/avatar.jpg') }}" alt="user" width="50"
                    class="rounded-circle">
                <div class="media-body ml-4">
                    <div class="d-flex align-items-center justify-content-between mb-1">
                        {{ $conversation->name ? $conversation->name : $conversation->users->pluck('name')->join(', ') }}
                        </h6><small
                            class="small font-weight-bold">{{ $conversation->Messages->last()->created_at->diffForHumans() }}</small>
                    </div>

                    <p class="font-italic mb-0 text-small">
                        @if (!auth()->user()->hasRead($conversation))
                            <span class="bg-primary mr-2 rounded-circle style="display:inline-table;width:10px;height:10px;" ></span>
                        @endif
                        {{ $conversation->Messages->last()->User->id === auth()->id() ? 'You' : $conversation->Messages->last()->User->name }}:
                        {{ $conversation->Messages->last()->body }}

                    </p>
                </div>
            </div>
        </a>
    @empty

    @endforelse



</div>
