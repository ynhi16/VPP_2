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

				<div class="col">
					<img class="img-dangnhap" src="{{('public/frontend/img/dangnhap.png')}}" alt="error">
				</div>

				<div class="col">
					<div class="thongtin-dangnhap">
						<h1>Đăng nhập</h1>
						<div class="inf">
							<form action="{{URL::to('/kiemtra-dangnhap')}}" method="post">
								<input type="text" class="form-control input-trang input-inf" placeholder="Tên đăng nhập" name="taikhoan">
								<input type="password" class="form-control input-trang input-inf" placeholder="Mật khẩu" name="matkhau">
								<p class="p-quenmk">Quên mật khẩu</p>
								<input type="submit" name="dangnhap" class="btn-hong btn-dangnhap" value="Đăng nhập">
							</form>
							<p class="p-dangky"><a href="{{URL::to('/dangky')}}">Đăng ký</a></p>
						</div>

					</div>

				</div>

			</div>
	</div>
	<div style="margin-top: 100px;">
		@include("footer")
	</div>

</body>

</html>