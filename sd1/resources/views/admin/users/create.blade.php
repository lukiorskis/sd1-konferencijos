@extends('layouts.app')

@section('content')

<h1>Naujas naudotojas</h1>

<form method="POST" action="/admin/users">

    @csrf

    @include('admin.users.form')

</form>

@endsection