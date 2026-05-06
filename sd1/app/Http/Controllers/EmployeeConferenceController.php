<?php

namespace App\Http\Controllers;

class EmployeeConferenceController extends Controller
{
    public function index()
    {
        $conferences = conferences();

        return view('employee.conferences.index', compact('conferences'));
    }

    public function show($id)
    {
        $conference = conferences()[$id] ?? null;

        if (!$conference) {
            abort(404);
        }

        $registeredUsers = users();

        return view('employee.conferences.show', compact('conference', 'registeredUsers'));
    }
}