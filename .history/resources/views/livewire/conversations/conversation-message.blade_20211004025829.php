<div class="media w-50 mb-3"><img src="https://res.cloudinary.com/mhmd/image/upload/v1564960395/avatar_usae7z.svg"
        alt="user" width="50" class="rounded-circle">
    <div class="media-body ml-3">
        <div class="bg-light rounded py-2 px-3 mb-2">
            <p class="text-small mb-0 text-muted">{{ $message->body }}</p>
        </div>
        <p class="small text-muted"><small>{{ $message->created_at->diffForHumans() }}</small></p>
    </div>
</div>
