<div class="container mt-4">
    <div class="row justify-content-center mb-4">
        <div class="col-12 col-md-10">
            <input type="text" class="form-control" placeholder="Cerca tra i post..."
                wire:model.live.debounce.300ms="search">
        </div>
    </div>

    <div class="row justify-content-center">
        @forelse ($posts as $post)
            <div class="col-12 col-md-4 mb-4" wire:key="post-{{ $post->id }}">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text">{{ $post->body }}</p>
                    </div>
                </div>
            </div>
        @empty
            <p class="text-center">Nessun post trovato.</p>
        @endforelse
    </div>
</div>