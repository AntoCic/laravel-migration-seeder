@extends('layouts.app')

@section('title')Home @endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Home</h1>
        </div>
        @foreach ($trains as $train)
        <div class="col-12 bg-dark text-white p-2 text-center rounded my-2">
            <h2>{{ $train->agency }}</h2>
            <p>{{ $train->departure_station }} - {{ $train->arrival_station }}</p>
            <p>{{ $train->departure_time }} - {{ $train->arrival_time }}</p>
            <p>Codice treno: <span class="badge text-bg-light">{{ $train->train_code }}</span></p>
           
            @if ($train->delate)
                <span class="badge text-bg-danger">CANCELLATO</span>
            @else
                @if ($train->in_time)
                    <span class="badge text-bg-success">IN ORARIO</span>
                @else
                    <span class="badge text-bg-warning">IN RITARDO</span>
                @endif
            @endif

            <p>Numero di carrozze: {{ $train->number_carriages }}</p>
        </div>
        @endforeach
        
    </div>
</div>
@endsection
