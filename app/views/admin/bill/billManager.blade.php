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
            <th>FULLNAME</th>
            <th>PHONE</th>
            <th>EMAIL</th>
            <th>ADDRESS</th>
            <th>TOTAL_PRICE</th>
            <th>STATUS</th>
            <th>USER_ID</th>
        </thead>
        <tbody>
            @foreach($products as $pro)
            <tr>
                <td>{{$pro->id}}</td>
                <td>{{$pro->name}}</td>
                <td>
                    <img src="{{$pro->image}}" style="width: 150px; height: 150px;" alt="">
                </td>
                <td>{{$pro->detail}}</td>
                <td>
                    @foreach($brands as $brand)
                        @if($brand->id == $pro->brand_id) 
                            {{$brand->name}}
                        @endif
                    @endforeach
                </td>
                <td>
                    <a class="btn btn-primary" href="./edit-product?id={{$pro->id}}">Edit</a>
                    <a class="btn btn-danger" onclick="return confirm('Are you sure')" href="./delete-product?id={{$pro->id}}">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>