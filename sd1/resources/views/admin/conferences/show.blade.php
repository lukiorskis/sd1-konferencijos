@extends('layouts.app')

@section('content')

<h1>{{ $conference['title'] }}</h1>

<p><strong>Aprašymas:</strong> {{ $conference['description'] }}</p>
<p><strong>Lektoriai:</strong> {{ $conference['speakers'] }}</p>
<p><strong>Data:</strong> {{ $conference['date'] }}</p>
<p><strong>Laikas:</strong> {{ $conference['time'] }}</p>
<p><strong>Adresas:</strong> {{ $conference['address'] }}</p>

<a href="/admin/conferences" class="btn btn-secondary">
    Atgal
</a>

@endsection