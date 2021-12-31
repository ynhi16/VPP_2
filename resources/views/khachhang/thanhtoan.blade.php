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
                <!-- danh sach san pham -->
                <?php
                $giohang = Cart::content();
                $tongtien = 0;
                ?>

                @foreach($giohang as $item)
                <hr style="border-width: 0.5px;">
                <div class="row item-sanphamgiohang">
                    <!-- bat dau item san pham -->

                    <div class="col-md-3">
                        <a href="{{URL::to('/chitietsanpham/'.$item->id.'&'.$item->options->image)}}"><img src="{{asset('public/frontend/img/'.$item->options->image)}}" class="img-thumbnail" alt="Cinque Terre"></a>
                    </div>
                    <div class="col-md-6" style="padding-left: 0px;">
                        <p class="text-dendam">{{$item->name}}</p>
                        <p>Số lượng: {{$item->qty}}</p>
                    </div>
                    <div class="col-md-3">
                        <p class="p-box4">{{$item->price * $item->qty}} đ</p>
                    </div>
                </div>
                <?php $tongtien += $item->price * $item->qty; ?>
                @endforeach
                <!-- ket thuc item san pham -->
                
            </div>
            <!-- ket thuc danh sach san pham -->
            <div class="col-md-3 inf-sanpham">
                <p class="title-tt">Thông tin người nhận</p>
                <label class="thongtin">{{$nguoidung->tenND}}</label> <br>
                <label class="thongtin">{{$nguoidung->SDT}}</label>
                <hr style="border-width: 0.5px;">

                <p class="title-tt">Địa chỉ giao hàng</p>
                <p class="thongtin">{{$nguoidung->diaChi.', '.$nguoidung->tenPX.', '.$nguoidung->tenQH.', '.$nguoidung->tenTT}}</p>
                <hr style="border-width: 0.5px;">

                <p class="title-tt">Phương thức thanh toán</p>
                <p class="thongtin">Thanh toán trực tiếp khi nhận hàng</p>
                <hr style="border-width: 0.5px;">

                <div class="row">
                    <div class="col-md-6">
                        <p class="title-tt">Phí vận chuyển</p>
                    </div>
                    <div class="col-md-6">
                        <p style="text-align: right;">15.000 đ</p>
                    </div>
                </div>
                <hr style="border-width: 0.5px;">

                <div class="row">
                    <div class="col-md-7">
                        <p class="title-tt">Tổng tiền thanh toán</p>
                    </div>
                    <div class="col-md-5">
                        <p style="text-align: right;"><?php echo $tongtien ?> đ</p>
                    </div>
                </div>

                <div class="btn-thanhtoan"><button class="btn-xanh thanhtoan"><a href="{{URL::to('/donmua')}}" style="color: white;">Thanh toán</a></button></div>
            </div>
        </div>
    </div>
</body>

</html>

@endsection