<div>
    @forelse ($messages as $message)
        @if ($message->isOwn())
            <!-- Reciever Message-->
            <div class="media w-50 ml-auto mb-3">
                <div class="media-body">
                    <div class="bg-primary rounded py-2 px-3 mb-2">
                        <p class="text-small mb-0 text-white">Test which is a new approach to have all solutions</p>
                    </div>
                    <p class="small text-muted">12:00 PM | Aug 13</p>
                </div>
            </div>

        @else
            <div class="media w-50 mb-3"><img
                    src="https://res.cloudinary.com/mhmd/image/upload/v1564960395/avatar_usae7z.svg" alt="user"
                    width="50" class="rounded-circle">
                <div class="media-body ml-3">
                    <div class="bg-light rounded py-2 px-3 mb-2">
                        <p class="text-small mb-0 text-muted">Test, which is a new approach to have</p>
                    </div>
                    <p class="small text-muted">12:00 PM | Aug 13</p>
                </div>
            </div>

        @endif

    @empty
        <h3>No Messages yet</h3>
    @endforelse

</div>