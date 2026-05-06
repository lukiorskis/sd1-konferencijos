@extends('layouts.app')

@section('content')

<h1>Kliento konferencijų sąrašas</h1>

<div class="row">
    @foreach($conferences as $conference)

        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">

                    <h4>{{ $conference->title }}</h4>

                    <p>
                        <strong>Data:</strong>
                        {{ $conference->date }}
                    </p>

                    <p>
                        <strong>Vieta:</strong>
                        {{ $conference->location }}
                    </p>

                    <a href="/client/conferences/{{ $conference->id }}"
                       class="btn btn-primary">
                        Plačiau
                    </a>

                </div>
            </div>
        </div>

    @endforeach
</div>

@endsection