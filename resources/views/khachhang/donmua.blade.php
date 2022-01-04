
@extends('layout')
@section('trangchu')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .wp-thanhtoan {
            margin-left: 100px;
            margin-right: 170px;
            width: 1300px;

        }

        .item-donmua {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            border: solid #DDDDDD;
            border-width: 2px;
            margin-bottom: 30px;
        }

        .inf-sanpham {
            border: solid #6666;
            border-width: 1.5px;
            border-radius: 5px;
            height: 580px;
            padding-left: 15px;
            padding-top: 20px;
            margin-left: 50px;

        }

        .a-thaotac {
            padding-left: 5px;
            color: #16A085;
            text-decoration: none;
        }

        a.a-thaotac:hover {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="wp-thanhtoan">
        <h2>Lịch sử mua hàng</h2>
        <hr style="border-width: 0.5px;">
        <div class="row" style="padding-left: 10px; padding-right: 10px;">
            <!-- item don mua -->
            <div class="col-md-12 item-donmua">
                <div class="row" style="margin-bottom: -30px;">
                    <div class="col-md-6">
                        <p style="color: #6B6A6A;">Ngày đặt: 12/12/2021</p>
                    </div>
                    <div class="col-md-6">
                    <p style="text-align: right;"><label style="padding-right: 5px; color: #16A085;">Đang xử lý</label><label style="color: #16A085;"> | </label><a href="#" class="a-thaotac">Huỷ đơn</a></p>
                    </div>
                </div>
                <hr style="border-width: 0.5px;">
                <!-- danh sach san pham -->
                <div class="row item-sanphamgiohang">
                    <!-- bat dau item san pham -->
                    <div class="col-md-2">
                        <a href="{{URL::to('/chitietsanpham/1')}}"><img src="{{asset('public/frontend/img/sanpham1.png')}}" class="img-thumbnail" alt="Cinque Terre"></a>
                    </div>
                    <div class="col-md-7" style="padding-left: 0px;">
                        <p class="text-dendam">60 Sticker cổ điển retro</p>
                        <p>Số lượng: 2</p>
                    </div>
                    <div class="col-md-3">
                        <p class="p-box4">66.000 VNĐ</p>
                    </div>
                </div> <!-- ket thuc item san pham -->
                <hr style="border-width: 0.5px;">

                <div class="row item-sanphamgiohang">
                    <!-- bat dau item san pham -->
                    <div class="col-md-2">
                        <a href="{{URL::to('/chitietsanpham/1')}}"><img src="{{asset('public/frontend/img/sanpham1.png')}}" class="img-thumbnail" alt="Cinque Terre"></a>
                    </div>
                    <div class="col-md-7" style="padding-left: 0px;">
                        <p class="text-dendam">60 Sticker cổ điển retro</p>
                        <p>Số lượng: 2</p>
                    </div>
                    <div class="col-md-3">
                        <p class="p-box4">66.000 VNĐ</p>
                    </div>
                </div> <!-- ket thuc item san pham -->
                <hr style="border-width: 0.5px;">
                <div class="row">
                    <p style="text-align: right;">Tổng tiền: 102.000 VNĐ</p>
                </div>
            </div>
            <!-- ket thuc item don mua -->
            <!-- item don mua -->
            <div class="col-md-12 item-donmua">
                <div class="row" style="margin-bottom: -30px;">
                    <div class="col-md-6">
                        <p style="color: #6B6A6A;">Ngày đặt: 12/12/2021</p>
                    </div>
                    <div class="col-md-6">
                    <p style="text-align: right;"><label style="padding-right: 5px; color: #16A085;">Đang xử lý</label><label style="color: #16A085;"> | </label><a href="#" class="a-thaotac">Huỷ đơn</a></p>
                    </div>
                </div>
                <hr style="border-width: 0.5px;">
                <!-- danh sach san pham -->
                <div class="row item-sanphamgiohang">
                    <!-- bat dau item san pham -->
                    <div class="col-md-2">
                        <a href="{{URL::to('/chitietsanpham/1')}}"><img src="{{asset('public/frontend/img/sanpham1.png')}}" class="img-thumbnail" alt="Cinque Terre"></a>
                    </div>
                    <div class="col-md-7" style="padding-left: 0px;">
                        <p class="text-dendam">60 Sticker cổ điển retro</p>
                        <p>Số lượng: 2</p>
                    </div>
                    <div class="col-md-3">
                        <p class="p-box4">66.000 VNĐ</p>
                    </div>
                </div> <!-- ket thuc item san pham -->
                <hr style="border-width: 0.5px;">

                <div class="row item-sanphamgiohang">
                    <!-- bat dau item san pham -->
                    <div class="col-md-2">
                        <a href="{{URL::to('/chitietsanpham/1')}}"><img src="{{asset('public/frontend/img/sanpham1.png')}}" class="img-thumbnail" alt="Cinque Terre"></a>
                    </div>
                    <div class="col-md-7" style="padding-left: 0px;">
                        <p class="text-dendam">60 Sticker cổ điển retro</p>
                        <p>Số lượng: 2</p>
                    </div>
                    <div class="col-md-3">
                        <p class="p-box4">66.000 VNĐ</p>
                    </div>
                </div> <!-- ket thuc item san pham -->
                <hr style="border-width: 0.5px;">
                <div class="row">
                    <p style="text-align: right;">Tổng tiền: 102.000 VNĐ</p>
                </div>
            </div>
            <!-- ket thuc item don mua -->
            <!-- item don mua -->
            <div class="col-md-12 item-donmua">
                <div class="row" style="margin-bottom: -30px;">
                    <div class="col-md-6">
                        <p style="color: #6B6A6A;">Ngày đặt: 12/12/2021</p>
                    </div>
                    <div class="col-md-6">
                    <p style="text-align: right;"><label style="padding-right: 5px; color: #16A085;">Đang xử lý</label><label style="color: #16A085;"> | </label><a href="#" class="a-thaotac">Huỷ đơn</a></p>
                    </div>
                </div>
                <hr style="border-width: 0.5px;">
                <!-- danh sach san pham -->
                <div class="row item-sanphamgiohang">
                    <!-- bat dau item san pham -->
                    <div class="col-md-2">
                        <a href="{{URL::to('/chitietsanpham/1')}}"><img src="{{asset('public/frontend/img/sanpham1.png')}}" class="img-thumbnail" alt="Cinque Terre"></a>
                    </div>
                    <div class="col-md-7" style="padding-left: 0px;">
                        <p class="text-dendam">60 Sticker cổ điển retro</p>
                        <p>Số lượng: 2</p>
                    </div>
                    <div class="col-md-3">
                        <p class="p-box4">66.000 VNĐ</p>
                    </div>
                </div> <!-- ket thuc item san pham -->
                <hr style="border-width: 0.5px;">

                <div class="row item-sanphamgiohang">
                    <!-- bat dau item san pham -->
                    <div class="col-md-2">
                        <a href="{{URL::to('/chitietsanpham/1')}}"><img src="{{asset('public/frontend/img/sanpham1.png')}}" class="img-thumbnail" alt="Cinque Terre"></a>
                    </div>
                    <div class="col-md-7" style="padding-left: 0px;">
                        <p class="text-dendam">60 Sticker cổ điển retro</p>
                        <p>Số lượng: 2</p>
                    </div>
                    <div class="col-md-3">
                        <p class="p-box4">66.000 VNĐ</p>
                    </div>
                </div> <!-- ket thuc item san pham -->
                <hr style="border-width: 0.5px;">
                <div class="row">
                    <p style="text-align: right;">Tổng tiền: 102.000 VNĐ</p>
                </div>
            </div>
            <!-- ket thuc item don mua -->
       

        </div>
    </div>
</body>

</html>

@endsection