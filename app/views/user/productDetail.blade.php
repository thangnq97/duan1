<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=`, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>{{$item->id}}</p>
    <p>{{$item->name}}</p>
    <p>{{$item->detail}}</p>
    <img src="{{$item->image}}" style="width: 150px;height: 150px;"> 
    @foreach($comments as $comment)
        <div style="margin:30px 0;">
            @foreach($users as $user)
                @if($user->id == $comment->user_id)
                    <p>{{$user->username}}</p>
                @endif
            @endforeach
            <p>{{$comment->content}}</p>
            <p>{{$comment->create_at}}</p>
        </div>
    @endforeach

    <form method="POST" action="./add-comment?id={{$item->id}}">
        <input type="hidden" value="{{$user->id}}" name="user_id">
        <input type="hidden" value="{{$item->id}}" name="product_id">
        <label for="content">Comment</label> <br>
        <textarea name="content" id="" cols="30" rows="5"></textarea>
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>