@extends('admin.home')
@section('main-content')
    <table class="table table-stripped">
        <thead>
            <th>ID</th>
            <th>NAME</th>
            <th>
                <a class="btn btn-success" href="./add-brand">Add new</a>
            </th>
        </thead>
        <tbody>
            @foreach($brands as $brand)
            <tr>
                <td>{{$brand->id}}</td>
                <td>{{$brand->name}}</td>
                <td>
                    <a class="btn btn-primary" href="./edit-brand?id={{$brand->id}}">Edit</a>
                    <a class="btn btn-danger" onclick="return confirm('Are you sure')" href="./delete-brand?id={{$brand->id}}">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection