<div class="container-py-5">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="row justify-content-center m-0">
        <div class="col-md-6">
            <div class="mb-3">
                <input type="text" class="form-control shadow" placeholder="Titolo dell'articolo" wire:model="title">
            </div>

            <div class="mb-3">
                <textarea cols="30" rows="10" style="resize: none;" class="form-control shadow" placeholder="Testo dell'articolo..." wire:model="content"></textarea>
            </div>

            <div class="mt-5 d-flex justify-content-center">
                <button class="btn btn-success" wire:click="store">Pubblica articolo</button>
            </div>
        </div>
    </div>

    <p class="text-center text-success py-5 display-6">{{$message}}</p>
</div>