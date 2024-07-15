@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Modifica Fumetto</h1>
    <form action="{{ route('comics.update', $comic->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}" required>
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">Autore</label>
            <input type="text" class="form-control" id="author" name="author" value="{{ $comic->author }}" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control" id="description" name="description" rows="3" required>{{ $comic->description }}</textarea>
        </div>
        <div class="mb-3">
            <label for="cover_image" class="form-label">URL Immagine di Copertina</label>
            <input type="text" class="form-control" id="cover_image" name="cover_image" value="{{ $comic->cover_image }}"
                required>
        </div>
        <button type="submit" class="btn btn-primary">Aggiorna Fumetto</button>
    </form>
@endsection
