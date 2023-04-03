<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <table class="table table-stripped">
        <thead>
            <th>ID</th>
            <th>NAME</th>
            <th>Price</th>
            <th>
                <a class="btn btn-success" href="./add-size">Add new</a>
            </th>
        </thead>
        <tbody>
            @foreach($sizes as $size)
            <tr>
                <td>{{$size->id}}</td>
                <td>{{$size->name}}</td>
                <td>{{$size->price}}</td>
                <td>
                    <a class="btn btn-primary" href="./edit-size?id={{$size->id}}">Edit</a>
                    <a class="btn btn-danger" onclick="return confirm('Are you sure')" href="./delete-size?id={{$size->id}}">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>