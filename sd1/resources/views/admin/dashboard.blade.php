@extends('layouts.app')

@section('content')

<h1>Administratoriaus puslapis</h1>

<a
    href="/admin/conferences"
    class="btn btn-success"
>
    Konferencijų valdymas
</a>

<a
    href="/admin/users"
    class="btn btn-primary"
>
    Naudotojų valdymas
</a>

@endsection