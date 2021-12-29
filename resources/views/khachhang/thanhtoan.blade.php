@extends('khachhangHome')
@section('khachhang_content')
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
            margin-right: 70px;
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

        .title-tt {
            color: #16A085;
            font-weight: bold;
        }
        .thongtin {
            margin-left: 30px;
        }

        .btn-thanhtoan {
            width: 100%;
            text-align: center;
        }
        .thanhtoan {
            width: 300px;
            height: 40px;
            margin-top: 25px;
        }
    </style>
</head>

<body>
    <div class="wp-thanhtoan">
        <h2>Thanh toán</h2>
        <div class="row">
            <div class="col-md-6">
            <hr style="border-width: 0.5px;">
                <!-- danh sach san pham -->
                <div class="row item-sanphamgiohang">
                    <!-- bat dau item san pham -->
                    <div class="col-md-3">
                        <a href="{{URL::to('/chitietsanpham/1')}}"><img src="{{asset('public/frontend/img/sanpham1.png')}}" class="img-thumbnail" alt="Cinque Terre"></a>
                    </div>
                    <div class="col-md-6" style="padding-left: 0px;">
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
                    <div class="col-md-3">
                        <a href="{{URL::to('/chitietsanpham/1')}}"><img src="{{asset('public/frontend/img/sanpham1.png')}}" class="img-thumbnail" alt="Cinque Terre"></a>
                    </div>
                    <div class="col-md-6" style="padding-left: 0px;">
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
                    <div class="col-md-3">
                        <a href="{{URL::to('/chitietsanpham/1')}}"><img src="{{asset('public/frontend/img/sanpham1.png')}}" class="img-thumbnail" alt="Cinque Terre"></a>
                    </div>
                    <div class="col-md-6" style="padding-left: 0px;">
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
                    <div class="col-md-3">
                        <a href="{{URL::to('/chitietsanpham/1')}}"><img src="{{asset('public/frontend/img/sanpham1.png')}}" class="img-thumbnail" alt="Cinque Terre"></a>
                    </div>
                    <div class="col-md-6" style="padding-left: 0px;">
                        <p class="text-dendam">60 Sticker cổ điển retro</p>
                        <p>Số lượng: 2</p>
                    </div>
                    <div class="col-md-3">
                        <p class="p-box4">66.000 VNĐ</p>
                    </div>
                </div> <!-- ket thuc item san pham -->

            </div>
            <!-- ket thuc danh sach san pham -->
            <div class="col-md-3 inf-sanpham">
                <p class="title-tt">Thông tin người nhận</p>
                <label class="thongtin">Nguyễn Thị Khánh Hạ</label> <br>
                <label class="thongtin">0395838923</label>
                <hr style="border-width: 0.5px;">

                <p class="title-tt">Địa chỉ giao hàng</p>
                <p class="thongtin">02 Thanh Sơn, Thanh Bình, Hải Châu, Đà Nẵng</p>
                <hr style="border-width: 0.5px;">

                <p class="title-tt">Phương thức thanh toán</p>
                <p class="thongtin">Thanh toán trực tiếp khi nhận hàng</p>
                <hr style="border-width: 0.5px;">
                
                <div class="row"><div class="col-md-6"><p class="title-tt">Phí vận chuyển</p></div>
                <div class="col-md-6"><p style="text-align: right;">15.000 đ</p></div></div>
                <hr style="border-width: 0.5px;">

                <div class="row"><div class="col-md-7"><p class="title-tt">Tổng tiền thanh toán</p></div>
                <div class="col-md-5"><p style="text-align: right;">105.000 đ</p></div></div>
                
                <div class="btn-thanhtoan"><button class="btn-xanh thanhtoan">Thanh toán</button></div>
            </div>
        </div>
    </div>
</body>

</html>

@endsection