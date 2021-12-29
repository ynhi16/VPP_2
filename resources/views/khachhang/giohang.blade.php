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
		.wp-giohang {
			font-size: 18px;
			margin-left: 90px;
		}

		.btnsoluong {
			margin-top: 40px;
			margin-bottom: 30px;
			vertical-align: bottom;
			display: table-cell;
			text-align: right;
		}

		.input-soluong {
			width: 30px;
			height: 30px;
			padding-left: 4px;
			border: none;
			color: #696767;
		}

		.btn-soluong-giam {
			border: solid #16A085;
			background-color: white;
			width: 29px;
			height: 29px;
			border-radius: 3px;
		}

		.btn-soluong-tang {
			background-color: #16A085;
			border: solid #16A085;
			width: 29px;
			height: 29px;
			border-radius: 3px;
		}
	</style>
</head>

<body>
	<div class="wp-giohang">
		<h2>Giỏ hàng</h2>
		<div class="row">
			<div class="col-md-7">
				<hr style="border-width: 0.5px;">
				<!-- bat dau item san pham -->
				<div class="row item-sanphamgiohang">
					<div class="col-md-3">
						<a href="{{URL::to('/chitietsanpham/1')}}"><img src="{{asset('public/frontend/img/sanpham1.png')}}" class="img-thumbnail" alt="Cinque Terre"></a>
					</div>
					<div class="col-md-4" style="padding-left: 0px;">
						<p class="text-dendam">60 Sticker cổ điển retro</p>
						<p>22.000 VNĐ</p>
					</div>
					<div class="col-md-3 giohang-box3">
						<div class="giohang-box3-1">

							<div class="btnsoluong">
								<button class="btn-soluong-giam"><a href="#" style="color: #16A085;">-</a></button>
								<input type="text" class="input-soluong" value="1">
								<button class="btn-soluong-tang"><a href="#" style="color: white;">+</a></button>
							</div>


						</div>
					</div>
					<div class="col-md-2">
						<p class="p-box4">66.000 VNĐ</p>
						<p class="p-box4 text-xanh">Delete</p>
					</div>
				</div> <!-- ket thuc item san pham -->
				<hr style="border-width: 0.5px;">
				<div class="row item-sanphamgiohang">
					<div class="col-md-3">
						<a href="{{URL::to('/chitietsanpham/1')}}"><img src="{{asset('public/frontend/img/sanpham1.png')}}" class="img-thumbnail" alt="Cinque Terre"></a>
					</div>
					<div class="col-md-4" style="padding-left: 0px;">
						<p class="text-dendam">60 Sticker cổ điển retro</p>
						<p>22.000 VNĐ</p>
					</div>
					<div class="col-md-3 giohang-box3">
						<div class="giohang-box3-1">

							<div class="btnsoluong">
								<button class="btn-soluong-giam"><a href="#" style="color: #16A085;">-</a></button>
								<input type="text" class="input-soluong" value="1">
								<button class="btn-soluong-tang"><a href="#" style="color: white;">+</a></button>
							</div>


						</div>
					</div>
					<div class="col-md-2">
						<p class="p-box4">66.000 VNĐ</p>
						<p class="p-box4 text-xanh">Delete</p>
					</div>
				</div> <!-- ket thuc item san pham -->
				<hr style="border-width: 0.5px;">
				<div class="row item-sanphamgiohang">
					<div class="col-md-3">
						<a href="{{URL::to('/chitietsanpham/1')}}"><img src="{{asset('public/frontend/img/sanpham1.png')}}" class="img-thumbnail" alt="Cinque Terre"></a>
					</div>
					<div class="col-md-4" style="padding-left: 0px;">
						<p class="text-dendam">60 Sticker cổ điển retro</p>
						<p>22.000 VNĐ</p>
					</div>
					<div class="col-md-3 giohang-box3">
						<div class="giohang-box3-1">

							<div class="btnsoluong">
								<button class="btn-soluong-giam"><a href="#" style="color: #16A085;">-</a></button>
								<input type="text" class="input-soluong" value="1">
								<button class="btn-soluong-tang"><a href="#" style="color: white;">+</a></button>
							</div>


						</div>
					</div>
					<div class="col-md-2">
						<p class="p-box4">66.000 VNĐ</p>
						<p class="p-box4 text-xanh">Delete</p>
					</div>
				</div> <!-- ket thuc item san pham -->
			</div>
			<div class="col-md-3 inf-giohang" style="border-width: 1px; border-radius: 10px; padding-left: 30px;">
				<h5 style="font-weight: bold;">3 sản phẩm</h5>
				<p>Tổng số lượng: 6 món</p>
				<p>Tổng tiền: 123.000 NVĐ</p>
				<button class="btn-xanh btn-giohang-tttt"><a href="{{URL::to('/thanhtoan')}}" style="color: white;">Tiếp tục để thanh toán</a></button>
			</div>
		</div>
	</div>
	<!-- /// -->
	<div style="margin-top: 100px;"></div>
	<div style="width: 87%; margin-left: 90px;">
	@include('element.sanphambanchay')
	</div>
</body>

</html>
@endsection