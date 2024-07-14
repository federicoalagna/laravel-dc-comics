@extends('layouts.app')

@section('content')
    <h1>Fumetti</h1>
    <ul>
        @foreach ($comics as $comic)
            <li><a href="{{ route('comics.show', $comic->id) }}">{{ $comic->title }}</a></li>
        @endforeach
    </ul>
    <a href="{{ route('comics.create') }}">Aggiungi un nuovo Fumetto</a>
@endsection
