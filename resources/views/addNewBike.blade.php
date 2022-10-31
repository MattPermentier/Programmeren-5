@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6 col-md-offset-3">
            <h1>Add New Bike</h1>

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

            <form action="{{route('bikes.store')}}" method="post">

                @csrf

                <div class="form-group">
                    <label for="">Brand</label>
                    <select name="brand" class="form-control">
                        <option value="" disabled selected>Select a Brand</option>
                        <option value="Aprillia" {{ old('brand')=='Aprillia' ? 'selected' : '' }}>Aprillia</option>
                        <option value="BMW" {{ old('brand')=='BMW' ? 'selected' : '' }}>BMW</option>
                        <option value="Ducati" {{ old('brand')=='Ducati' ? 'selected' : '' }}>Ducati</option>
                        <option value="Harley-Davidson" {{ old('brand')=='Harley-Davidson' ? 'selected' : '' }}>Harley-Davidson</option>
                        <option value="Honda" {{ old('brand')=='Honda' ? 'selected' : '' }}>Honda</option>
                        <option value="Kawasaki" {{ old('brand')=='Kawasaki' ? 'selected' : '' }}>Kawasaki</option>
                        <option value="KTM" {{ old('brand')=='KTM' ? 'selected' : '' }}>KTM</option>
                        <option value="Moto Guzzi" {{ old('brand')=='Moto Guzzi' ? 'selected' : '' }}>Moto Guzzi</option>
                        <option value="MV Agusta" {{ old('brand')=='MV Agusta' ? 'selected' : '' }}>MV Agusta</option>
                        <option value="Suzuki" {{ old('brand')=='Suzuki' ? 'selected' : '' }}>Suzuki</option>
                        <option value="Triumph" {{ old('brand')=='Triumph' ? 'selected' : '' }}>Triumph</option>
                        <option value="Yamaha" {{ old('brand')=='Yamaha' ? 'selected' : '' }}>Yamaha</option>
                    </select>
                    <span style="color:red">@error('brand'){{ $message }} @enderror</span>
                </div>

                <div class="form-group">
                    <label for="">Model Name</label>
                    <input type="text" class="form-control" name="model" placeholder="Model Name"
                           value="{{ old('model') }}">
                    <span style="color:red">@error('model'){{ $message }} @enderror</span>
                </div>

                <div class="form-group">
                    <label for="">Category</label>
                    <select name="category" class="form-control">
                        <option value="" disabled selected>Select a Category</option>
                        <option value="All-Road" {{ old('category')=='All-Road' ? 'selected' : '' }}>All-Road</option>
                        <option value="Naked" {{ old('category')=='Naked' ? 'selected' : '' }}>Naked</option>
                        <option value="Sport" {{ old('category')=='Sport' ? 'selected' : '' }}>Sport</option>
                        <option value="Super-Sport" {{ old('category')=='Super-Sport' ? 'selected' : '' }}>Super-Sport</option>
                        <option value="Tour" {{ old('category')=='Tour' ? 'selected' : '' }}>Tour</option>
                        <option value="Sport-Tour" {{ old('category')=='Sport-Tour' ? 'selected' : '' }}>Sport-Tour</option>
                    </select>
                    <span style="color:red">@error('category'){{ $message }} @enderror</span>
                </div>

                <div class="form-group">
                    <label for="">Description</label>
                    <input type="text" class="form-control" name="description" placeholder="Description"
                           value="{{ old('description') }}">
                    <span style="color:red">@error('description'){{ $message }} @enderror</span>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Save</button>
                </div>

            </form>
        </div>
    </div>
@endsection
