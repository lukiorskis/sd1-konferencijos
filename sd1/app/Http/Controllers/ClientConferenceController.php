<?php

namespace App\Http\Controllers;

class ClientConferenceController extends Controller
{
    public function index()
    {
        $conferences = conferences();

        return view('client.conferences.index', compact('conferences'));
    }

    public function show($id)
    {
        $conference = conferences()[$id] ?? null;

        if (!$conference) {
            abort(404);
        }

        return view('client.conferences.show', compact('conference'));
    }

    public function register($id)
    {
        return redirect()
            ->route('client.conferences.show', $id)
            ->with('success', 'Sėkmingai užsiregistravote į konferenciją.');
    }
}