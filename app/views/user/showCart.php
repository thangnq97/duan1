<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    @if ($data)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Size</th>
                    <th>Đường</th>
                    <th>Đá</th>
                    <th>Topping</th>
                    <th>Số Lượng</th>
                    <th>Gía</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $k =>$v)
                    <tr>
                        <td>{{$v[0]}}</td>
                        <td>{{$v[1]}}</td>
                        <td>{{$v[2]}}%</td>
                        <td>{{$v[3]}}%</td>
                        <td>
                            @foreach ($v[4] as $top)
                                {{$top}}<br>
                            @endforeach
                        </td>
                        <td>{{$v[5]}}</td>
                        <td>{{$v[6]}}</td>
                        <td><a href="./remove-cart-index?index={{$k}}">Xóa</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <h3>Tổng tiền: {{$total_price}}</h3>
        <a href="./confirm-cart">Xác nhận đặt hàng</a>
    @else
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Size</th>
                        <th>Đường</th>
                        <th>Đá</th>
                        <th>Topping</th>
                        <th>Số Lượng</th>
                        <th>Gía</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $k =>$v)
                        <tr>
                            <td>{{$v[0]}}</td>
                            <td>{{$v[1]}}</td>
                            <td>{{$v[2]}}%</td>
                            <td>{{$v[3]}}%</td>
                            <td>
                                @foreach ($v[4] as $top)
                                    {{$top}}<br>
                                @endforeach
                            </td>
                            <td>{{$v[5]}}</td>
                            <td>{{$v[6]}}</td>
                            <td><a href="./remove-cart-index?index={{$k}}">Xóa</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        <h3>Giỏ hàng trống</h3>
        <a href="./">Tiếp tục đặt hàng</a>    
    @endif
</body>
</html>