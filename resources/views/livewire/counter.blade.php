
<div>
    <h2>Sono il componente counter</h2>
    <div class="container-fluid">
        <div class="row">
            <h1>{{ $count }}</h1>
            <div class="row">
                <div class="col-2">

                    <button wire:click="increment">+</button>
                </div>
                <div class="col-2">
                    <button wire:click="decrement">-</button>
                </div>
            </div>
        </div>
    </div>

</div>
