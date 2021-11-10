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

                    <a href="{{ route('comics.edit', ['comic' => $comic->id ]) }}">
                        <button class="btn btn-secondary">Modifica</button>
                    </a>

                    <form action="{{ route('comics.destroy', ['comic' => $comic->id ]) }}" 
                    method="POST"
                    class="delete-form"
                    data-titolo='{{ $comic->titolo }}'
                    data-id='{{ $comic->id }}'>
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger">Elimina</button>
                    </form>
                    
                </div>
            @endforeach
        </div>
    </div>
@endsection

<script>
    const deleteFormElements = document.querySelectorAll('.delete-form');
    deleteFormElements.foreach(form => {
        form.addEventListener('submit', function(event){
            event.preventDefault();
            const id = form.getAttribute('data-id');
            const titolo = form.getAttribute('data-titolo');
            const confirm = window.confirm('Sei sicuro di voler eliminare ?');
            if (confirm) this.submit();
        })
    });
</script>
