@extends('layouts.app')

@section('content')

<h1>Darbuotojo konferencijų sąrašas</h1>

<table class="table table-bordered">
    <tr>
        <th>Pavadinimas</th>
        <th>Data</th>
        <th>Vieta</th>
        <th>Užsiregistravę klientai</th>
    </tr>

    @foreach($conferences as $conference)
        <tr>
            <td>{{ $conference->title }}</td>
            <td>{{ $conference->date }}</td>
            <td>{{ $conference->location }}</td>
            <td>
                @forelse($conference->users as $user)
                    {{ $user->name }}<br>
                @empty
                    Nėra registracijų
                @endforelse
            </td>
        </tr>
    @endforeach
</table>

@endsection