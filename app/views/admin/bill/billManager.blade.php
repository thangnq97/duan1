@extends('admin.home')
@section('main-content')
    <table class="table table-stripped">
        <thead class="text-center">
            <th class="text-center">FULLNAME</th>
            <th class="text-center">PHONE</th>
            <th class="text-center">EMAIL</th>
            <th class="text-center">ADDRESS</th>
            <th class="text-center">TOTAL PRICE</th>
            <th class="text-center">STATUS</th>
            <th class="text-center">CREATE_AT</th>
            <th class="text-center">ACTION</th>
        </thead>
        <tbody class="text-center">
            @foreach ($bills as $bill)
                <tr>
                    <td>{{$bill->fullname}}</td>
                    <td>{{$bill->phone}}</td>
                    <td>{{$bill->email}}</td>
                    <td>{{$bill->address}}</td>
                    <td>{{$bill->total_price}}</td>
                    <td>{{$bill->status}}</td>
                    <td>{{$bill->create_at}}</td>
                    <td>
                        <a class="btn btn-success" href="./bill-detail?id={{$bill->id}}">Detail</a>
                        <a class="btn btn-primary" onclick="return confirm('Are you sure?')" href="./update-bill?id={{$bill->id}}">Update</a>
                        <a class="btn btn-danger" onclick="return confirm('Are you sure?')" href="./cancel-bill?id={{$bill->id}}">Cancel</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection