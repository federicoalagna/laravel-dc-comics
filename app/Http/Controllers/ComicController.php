<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    public function create()
    {
        return view('comics.create');
    }

    public function store(Request $request)
    {
        // regole di validazione
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'author' => 'required|max:255',
            'description' => 'required',
            'cover_image' => 'required|url',
        ]);

        // creazione di  un nuovo fumetto
        Comic::create($validatedData);

        return redirect()->route('comics.index')->with('success', 'Fumetto aggiunto con successo!');
    }

    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    public function update(Request $request, Comic $comic)
    {
        // regole di validazione
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'author' => 'required|max:255',
            'description' => 'required',
            'cover_image' => 'required|url',
        ]);

        // aggiornamento del fumetto
        $comic->update($validatedData);

        return redirect()->route('comics.show', $comic->id)->with('success', 'Fumetto aggiornato con successo!');
    }

    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index')->with('success', 'Fumetto eliminato con successo!');
    }
}
