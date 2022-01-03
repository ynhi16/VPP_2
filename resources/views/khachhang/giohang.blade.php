@extends('khachhangHome')
@section('khachhang_content')
<div class="wp-giohang">
	<h2>Giỏ hàng</h2>
	<div class="row">
		<div class="col-md-7">
			<?php
			$giohang = Cart::content();
			$soluong = 0;
			$tongsoluong = 0;
			$tongtien = 0;
			?>

			@foreach($giohang as $item)
			<hr style="border-width: 0.5px;">
			<!-- bat dau item san pham -->
			<div class="row item-sanphamgiohang">
				<div class="col-md-3">
					<a href="{{URL::to('/chitietsanpham/1')}}"><img src="{{asset('public/frontend/img/'.$item->options->image)}}" class="img-thumbnail" alt="Cinque Terre"></a>
				</div>
				<div class="col-md-4" style="padding-left: 0px;">
					<p class="text-dendam">{{$item->name}}</p>
					<p>{{$item->price}} đ</p>
				</div>
				<div class="col-md-3 giohang-box3">
					<div class="giohang-box3-1">

						<div class="btnsoluong">
							<button class="btn-soluong-giam"><a href="#" style="color: #16A085;">-</a></button>
							<input type="text" class="input-soluong" value="{{$item->qty}}">
							<button class="btn-soluong-tang"><a href="#" style="color: white;">+</a></button>
						</div>


					</div>
				</div>
				<div class="col-md-2">
					<p class="p-box4">{{$item->qty * $item->price}} đ</p>
					<p style="text-align: right;"><a href="{{URL::to('/del-giohang/'.$item->rowId)}}" class="a-del text-xanh">Delete</a></p>
				</div>
			</div> <!-- ket thuc item san pham -->

			<?php
			$soluong++;
			$tongsoluong += $item->qty;
			$tongtien += $item->qty * $item->price;
			?>
			@endforeach
		</div>
		<div class="col-md-3 inf-giohang" style="border-width: 1px; border-radius: 10px; padding-left: 30px;">
			<h5 style="font-weight: bold;"><?php echo $soluong ?> sản phẩm</h5>
			<p>Tổng số lượng: <?php echo $tongsoluong ?> món</p>
			<p>Tổng tiền: <?php echo $tongtien ?> đ</p>
			<button class="btn-xanh btn-giohang-tttt"><a href="{{URL::to('/thanhtoan')}}" style="color: white;">Tiếp tục để thanh toán</a></button>
		</div>
	</div>
</div>
<!-- /// -->
<div style="margin-top: 100px;"></div>
<div style="width: 87%; margin-left: 90px;">

	<p class="text-dendam">Sản phẩm bán chạy</p>
	<div class="row spbc">
		@for($i=0; $i<=3; $i++) <div class="col-md-3 img-sp-bc">
			<div class="row">
				<a href="{{URL::to('/chitietsanpham/'.$sanphambc[$i]->maSP.'&'.$sanphambc[$i]->tenHA)}}"><img src="{{asset('public/frontend/img/'.$sanphambc[$i]->tenHA)}}" class="img-thumbnail" alt="Cinque Terre"></a>
			</div>
			<div class="row" style="font-size: 16px; margin-top: 5px;">
				<div class="col-md-8">
					<p>{{$sanphambc[$i]->tenSP}}</p>
				</div>
				<div class="col-md-4 ">
					<p class="bg-xanh">{{$sanphambc[$i]->donGia}} đ</p>
				</div>
			</div>
	</div>
	@endfor
</div>

<div class="row spbc">
	@for($i=4; $i<=7; $i++) <div class="col-md-3 img-sp-bc">
		<div class="row">
			<a href="{{URL::to('/chitietsanpham/'.$sanphambc[$i]->maSP.'&'.$sanphambc[$i]->tenHA)}}"><img src="{{asset('public/frontend/img/'.$sanphambc[$i]->tenHA)}}" class="img-thumbnail" alt="Cinque Terre"></a>
		</div>
		<div class="row" style="font-size: 16px; margin-top: 5px;">
			<div class="col-md-8">
				<p>{{$sanphambc[$i]->tenSP}}</p>
			</div>
			<div class="col-md-4 ">
				<p class="bg-xanh">{{$sanphambc[$i]->donGia}} đ</p>
			</div>
		</div>
</div>
@endfor
</div>
@endsection