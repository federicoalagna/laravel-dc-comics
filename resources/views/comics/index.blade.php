@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Fumetti</h1>
        <a href="{{ route('comics.create') }}" class="btn btn-primary">Aggiungi un nuovo Fumetto</a>
    </div>
    <div class="row">
        @foreach ($comics as $comic)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ $comic->cover_image }}" class="card-img-top" alt="{{ $comic->title }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $comic->title }}</h5>
                        <p class="card-text">{{ $comic->author }}</p>
                        <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary">Dettagli</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
