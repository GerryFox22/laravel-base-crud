@extends("layouts.main")

@section("title", "Comics")

@section('contenuto')
    <div class="container">
        <div class="row">
            @foreach ($comics as $comic)
                <div class="col-4 mb-4">

                    <h5>{{ $comic->titolo }}</h5>
                    <img src="{{ $comic->immagine }}" alt="immagine {{ $comic->titolo }}">
                    <p><strong>Autore : </strong> {{ $comic->autore }}</p>
                    <p><strong>Anno Pubblicazione:</strong> {{ $comic->anno_pubblicazione }}</p>
                    <p><strong>Descrizione : </strong> {{ $comic->descrizione }}</p>


                </div>
                    

            @endforeach
        </div>
    </div>
@endsection