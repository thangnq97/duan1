@extends('admin.home')
@section('main-content')
    <table class="table table-stripped">
        <thead>
            <th>ID</th>
            <th>NAME</th>
            <th>Price</th>
            <th>
                <a class="btn btn-success" href="./add-topping">Add new</a>
            </th>
        </thead>
        <tbody>
            @foreach($topping as $top)
            <tr>
                <td>{{$top->id}}</td>
                <td>{{$top->name}}</td>
                <td>{{$top->price}}</td>
                <td>
                    <a class="btn btn-primary" href="./edit-topping?id={{$top->id}}">Edit</a>
                    <a class="btn btn-danger" onclick="return confirm('Are you sure')" href="./delete-topping?id={{$top->id}}">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection