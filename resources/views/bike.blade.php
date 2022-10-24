@extends('layouts.app')

@section('content')
    <div class="col-sm-3">
        <div class="card mb-3">
            <div class="card-body">
                <h4 class="card-title">{{ $bike->brand }}</h4>
                <p class="card-text">{{ $bike->model }}</p>
                <p class="card-text">{{ $bike->category }}</p>
                <p class="card-text">{{ $bike->description }}</p>
                <a href="{{route('bikes.index')}}" class="btn btn-primary">All Bikes</a>
            </div>
        </div>
    </div>
@endsection
