@extends('layouts.app')

@section('content')

<h1>Naudotojų valdymas</h1>

<a href="/admin/users/create" class="btn btn-success mb-3">
    Naujas naudotojas
</a>

<table class="table table-bordered">

    <tr>
        <th>Vardas</th>
        <th>Pavardė</th>
        <th>El. paštas</th>
        <th>Veiksmai</th>
    </tr>

    @foreach($users as $user)

        <tr>

            <td>
                {{ $user['name'] }}
            </td>

            <td>
                {{ $user['surname'] }}
            </td>

            <td>
                {{ $user['email'] }}
            </td>

            <td>

                <a
                    href="/admin/users/{{ $user['id'] }}/edit"
                    class="btn btn-warning btn-sm"
                >
                    Redaguoti
                </a>

                <form
                    method="POST"
                    action="/admin/users/{{ $user['id'] }}"
                    style="display:inline-block"
                >

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