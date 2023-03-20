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
            <th>CONTENT</th>
            <th>USERNAME</th>
            <th>PRODUCT</th>
            <th>ACTION</th>
        </thead>
        <tbody>
            @foreach($comments as $comment)
            <tr>
                <td>{{$comment->id}}</td>
                <td>{{$comment->content}}</td>
                <td>
                    @foreach($users as $user)
                        @if($user->id == $comment->user_id)
                            {{$user->username}}
                        @endif
                    @endforeach
                </td>
                <td>
                    @foreach($products as $product)
                        @if($product->id == $comment->product_id)
                            {{$product->name}}
                        @endif
                    @endforeach
                </td>
                <td>
                    <a class="btn btn-danger" onclick="return confirm('Are you sure')" href="./delete-comment?id={{$comment->id}}">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>