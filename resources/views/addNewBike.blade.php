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
    <h1>Add New Bike</h1>
    <form action="add" method="post">
        <div class="form-group">
            <label for="">Brand</label>
            <input type="text" class="form-control" name="brand" placeholder="Brand">
        </div>
        <div class="form-group">
            <label for="">Model Name</label>
            <input type="text" class="form-control" name="modelName" placeholder="Model Name">
        </div>
        <div class="form-group">
            <label for="">Category</label>
            <input type="text" class="form-control" name="category" placeholder="Category">
        </div>
        <div class="form-group">
            <label for="">Description</label>
            <input type="text" class="form-control" name="description" placeholder="Description">
        </div>
        <div class="form-group">
            <label for="">Image</label>
            <input type="text" class="form-control" name="image" placeholder="Image">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Save</button>
        </div>
    </form>
</div>
<a href="/">Go back</a>
</body>
</html>
