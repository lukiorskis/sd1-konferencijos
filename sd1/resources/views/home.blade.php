@extends('layouts.app')

@section('content')
<h1>Konferencijų registracijos sistema</h1>

<p>Pasirinkite naudotojo tipą:</p>

<a href="/client/conferences" class="btn btn-primary">Klientas</a>
<a href="/employee/conferences" class="btn btn-success">Darbuotojas</a>
<a href="/admin" class="btn btn-dark">Administratorius</a>
@endsection