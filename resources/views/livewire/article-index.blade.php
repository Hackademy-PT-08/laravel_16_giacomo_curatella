<div class="container py-5">
    <p class="text-center h2 py-5">Tutti i nostri articoli</p>

    <div class="row justify-content-center py-4">
        <div class="col-md-4">
            <div class="py-4">
                <input type="text" class="form-control shadow" placeholder="Cerca un articolo..." wire:model="cerca" wire:poll.100ms>
            </div>
        </div>
    </div>

    @foreach ($articles as $article)
        <div class="row justify-content-center mb-5" wire:poll.100ms>
            <div class="col-md-5 shadow p-5 rounded-3 border border-1 border-success border-opacity-50">
                <h4 class="text-center">{{$article->title}}</h4>
                <p class="mt-5">{{$article->content}}</p>
                <div class="col-12 mt-4">
                    <div class="row justify-content-between">
                        <div class="col-6">
                            
                        </div>
                        <div class="col-6 d-flex justify-content-end">
                            <a href="{{route('articoli-modifica', ['id'=>$article->id])}}" class="btn btn-warning">Modifica</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
