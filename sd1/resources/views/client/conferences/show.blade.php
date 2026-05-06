@extends('layouts.app')

@section('content')

<h1>{{ $conference->title }}</h1>

<p>
    <strong>Aprašymas:</strong><br>
    {{ $conference->description }}
</p>

<p>
    <strong>Data:</strong>
    {{ $conference->date }}
</p>

<p>
    <strong>Vieta:</strong>
    {{ $conference->location }}
</p>

<p>
    <strong>Maksimalus dalyvių skaičius:</strong>
    {{ $conference->max_participants }}
</p>

<form method="POST" action="/client/conferences/{{ $conference->id }}/register">
    @csrf

    <button class="btn btn-success">
        Registruotis
    </button>
</form>

@endsection