@extends('admin.home')
@section('main-content')
    <table class="table table-stripped">
        <thead>
            <th>ID</th>
            <th>NAME</th>
            <th>Discount</th>
            <th>
                <a class="btn btn-success" href="./add-voucher">Add new</a>
            </th>
        </thead>
        <tbody>
            @foreach($vouchers as $voucher)
            <tr>
                <td>{{$voucher->id}}</td>
                <td>{{$voucher->name}}</td>
                <td>{{$voucher->discount}}</td>
                <td>
                    <a class="btn btn-primary" href="./edit-voucher?id={{$voucher->id}}">Edit</a>
                    <a class="btn btn-danger" onclick="return confirm('Are you sure')" href="./delete-voucher?id={{$voucher->id}}">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection