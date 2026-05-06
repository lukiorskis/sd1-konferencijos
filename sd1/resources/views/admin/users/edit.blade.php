@extends('layouts.app')

@section('content')

<h1>Naudotojo redagavimas</h1>

<form method="POST" action="/admin/users/{{ $user['id'] }}">

    @csrf
    @method('PUT')

    @include('admin.users.form')

</form>

@endsection