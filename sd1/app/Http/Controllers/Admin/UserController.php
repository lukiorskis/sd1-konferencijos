<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = users();

        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required|email',
        ]);

        return redirect()
            ->route('admin.users.index')
            ->with('success', 'Naudotojas sukurtas.');
    }

    public function edit($id)
    {
        $user = users()[$id] ?? null;

        if (!$user) {
            abort(404);
        }

        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required|email',
        ]);

        return redirect()
            ->route('admin.users.index')
            ->with('success', 'Naudotojas atnaujintas.');
    }

    public function destroy($id)
    {
        return redirect()
            ->route('admin.users.index')
            ->with('success', 'Naudotojas pašalintas.');
    }
}