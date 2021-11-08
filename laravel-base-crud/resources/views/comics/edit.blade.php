@extends("layouts.main")

@section("title", "Edit")

@section('contenuto')
    <div class="container">
        <form action="{{ route('comics.update', ['comic' => $comic->id ]) }}" method="POST">
            @method('PATCH')
            @csrf
            <div class="form-group">
                <label for="titolo">Inserisci il titolo</label>
                <input type="text" class="form-control" id="titolo" name="titolo"  placeholder="Titolo" require
                value="{{ $comic->titolo }}">
            </div>
            <div class="form-group">
                <label for="immagine">Inserisci l'immagine</label>
                <input type="text" class="form-control" id="immagine" name="immagine"  placeholder="Immagine Url" require
                value="{{ $comic->immagine }}">
            </div>
            <div class="form-group">
                <label for="autore">Inserisci l'autore</label>
                <input type="text" class="form-control" id="autore" name="autore"  placeholder="Autore" require
                value="{{ $comic->autore }}">
            </div>
            <div class="form-group">
                <label for="anno_pubblicazione">Inserisci l'anno di pubblicazione</label>
                <input type="text" class="form-control" id="anno_pubblicazione" name="anno_pubblicazione"  placeholder="Anno di pubblicazione" require
                value="{{ $comic->anno_pubblicazione }}">
            </div>
            <div class="form-group">
                <label for="descrizione">Inserisci la descrizione</label>
                <input type="text" class="form-control" id="descrizione" name="descrizione"  placeholder="Descrizione" require
                value="{{ $comic->descrizione }}"> 
            </div>
            
            <button type="reset" class="btn btn-primary">Resetta</button>
            <button type="submit" class="btn btn-primary">Modifica</button>
        </form>
    </div>
@endsection