@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6 col-md-offset-3">
            <h1>Edit Bike</h1>

            @if(Session::get('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif

            @if(Session::get('fail'))
                <div class="alert alert-danger">
                    {{ Session::get('fail') }}
                </div>
            @endif

            <form action="{{ route('bikes.update', $bike->id) }}" method="post">
                @method('PUT')

                @csrf
                <input type="hidden" name="cid" value="{{ $bike->id }}">

                <div class="form-group">
                    <label for="">Brand</label>
                    <select name="brand" class="form-control">
                        <option value="{{ $bike->brand }}" selected>{{ $bike->brand }}</option>
                        <option value="Aprilia">Aprilia</option>
                        <option value="BMW">BMW</option>
                        <option value="Ducati">Ducati</option>
                        <option value="Harley-Davidson">Harley-Davidson</option>
                        <option value="Honda">Honda</option>
                        <option value="Kawasaki">Kawasaki</option>
                        <option value="KTM">KTM</option>
                        <option value="Moto Guzzi">Moto Guzzi</option>
                        <option value="MV Agusta">MV Agusta</option>
                        <option value="Suzuki">Suzuki</option>
                        <option value="Triumph">Triumph</option>
                        <option value="Yamaha">Yamaha</option>
                    </select>
                    <span style="color:red">@error('brand'){{ $message }} @enderror</span>
                </div>

                <div class="form-group">
                    <label for="">Model Name</label>
                    <input type="text" class="form-control" name="model" placeholder="Model Name"
                           value="{{ $bike->model }}">
                    <span style="color:red">@error('model'){{ $message }} @enderror</span>
                </div>

                <div class="form-group">
                    <label for="">Category</label>
                    <select name="category" class="form-control" placeholder="Category">
                        <option value="{{ $bike->category }}">{{ $bike->category }}</option>
                        <option value="All-Road" >All-Road</option>
                        <option value="Naked">Naked</option>
                        <option value="Sport">Sport</option>
                        <option value="Super-Sport">Super-Sport</option>
                        <option value="Tour">Tour</option>
                        <option value="Sport-Tour">Sport-Tour</option>
                    </select>
                    <span style="color:red">@error('category'){{ $message }} @enderror</span>
                </div>

                <div class="form-group">
                    <label for="">Description</label>
                    <input type="text" class="form-control" name="description" placeholder="Description"
                           value="{{ $bike->description }}">
                    <span style="color:red">@error('description'){{ $message }} @enderror</span>
                </div>

                <div class="form-group" style="margin-top: 10px">
                    <button type="submit" class="btn btn-primary btn-block">Update</button>
                </div>

            </form>
        </div>
    </div>
@endsection

