@extends('layout.app')

@section('title', 'Homepage')

@section('content')
    <h1>Funzia ext</h1>

    <div class="container">

        @foreach ($travels as $travel)

            <div class="card">
                <p>{{ $travel['country'] }}</p>
                <p>{{ $travel['city'] }}</p>
            </div>
        @endforeach
    </div>

@endsection
