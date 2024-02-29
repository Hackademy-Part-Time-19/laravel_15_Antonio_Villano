<div>
    <div class="container-fluid">
        <div class="row">
            <div>
                <label for="search">Cerca</label>
                <input type="text" wire:model.live="search" id="search">
            </div>
            @foreach ($posts as $post )
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">{{$post->title}}</h5>
                  <p class="card-text">{{$post->body}}</p>
                  <p class="card-text">{{$post->author}}</p>

                </div>
              </div>

            @endforeach
        </div>
    </div>
</div>
