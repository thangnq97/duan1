@extends('admin.home')
@section('main-content')
    <table class="table table-stripped">
        <thead>
            <th>ID</th>
            <th>NAME</th>
            <th>IMG</th>
            <th>Price</th>
            <th>BRAND</th>
            <th>
                <a class="btn btn-success" href="./add-product">Add new</a>
            </th>
        </thead>
        <tbody>
            @foreach($products as $pro)
            <tr>
                <td>{{$pro->id}}</td>
                <td>{{$pro->name}}</td>
                <td>
                    <img src="{{$pro->image}}" style="width: 150px; height: 150px;" alt="">
                </td>
                <td>{{$pro->price}}</td>
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
@endsection