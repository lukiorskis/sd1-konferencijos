@extends('layouts.app')

@section('content')

<h1>Konferencijų valdymas</h1>

<a href="/admin/conferences/create" class="btn btn-success mb-3">
    Nauja konferencija
</a>

<table class="table table-bordered">
    <tr>
        <th>Pavadinimas</th>
        <th>Data</th>
        <th>Veiksmai</th>
    </tr>

    @foreach($conferences as $conference)
        <tr>
            <td>{{ $conference['title'] }}</td>
            <td>{{ $conference['date'] }}</td>
            <td>
                <a href="/admin/conferences/{{ $conference['id'] }}" class="btn btn-info btn-sm">
                    Peržiūra
                </a>

                <a href="/admin/conferences/{{ $conference['id'] }}/edit" class="btn btn-warning btn-sm">
                    Redaguoti
                </a>

                <form method="POST" action="/admin/conferences/{{ $conference['id'] }}" style="display:inline-block">
                    @csrf
                    @method('DELETE')

                    <button class="btn btn-danger btn-sm">
                        Trinti
                    </button>
                </form>
            </td>
        </tr>
    @endforeach
</table>

@endsection