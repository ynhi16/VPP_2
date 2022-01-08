@extends('layout')
@section('trangchu')
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

    @endsection