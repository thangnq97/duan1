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
            <th>IMG</th>
            <th>DETAIL</th>
        </thead>
        <tbody>
            @foreach($listItem as $pro)
            <tr>
                <td>{{$pro->id}}</td>
                <td>{{$pro->name}}</td>
                <td>
                    <a href="./product-detail?id={{$pro->id}}">
                        <img src="{{$pro->image}}" style="width: 150px; height: 150px;">
                    </a>
                </td>
                <td>{{$pro->detail}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>