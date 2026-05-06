@extends('layouts.app')

@section('content')

<h1>Konferencijos redagavimas</h1>

<form method="POST" action="/admin/conferences/{{ $conference['id'] }}">
    @csrf
    @method('PUT')

    @include('admin.conferences.form')
</form>

@endsection