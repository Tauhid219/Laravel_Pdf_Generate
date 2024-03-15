<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Add Product</title>
</head>

<body>
    <div class="container">
        <h1>Add Product</h1>
        <a href="{{ route('pr.index') }}"><button class="btn btn-sm btn-success">Product List</button></a><br>&nbsp;
        <form action="{{ route('pr.store') }}" method="post">
            @csrf
            <div class="col-md-6">
                <input type="text" class="form-control" placeholder="Name" name="name"><br>
                <input type="text" class="form-control" placeholder="Price" name="price"><br>
                <input type="text" class="form-control" placeholder="Quantity" name="quantity"><br>
                <input type="submit" value="Add" class="btn btn-sm btn-primary">
            </div>
        </form>
    </div>
</body>

</html>
