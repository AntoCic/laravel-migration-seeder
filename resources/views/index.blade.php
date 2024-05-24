@extends('layouts.app')

@section('title')Home @endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Home</h1>
        </div>
        <p class="bg-dark text-white p-5 text-center rounded">
            {{ $saluto }}
        </p>
    </div>
</div>
@endsection
