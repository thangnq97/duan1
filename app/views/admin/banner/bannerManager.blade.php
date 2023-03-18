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
            <th>IMAGE</th>
            <th>BRAND</th>
            <th>
                <a class="btn btn-success" href="./add-banner">Add new</a>
            </th>
        </thead>
        <tbody>
            @foreach($banners as $banner)
            <tr>
                <td>{{$banner->id}}</td>
                <td>
                    <img src="{{$banner->image}}" style="width: 150px; height: 150px;">
                </td>
                <td>
                    @foreach($brands as $brand)
                        @if($brand->id == $banner->brand_id)
                            {{$brand->name}}
                        @endif
                    @endforeach
                </td>
                <td>
                    <a class="btn btn-primary" href="./edit-banner?id={{$banner->id}}">Edit</a>
                    <a class="btn btn-danger" onclick="return confirm('Are you sure')" href="./delete-banner?id={{$banner->id}}">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>