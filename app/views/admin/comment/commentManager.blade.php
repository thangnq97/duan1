@extends('admin.home')
@section('main-content')
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
@endsection