@extends('layouts.app')

@section('content')
    @include('partials.search')
    <div class="col-md-8">

        @foreach($bikes as $bike)
            <div class="card" style="width: 18rem; margin: 10px;">
                <div class="card-body">
                    <h5 class="card-title"><a
                            href="{{ route('bikes.show', $bike->id) }}">{{ $bike->brand }} {{ $bike->model }}</a>
                    </h5>

                    <h6>Author: {{ DB::table('users')->where('id', $bike->user_id)->value('name') }}</h6>

                    <h6>Category: {{ $bike->category }}</h6>
                    <p class="card-text">{{ $bike->description }}</p>

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
                </div>
            </div>
        @endforeach
    </div>

@endsection
