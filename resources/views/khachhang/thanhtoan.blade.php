@extends('layout')
@section('trangchu')
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



    /* thông tin người nhận */
    .btn-thanhtoan {
        background-color: black;

    
        width: 100%;
        border-radius: 30px;
        margin-top: 30px;
        color: white;
        font-size: 18px;
        text-align: center;
        text-decoration: none;
        padding-top: 10px;
    }

    .btn-thanhtoan:hover {
        color: white;
        text-decoration: none;
    }
</style>
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

                    <div class="col-md-9">
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

                <?php $tongtien += $item->price * $item->qty; ?>
                @endforeach

                <hr style="border-width: 0.5px;">
                <p style="text-align: right;">Tổng tiền: <?php echo $tongtien ?> đ</p>
                @php

            $vnd_to_usd = $tongtien/23083

            @endphp
             @php

                    $vnd_to_usd = $tongtien/23083

                @endphp
                <div class="d-flex justify-content-evenly mt-4">

                    <div id="paypal-button"></div>

                    <input type="hidden" id="vnd_to_usd" value="{{round($vnd_to_usd,2)}}"/>

                    <form action="{{url('/vnpay_payment')}}" method="POST">

                        @csrf

                        <input type="hidden" name="tong_vnpay" value="{{$tongtien}}"/>

                        <button type="submit" class="btn btn-warning btn-sm" name="redirect">Thanh toán bằng VNPAY</button>

                    </form>

                    <form action="{{url('/momo_payment')}}" method="POST">

                        @csrf

                        <input type="hidden" name="tong_momo" value="{{$tongtien}}"/>

                        <button type="submit" class="btn btn-warning btn-sm" name="redirect">Thanh toán bằng MOMO</button>

                    </form>
                    <form action="{{url('/onepay_payment')}}" method="POST">

                        @csrf

                        <input type="hidden" name="tong_onepay" value="{{$tongtien}}"/>

                        <button type="submit" class="btn btn-warning btn-sm" name="redirect">Thanh toán bằng ONEPAY</button>

                    </form>

                </div>
            </div>

            <!-- ket thuc item san pham -->

            <div class="col-md-1"></div>
            <div class="col-md-4">
                <div class="panel-body">
                    <p style="text-align: center; font-size: 28px;">Thông tin người nhận</p>
                    <form action="{{URL::to('/add-hoadon')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label style="margin-top: 10px;">Họ tên</label>
                            <input type="text" class="form-control" name="hoten" value="<?php if ($nguoidung) echo $nguoidung->tenND ?>">
                        </div>
                        <div class="form-group">
                            <label style="margin-top: 10px;">Số điện thoại</label>
                            <input type="text" class="form-control" name="sdt" value="<?php if ($nguoidung) echo $nguoidung->SDT ?>">
                        </div>
                        <div class="form-group">
                            <label style="margin-top: 10px;">Tỉnh/Thành phố</label>
                            <select class="form-control" name="tinhthanh">
                                <option></option>
                                @foreach($tinhthanh as $key => $tt)
                                @if($nguoidung && $tt->tenTT == $nguoidung->tenTT)

                                <option selected value="{{$tt->IDTT}}">{{$tt->tenTT}}</option>
                                @else

                                <option value="{{$tt->IDTT}}">{{$tt->tenTT}}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label style="margin-top: 10px;">Quận/Huyện</label>
                            <select class="form-control" name="quanhuyen">
                                <option></option>
                                @foreach($quanhuyen as $key => $tt)
                                @if($nguoidung && $tt->tenQH == $nguoidung->tenQH)

                                <option selected value="{{$tt->IDQH}}">{{$tt->tenQH}}</option>
                                @else

                                <option value="{{$tt->IDQH}}">{{$tt->tenQH}}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label style="margin-top: 10px;">Phường/Xã</label>
                            <select class="form-control" name="phuongxa">
                                <option></option>
                                @foreach($phuongxa as $key => $tt)
                                @if($nguoidung && $tt->tenPX == $nguoidung->tenPX)

                                <option selected value="{{$tt->IDPX}}">{{$tt->tenPX}}</option>
                                @else

                                <option value="{{$tt->IDPX}}">{{$tt->tenPX}}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label style="margin-top: 10px;">Số nhà</label>
                            <input type="text" class="form-control" name="sonha" value="<?php if ($nguoidung) echo $nguoidung->diaChi ?>">
                        </div>
                        <?php
                        $msg = Session::get("msg");
                        if ($msg) {
                            echo $msg;
                            Session::put("msg", null);
                        }
                        ?>
                        <button class="btn-thanhtoan">Đặt hàng</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
    </div>

@endsection