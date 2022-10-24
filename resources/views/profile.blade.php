@extends('layouts.app')

@section('profile')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3" style="margin-top:20px">
{{--                <h2 class="text-center">{{ $headTitle }}</h2>--}}
                <form action="{{route('user.update', $user->id )}}" method="post">

                    @method('put')
                    @csrf

                    <div class="form-group" style="margin-top:20px">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name"
                               placeholder="Enter Name"
                               value="{{$user->name}}">
                        <span style="color:red">@error('name'){{ $message }} @enderror</span>
                    </div>

                    <div class="form-group" style="margin-top:20px">
                        <label for="">E-mail</label>
                        <input type="text" class="form-control" name="email"
                               placeholder="Enter E-mail"
                               value="{{$user->email}}">
                        <span style="color:red">@error('email'){{ $message }} @enderror</span>
                    </div>


                    <div class="form-group" style="margin-top:20px">
                        <button type="submit" class="btn btn-primary btn-block">Save</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection
