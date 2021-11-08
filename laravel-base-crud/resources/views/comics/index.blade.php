@extends("layouts.main")

@section("title", "Comics")

@section('contenuto')
    <div class="container">
        <div class="row mt-4">
            @foreach ($comics as $comic)
                <div class="col-4 mb-4">
                    <h5 class="mb-4">{{ $comic->titolo }}</h5>
                    <img src="{{ $comic->immagine }}" alt="immagine {{ $comic->titolo }}">
                    <p><strong>Autore : </strong> {{ $comic->autore }}</p>
                    <p><strong>Anno Pubblicazione:</strong> {{ $comic->anno_pubblicazione }}</p>
                    <p><strong>Descrizione : </strong> {{ $comic->descrizione }}</p>
                    <a href="{{ route('comics.show', ['comic' => $comic->id ]) }}">
                        <button class="btn btn-primary">Scopri di piu</button>
                    </a>
                    
                </div>
            @endforeach
        </div>
    </div>
@endsection
