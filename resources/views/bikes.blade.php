@extends('layouts.app')

@section('bikes')
    <div class="container">
        <div class="row justify-content-center">

            <form action="{{ "/category" }}" method="get">
                @csrf
                <input class="btn btn-primary" type="submit" value="All-Road" name="category">
                <input class="btn btn-primary" type="submit" value="Naked" name="category">
                <input class="btn btn-primary" type="submit" value="Sport" name="category">
                <input class="btn btn-primary" type="submit" value="Super-Sport" name="category">
                <input class="btn btn-primary" type="submit" value="Tour" name="category">
                <input class="btn btn-primary" type="submit" value="Sport-Tour" name="category">
            </form>

            <form action="{{ '/search' }}" type="get" class="input-group" style="display: flex">
                <input type="search" name="search">
                <input type="submit" class="btn btn-primary" placeholder="Search">
            </form>


            <div class="col-md-8">
                @foreach($bikes as $bike)

                    <div class="card" style="width: 18rem; margin: 10px;">
                        {{--                        <img src="{{ $bike->image }}" class="card-img-top" alt="...">--}}
                        <div class="card-body">
                            <h5 class="card-title"><a
                                    href="{{ route('bikes.show', $bike->id) }}">{{ $bike->brand }} {{ $bike->model }}</a>
                            </h5>
                            <h6>{{ $bike->category }}</h6>
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
        </div>
    </div>
    </div>
    </div>
@endsection
