<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
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

    <form action="{{ route('update') }}" method="get">

        @csrf
        <input type="hidden" name="cid" value="{{ $Info->id }}">

        <div class="form-group">
            <label for="">Brand</label>
            <select name="brand" class="form-control">
                <option value="{{ $Info->brand }}" selected>{{ $Info->brand }}</option>
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
            <input type="text" class="form-control" name="modelName" placeholder="Model Name"
                   value="{{ $Info->model_name }}">
            <span style="color:red">@error('modelName'){{ $message }} @enderror</span>
        </div>

        <div class="form-group">
            <label for="">Category</label>
            <select name="category" class="form-control" placeholder="Category" >
                <option value="{{ $Info->category }}">{{ $Info->category }}</option>
                <option value="All-Road">All-Road</option>
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
                   value="{{ $Info->description }}">
            <span style="color:red">@error('description'){{ $message }} @enderror</span>
        </div>

        <div class="form-group">
            <label for="">Image</label>
            <input type="text" class="form-control" name="image" placeholder="Image" value="{{ $Info->image }}">
            <span style="color:red">@error('image'){{ $message }} @enderror</span>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Update</button>
        </div>

        <a href="/">Go back</a>
    </form>
</div>
</body>
</html>


