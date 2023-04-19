@extends('admin.home')
@section('main-content')
    <table class="table table-stripped">
        <thead class="text-center">
            <th style="width: 3%" class="text-center">FULLNAME</th>
            <th style="width: 3%" class="text-center">PHONE</th>
            <th style="width: 5%" class="text-center">EMAIL</th>
            <th style="width: 15%" class="text-center">ADDRESS</th>
            <th style="width: 3%" class="text-center">TOTAL PRICE</th>
            <th style="width: 10%" class="text-center">STATUS</th>
            <th style="width: 8%" class="text-center">CREATE_AT</th>
            <th style="width: 15%" class="text-center">ACTION</th>
        </thead>
        <tbody class="text-center">
            @foreach ($bills as $bill)
                <tr>
                    <td>{{$bill->fullname}}</td>
                    <td>{{$bill->phone}}</td>
                    <td>{{$bill->email}}</td>
                    <td>{{$bill->address}}</td>
                    <td>{{$bill->total_price}}</td>
                    <td>
                        <a class="btn btn-primary" onclick="return confirm('Are you sure?')" href="./update-bill?id={{$bill->id}}">{{$bill->status}}</a>
                    </td>
                    <td>{{$bill->create_at}}</td>
                    <td>
                        <a class="btn btn-success" href="./bill-detail?id={{$bill->id}}">Detail</a>
                        <a class="btn btn-danger" onclick="return confirm('Are you sure?')" href="./cancel-bill?id={{$bill->id}}">Cancel</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection