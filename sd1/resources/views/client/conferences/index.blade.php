@extends('layouts.app')

@section('content')
<h1>Kliento konferencijų sąrašas</h1>

<div class="row">
@foreach($conferences as $conference)
    <div class="col-md-6 mb-3">
        <div class="card">
            <div class="card-body">
                <h5>{{ $conference['title'] }}</h5>
                <p>{{ $conference['description'] }}</p>
                <a href="/client/conferences/{{ $conference['id'] }}" class="btn btn-primary">
                    Peržiūrėti
                </a>
            </div>
        </div>
    </div>
@endforeach
</div>
@endsection