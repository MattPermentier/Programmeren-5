@extends('layouts.app')

@section('category')
    <div class="col-md-8">
        @foreach($category as $bike)
            <div class="card" style="width: 18rem; margin: 10px;">
                {{--                        <img src="{{ $bike->image }}" class="card-img-top" alt="...">--}}
                <div class="card-body">
                    <h5 class="card-title"><a
                            href="{{ route('bike.show', $bike->id) }}">{{ $bike->brand }} {{ $bike->model }}</a>
                    </h5>
                    <h6>{{ $bike->category }}</h6>
                    <p class="card-text">{{ $bike->description }}</p>

                    @if(auth()->user()->role == 1)
                        <div class="btn-group">
                            <form action="{{ route('bike.edit', $bike->id) }}">
                                <button class="btn btn-primary">Edit</button>
                            </form>

                            <form action="{{ route('bike.destroy', $bike->id) }}" method="post">
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
@endsection
