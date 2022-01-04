
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


        /* thông tin người nhận */
        .btn-thanhtoan {
            background-color: black;
            height: 45px;
            border-radius: 30px;
			margin-top: 30px;
            color: white;
            font-size: 20px;
        }

    </style>
</head>

<body>
    <div class="wp-thanhtoan">
        <h2>Thanh toán</h2>
        <div class="row">
            <div class="col-md-5">
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

            <div class="col-md-1"></div>
            <div class="col-md-4">
                <div class="panel-body">
                    <p style="text-align: center; font-size: 28px;">Thông tin người nhận</p>
                    <form role="form" action="{{URL::to('/add-bandoc')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label>Họ tên</label>
                            <input type="text" class="form-control" name="them_hoten">
                        </div>
                        <div class="form-group">
                            <label>Số điện thoại</label>
                            <input type="text" class="form-control" name="them_hoten">
                        </div>
                        <div class="form-group">
                            <label>Tỉnh/Thành phố</label>
                            <input type="text" class="form-control" name="them_hoten">
                        </div>
                        <div class="form-group">
                            <label>Quận/Huyện</label>
                            <input type="text" class="form-control" name="them_hoten">
                        </div>
                        <div class="form-group">
                            <label>Phường/Xã</label>
                            <input type="text" class="form-control" name="them_hoten">
                        </div>
                        <div class="form-group">
                            <label>Số nhà</label>
                            <input type="text" class="form-control" name="them_hoten">
                        </div>
                        <button class="btn-thanhtoan">Đặt hàng</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

@endsection