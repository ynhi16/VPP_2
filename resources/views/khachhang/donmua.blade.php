
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
            <?php $tongtien = 0; ?>
            @foreach($hoadons as $key => $hoadon)
            <div class="col-md-12 item-donmua">
                <div class="row" style="margin-bottom: -30px;">
                    <div class="col-md-6">
                        <p style="color: #6B6A6A;">Ngày đặt: {{$hoadon->ngayLap}}</p>
                    </div>
                    <div class="col-md-6">
                        @if($hoadon->trangThai == 'Chờ xác nhận')
                        <p style="text-align: right;"><label style="padding-right: 5px; color: #16A085;">Đang xử lý</label><label style="color: #16A085;"> | </label><a href="{{URL::to('/del-hoadon/'.$hoadon->maHD)}}" class="a-thaotac">Huỷ đơn</a></p>
                        @else
                        <p style="text-align: right;"><label style="padding-right: 5px; color: #16A085;">{{$hoadon->trangThai}}</label><label style="color: #16A085;">
                                @endif
                    </div>
                </div>
                <hr style="border-width: 0.5px;">
                <!-- danh sach san pham -->

                @foreach($chitiets as $id => $value)
                @if($value->maHD == $hoadon->maHD)
                <!-- bat dau item san pham -->
                <div class="row item-sanphamgiohang"> 
                    <div class="col-md-2">
                        <a href="{{URL::to('/chitietsanpham/'.$value->maSP)}}"><img src="{{asset('public/frontend/img/'.$hinhanhs[$id])}}" class="img-thumbnail" alt="Cinque Terre"></a>
                    </div>
                    <div class="col-md-7" style="padding-left: 0px;">
                        <p class="text-dendam">{{$value->tenSP}}</p>
                        <p>Phân loại: {{$value->phanLoai}}</p>
                        <p>Đơn giá: {{$value->donGia}} đ</p>
                        <p>Số lượng: {{$value->soLuong}}</p>
                    </div>
                    <div class="col-md-3">
                        <p class="p-box4">{{$value->soLuong * $value->donGia}} đ</p>
                    </div>
                </div> 
                <!-- ket thuc item san pham -->
                <hr style="border-width: 0.5px;">

                <?php $tongtien += $value->soLuong * $value->donGia; ?>
                @endif
                @endforeach
                <p style="text-align: right;">Tổng tiền: <?php echo $tongtien ?> đ</p>
            </div>
            @endforeach
            
            <!-- ket thuc item don mua -->


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

    @endsection