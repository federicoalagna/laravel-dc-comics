@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Modifica Fumetto</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('comics.update', $comic->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $comic->title) }}"
                required>
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">Autore</label>
            <input type="text" class="form-control" id="author" name="author"
                value="{{ old('author', $comic->author) }}" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control" id="description" name="description" rows="3" required>{{ old('description', $comic->description) }}</textarea>
        </div>
        <div class="mb-3">
            <label for="cover_image" class="form-label">URL Immagine di Copertina</label>
            <input type="text" class="form-control" id="cover_image" name="cover_image"
                value="{{ old('cover_image', $comic->cover_image) }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Aggiorna Fumetto</button>
    </form>
@endsection
