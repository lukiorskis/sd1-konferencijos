@extends('layouts.app')

@section('content')
<h1>Darbuotojo konferencijų sąrašas</h1>

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
                <a href="/employee/conferences/{{ $conference['id'] }}" class="btn btn-primary btn-sm">
                    Peržiūrėti
                </a>
            </td>
        </tr>
    @endforeach
</table>
@endsection