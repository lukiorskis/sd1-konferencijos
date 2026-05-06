<?php

namespace App\Http\Controllers;

use App\Models\Conference;

class EmployeeConferenceController extends Controller
{
    public function index()
    {
        $conferences = Conference::with('users')->get();

        return view('employee.conferences.index', compact('conferences'));
    }

    public function show($id)
    {
        $conference = Conference::with('users')->findOrFail($id);

        return view('employee.conferences.show', compact('conference'));
    }
}