<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<!-- File Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<!-- CSS tùy chỉnh của bạn ở dưới này -->
	<link rel="stylesheet" href="{{('public/frontend/css/khachhang.css')}}">
	<link rel="stylesheet" href="{{('public/frontend/css/dangnhap.css')}}">
	<link rel="stylesheet" href="{{asset('public/frontend/css/layout.css')}}">

	<style>
		.img-dangnhap {
			width: 400px;
			height: 400px;
			margin-top: 40px;
		}

		.input-inf {
			margin-top: 30px;
			margin-right: 10%;
			height: 55px;
			width: 100%;
		}

		.form_dangnhap {
			margin-top: -30px;
			margin-right: 100px;
			margin-left: 100px;
		}

		.p-dangky {
			margin-top: 15px;
		}
		.a-dangky {
			color: black;
		}
		.a-dangky:hover {
			color: black;
			text-decoration: none;
		}
	</style>

</head>

<body>

	<div class="wp-dangnhap">
		<div class="row header">
			<div class="logo">
				<h1 class="h-title">Sahami</h1>
				<p>Văn phòng phẩm</p>
			</div>
		</div>

		<div class="row form_dangnhap">
		<div class="col-md-1"></div>

			<div class="col-md-4">
				<img class="img-dangnhap" src="{{('public/frontend/img/dangnhap.png')}}" alt="error">
			</div>

			<div class="col-md-1"></div>

			<div class="col-md-5">
				<div class="thongtin-dangnhap">
					<h1>Đăng nhập</h1>
					<div class="inf">
						<form action="{{URL::to('/kiemtra-dangnhap')}}" method="post">
							@csrf
							<input type="text" class="form-control input-trang input-inf" placeholder="Tên đăng nhập" name="taikhoan">
							<input type="password" class="form-control input-trang input-inf" placeholder="Mật khẩu" name="matkhau">
							<p class="p-quenmk">Quên mật khẩu</p>
							<input type="submit" name="dangnhap" class="btn-hong btn-dangnhap" value="Đăng nhập">
						</form>
						<p class="p-dangky"><a class="a-dangky" href="{{URL::to('/dangky')}}">Bạn chưa có tài khoản?</a></p>
					</div>

				</div>

			</div>

		</div>
	</div>
	<!-- <div style="margin-top: 100px;">
		@include("footer")
	</div> -->

</body>

</html>