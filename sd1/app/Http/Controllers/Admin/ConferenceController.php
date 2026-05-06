<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ConferenceRequest;
use App\Models\Conference;
use Illuminate\Http\Request;

class ConferenceController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

 public function index()
{
    $conferences = Conference::all();

    return view('admin.conferences.index', compact('conferences'));
}

    public function create()
    {
        return view('admin.conferences.create');
    }

   public function store(Request $request)
{
    Conference::create([
        'title' => $request->title,
        'description' => $request->description,
        'date' => $request->date,
        'location' => $request->location,
        'max_participants' => $request->max_participants,
    ]);

    return redirect()->route('admin.conferences.index')
        ->with('success', 'Konferencija sukurta');
}

    public function show($id)
    {
        $conference = conferences()[$id] ?? null;

        if (!$conference) {
            abort(404);
        }

        return view('admin.conferences.show', compact('conference'));
    }

    public function edit($id)
    {
        $conference = conferences()[$id] ?? null;

        if (!$conference) {
            abort(404);
        }

        return view('admin.conferences.edit', compact('conference'));
    }

    public function update(ConferenceRequest $request, $id)
    {
        return redirect()
            ->route('admin.conferences.index')
            ->with('success', 'Konferencija sėkmingai atnaujinta.');
    }

    public function destroy($id)
    {
        return redirect()
            ->route('admin.conferences.index')
            ->with('success', 'Konferencija sėkmingai pašalinta.');
    }
}