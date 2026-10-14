<div class="container mt-5 pt-5">
    <h2 class="text-center mb-4">Valore: {{ $count }}</h2>

    <div class="row justify-content-center">
        <div class="col-12 col-md-8">
            <div class="row">
                <div class="col-6 d-flex flex-column align-items-start gap-4">
                    <button wire:click="increment" class="btn btn-primary">Aggiungi 1</button>
                    <button wire:click="add(5)" class="btn btn-success">Aggiungi 5</button>
                </div>

                <div class="col-6 d-flex flex-column align-items-end gap-4">
                    <button wire:click="decrement" class="btn btn-warning">Togli 1</button>
                    <button wire:click="subtract(4)" class="btn btn-info">Togli 4</button>
                </div>
            </div>
        </div>
    </div>
</div>