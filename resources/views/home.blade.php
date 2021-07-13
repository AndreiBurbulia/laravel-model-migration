@extends('layout.app')

@section('title', 'Homepage')

@section('content')
    <h1>Destinations</h1>

    <div class="container">

        @foreach ($travels as $travel)

            <div class="card">
                <img src="{{ $travel['poster'] }}" alt="">
                <p> <strong>Destination : </strong> {{ $travel['country'] }} ( {{ $travel['city'] }} )</p>
                <p> <strong>Departure : </strong> {{ $travel['departure'] }}</p>
                <p> <strong>Return : </strong> {{ $travel['return'] }}</p>
                <p> <strong>Detail : </strong> {{ $travel['detail'] }}</p>
                <p> <strong>Price : </strong> {{ $travel['price'] }}$ for {{ $travel['n_persons'] }} person</p>
            </div>
        @endforeach
    </div>

@endsection
