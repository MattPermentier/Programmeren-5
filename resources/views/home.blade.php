@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <table>
                <th>Brand</th>
                <th>|</th>
                <th>Category</th>
                <th>|</th>
                <th>Model Name</th>
                <th>|</th>
                <th>Description</th>
                <th>|</th>
                <th>Image</th>

                @foreach($bikes as $bike)
                    <tr>
                        <td>{{ $bike->brand }}</td>
                        <td></td>
                        <td>{{ $bike->category }}</td>
                        <td></td>
                        <td>{{ $bike->model_name }}</td>
                        <td></td>
                        <td>{{ $bike->description }}</td>
                        <td></td>
                        <td>{{ $bike->image }}</td>
                    </tr>
            @endforeach
            </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
