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
				<h1 class = "h-title">Sahami</h1>
				<p>Văn phòng phẩm</p>
			</div>
		</div>

		<div class="row form_dangnhap">
			<div class="col">
				<img class="img-dangnhap" src="{{('public/frontend/img/dangnhap.png')}}" alt="error">
			</div>

			<div class="col">
				<div class="thongtin-dangnhap">
					<h1>Đăng ký</h1>
					<div class="inf">
    					<input type="text" class="form-control input-trang  input-inf" placeholder="Họ tên">
    					<input type="text" class="form-control input-trang  input-inf" placeholder="Email">
    					<input type="text" class="form-control input-trang  input-inf" placeholder="Tên đăng nhập">
    					<input type="password" class="form-control input-trang  input-inf" placeholder="Mật khẩu">

						<input type="submit" class="btn-hong btn-dangnhap" value="Tạo tài khoản">
						<p class="p-dangky"><a href="{{URL::to('/dangnhap')}}">Đăng nhập</a></p>
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