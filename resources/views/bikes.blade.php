@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row justify-content-center">


{{--            only show when user is normal user and user has 2 or more bikes or user is admin--}}
            @if($numPosts >= 2 && auth()->user()->role == 0 || auth()->user()->role == 1)
            @include('partials.search')
            <div class="col-md-8">
                @foreach($bikes as $bike)

                    <div class="card" style="width: 18rem; margin: 10px;">
                        <div class="card-body">
                            <h5 class="card-title"><a
                                    href="{{ route('bikes.show', $bike->id) }}">{{ $bike->brand }} {{ $bike->model }}</a>
                            </h5>
                            <h6>Category: {{ $bike->category }}</h6>
                            <p class="card-text">{{ $bike->description }}</p>

                            @if(auth()->user()->role == 1)
                                <div class="btn-group">
                                    <form action="{{ route('bikes.edit', $bike->id) }}">
                                        <button class="btn btn-primary">Edit</button>
                                    </form>

                                    <form action="{{ route('bikes.destroy', $bike->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit">Delete</button>
                                    </form>
                                </div>
                            @endif


                        </div>
                    </div>
                @endforeach
            </div>

            @elseif($numPosts == 0)
                    <h4>Voeg 2 motoren toe om toegang te krijgen tot alle motoren</h4>
            @else
                    <h4>Voeg nog 1 motor toe om toegang te krijgen tot alle motoren</h4>
            @endif

        </div>
    </div>
    </div>
    </div>
@endsection
