@extends('layouts.app')

@section('yourBikes')
@section('bikes')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @foreach($yourBikes as $bike)
                    <div class="card" style="width: 18rem; margin: 10px;">
                        {{--                        <img src="{{ $bike->image }}" class="card-img-top" alt="...">--}}
                        <div class="card-body">
                            <h5 class="card-title"><a
                                    href="{{ route('bikes.show', $bike->id) }}">{{ $bike->brand }} {{ $bike->model }}</a>
                            </h5>
                            <h6>{{ $bike->category }}</h6>
                            <p class="card-text">{{ $bike->description }}</p>

                            <div class="btn-group" style="gap: 10px">
                                <form action="{{ route('bikes.edit', $bike->id) }}">
                                    <button class="btn btn-primary">Edit</button>
                                </form>

                                <form action="{{ route('bikes.destroy', $bike->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </form>

                                <form action="" method="post">
                                    @csrf
                                    <button class="btn btn-primary">Active</button>
                                </form>
                            </div>


                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
@endsection
