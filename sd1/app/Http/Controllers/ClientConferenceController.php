<?php

namespace App\Http\Controllers;

use App\Models\Conference;

class ClientConferenceController extends Controller
{
    public function index()
    {
        $conferences = Conference::all();

        return view('client.conferences.index', compact('conferences'));
    }

    public function show($id)
    {
        $conference = Conference::findOrFail($id);

        return view('client.conferences.show', compact('conference'));
    }

    public function register($id)
    {
        $conference = Conference::findOrFail($id);

        auth()->user()->conferences()->syncWithoutDetaching([$conference->id]);

        return redirect()
            ->route('client.conferences.show', $id)
            ->with('success', 'Sėkmingai užsiregistravote į konferenciją.');
    }
}