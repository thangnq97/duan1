@extends('admin.home')
@section('main-content')
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
@endsection