<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Edit Product</title>
</head>

<body>
    <div class="container">
        <h1>Edit Product</h1><br>&nbsp;
        <form action="{{ route('pr.update', $data->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="col-md-6">
                <input type="text" class="form-control" value="{{ $data->name }}" name="name"><br>
                <input type="text" class="form-control" value="{{ $data->price }}" name="price"><br>
                <input type="text" class="form-control" value="{{ $data->quantity }}" name="quantity"><br>
                <input type="submit" value="Update" class="btn btn-sm btn-primary">
            </div>
        </form>
    </div>
</body>

</html>
