@extends('layouts.app')

@section('content')
    <h1>{{ $comic->title }}</h1>
    <p>{{ $comic->author }}</p>
    <p>{{ $comic->description }}</p>
    <img src="{{ $comic->cover_image }}" alt="{{ $comic->title }}">
    <a href="{{ route('comics.index') }}">Torna ai Fumetti</a>
@endsection
