<<<<<<< HEAD
@extends('khachhangHome')
@section('khachhang_content')

    <div class="wp-thanhtoan">
        <h2>Thanh toán</h2>
        <div class="row">
            <div class="col-md-7">
                <!-- danh sach san pham -->
                <?php
                $giohang = Cart::content();
                $tongtien = 0;
                ?>

                @foreach($giohang as $item)
                <hr style="border-width: 0.5px;">
                <div class="row item-sanphamgiohang">
                    <!-- bat dau item san pham -->

                    <div class="col-md-2">
                        <a href="{{URL::to('/chitietsanpham/'.$item->id.'&'.$item->options->image)}}"><img src="{{asset('public/frontend/img/'.$item->options->image)}}" class="img-thumbnail" alt="Cinque Terre"></a>
                    </div>

                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-md-9">
                                <p style="margin: 0;">{{$item->name}}</p>
                                <label style="font-size: 13px; color: #8B8989;">Phân loại: {{$item->options->phanloai}}</label>
                                <p style="font-size: 13px; color: #8B8989">Số lượng: {{$item->qty}}</p>
                            </div>
                            <div class="col-md-3">
                                <p style="text-align: right;">{{$item->price * $item->qty}} đ</p>
                            </div>
                        </div>
                    </div>
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


    @endsection