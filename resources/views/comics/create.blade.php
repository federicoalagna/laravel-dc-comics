@extends('layouts.app')

@section('content')
    <h1>Aggiungi un Nuovo Fumetto</h1>
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        <label for="title">Titolo:</label>
        <input type="text" id="title" name="title" required>

        <label for="author">Autore:</label>
        <input type="text" id="author" name="author" required>

        <label for="description">Descrizione:</label>
        <textarea id="description" name="description" required></textarea>

        <label for="cover_image">URL Immagine di Copertina:</label>
        <input type="text" id="cover_image" name="cover_image" required>

        <button type="submit">Aggiungi Fumetto</button>
    </form>
@endsection
