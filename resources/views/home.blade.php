@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <table class="table table-hover">
                <thead>
                <th>Brand</th>
                <th>Category</th>
                <th>Model Name</th>
                <th>Description</th>
                <th>Image</th>
                </thead>
                <tbody>
                @foreach($bikes as $bike)
                    <tr>
                        <td>{{ $bike->brand }}</td>
                        <td>{{ $bike->category }}</td>
                        <td>{{ $bike->model_name }}</td>
                        <td>{{ $bike->description }}</td>
                        <td>{{ $bike->image }}</td>
                        <td>
                            <div class="btn-group">
                                <a href="edit/{{ $bike->id }}" class="btn btn-primary btn-xs">Edit</a>
                                <a href="delete/{{ $bike->id }}" class="btn btn-danger btn-xs">Delete</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


