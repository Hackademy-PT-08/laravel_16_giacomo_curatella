<div class="container py-5">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <p class="text-center py-5 h2">Modifica articolo {{$title}}</p>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="mb-3">
                <input type="text" class="form-control shadow" wire:model="title" value="{{ $title }}">
            </div>

            <div class="mb-3">
                <textarea cols="30" rows="10" style="resize: none;" class="form-control shadow" wire:model="content">{{ $content }}</textarea>
            </div>

            <div class="mt-5 d-flex justify-content-between">
                <button class="btn btn-info" wire:click="update">Aggiorna articolo</button>
                <button class="btn btn-danger" wire:click="destroy">Elimina</button>
            </div>

            <p class="text-center text-success py-5 display-6">{{ $message }}</p>
        </div>
    </div>
</div>
