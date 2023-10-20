@extends('layout')
@section('content')


    <div class="card">
        <div class="card-header">Courses Page</div>
        <div class="card-body">


            <div class="card-body">
                <h5 class="card-title">Name : {{ $courses->name }}</h5>
                <p class="card-text">subject : {{ $courses->subject }}</p>
                <p class="card-text">duration : {{ $courses->duration()  }}</p>
            </div>

            </hr>

        </div>
    </div>
@endsection
