@extends('admin.home')
@section('main-content')
    <table class="table table-stripped">
        <thead class="text-center">
            <th>PRODUCT</th>
            <th>SIZE</th>
            <th>TOPPING</th>
            <th>QUANTITY</th>
            <th><a class="btn btn-primary" href="./bill-manager">Back</a></th>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{$item[0]}}</td>
                    <td>{{$item[1]}}</td>
                    <td>
                        @foreach ($item[2] as $topping)
                            {{$topping}} <br>
                        @endforeach
                    </td>
                    <td>{{$item[3]}}</td>
                    <td>
                        
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection