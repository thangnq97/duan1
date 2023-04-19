<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="w-full max-w-[1440px] mx-auto">
        <header class="bg-black h-[120px] flex justify-between p-[30px] items-center">
            <section class="flex justify-between items-center gap-[60px]">
                <a class="pl-[50px]" href="./">
                    <img class="w-[200px] h-[50px]" src="./public/imgs/Logo-ngang-01.png" alt="">
                </a>
                <ul class="flex justify-between items-center gap-[40px]">
                    <li><a class="text-white text-[16px] hover:text-[chocolate] font-normal" href="./">Trang chủ</a></li>
                    <li><a class="text-white text-[16px] hover:text-[chocolate] font-normal" href="./all-product">Sản phẩm</a></li>
                    <li><a class="text-white text-[16px] hover:text-[chocolate] font-normal" href="./news">Giới thiệu</a></li>
                    <li><a class="text-white text-[16px] hover:text-[chocolate] font-normal" href="./show-cart">Giỏ hàng</a></li>
                    <li><a class="text-white text-[16px] hover:text-[chocolate] font-normal" href="./history-cart">Lịch sử mua hàng</a></li>
                </ul>
            </section>
            <section>
                <p class="text-white text-[16px] font-normal">Xin chào {{$user['username']}}, <a class="hover:text-[chocolate]" href="./sign-out">Sign out</a></p>
            </section>
        </header>
        <main class="w-[70%] mx-auto mt-[50px]">
            <table class="w-full rounded">
                <thead>
                    <tr>
                        <th class="border border-black text-center py-4">ID</th>
                        <th class="border border-black text-center py-4">FULLNAME</th>
                        <th class="border border-black text-center py-4">PHONE</th>
                        <th class="border border-black text-center py-4">ADDRESS</th>
                        <th class="border border-black text-center py-4">TOTAL PRICE</th>
                        <th class="border border-black text-center py-4">STATUS</th>
                        <th class="border border-black text-center py-4">CREATE AT</th>
                        <th class="border border-black text-center py-4">ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bills as $bill)
                        <tr>
                            <td class="border border-black text-center px-3 py-4">{{$bill->id}}</td>
                            <td class="border border-black text-center px-3 py-4">{{$bill->fullname}}</td>
                            <td class="border border-black text-center px-3 py-4">{{$bill->phone}}</td>
                            <td class="border border-black text-center px-3 py-4">{{$bill->address}}</td>
                            <td class="border border-black text-center px-3 py-4">{{$bill->total_price}}</td>
                            <td class="border border-black text-center px-3 py-4">{{$bill->status}}</td>
                            <td class="border border-black text-center px-3 py-4">{{$bill->create_at}}</td>
                            <td class="border border-black text-center px-3 py-4"><button class="text-[14px] text-white font-[400] bg-[#1E74A4] rounded h-[30px] w-[70px] hover:opacity-90"><a class="" href="./user-bill-detail?id={{$bill->id}}">Detail</a></button></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </main>
    </div>
</body>
</html>