@extends('layout')
@section('content')


    <div class="card">
        <div class="card-header">Course Page</div>
        <div class="card-body">


            <div class="card-body">
                <h5 class="card-title">Name : {{$teachers ->name }}</h5>
                <p class="card-text">address : {{ $teachers->address }}</p>
                <p class="card-text">Mobile : {{ $teachers->Mobile }}</p>
            </div>

            </hr>

        </div>
    </div>
@endsection
