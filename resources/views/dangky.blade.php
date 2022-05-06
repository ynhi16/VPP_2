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
			margin-top: 60px;
		}

		.input-inf {
			margin-top: 30px;
			margin-right: 10%;
			height: 55px;
			width: 100%;
		}

		.form_dangnhap {
			margin-top: -50px;
			margin-right: 100px;
			margin-left: 100px;
		}

		.p-dangky {
			margin-top: 35px;
		}

		.a-dangky {
			color: blue;
		}

		.a-dangky:hover {
			color: black;
			text-decoration: none;
		}

		.btn_dangky {
			margin-top: 50px;
			width: 100%;
		    height: 50px;
		    font-size: 20px;
		}
	</style>

</head>

<body>

	<div class="wp-dangnhap">
		<div class="row header">
			<div class="logo">
				<h1 class="h-title">Sahami</h1>		
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
					<h1>Đăng ký</h1>

					<form action="{{URL::to('/add-user')}}" method="post">
						@csrf
						<div class="inf">
							<?php
							$msg = Session::get('msg');
							if ($msg) {
								echo $msg;
								Session::put('msg', null);
							}
							?>
							<input type="text" class="form-control input-trang  input-inf" placeholder="Họ tên" name="hoten">
							<input type="email" class="form-control input-trang  input-inf" placeholder="Email" name="email">
							<input type="text" class="form-control input-trang  input-inf" placeholder="Tên đăng nhập" name="taikhoan">
							<input type="password" class="form-control input-trang  input-inf" placeholder="Mật khẩu" name="matkhau">

							<input type="submit" style="font-size: 18px;" class="btn-hong btn_dangky" value="Tạo tài khoản">
							<p class="p-dangky"><span>Bạn đã có tài khoản?</span><a class="a-dangky" href="{{URL::to('/dangnhap')}}">Đăng nhập</a></p>
						</div>
					</form>
				</div>
				<?php
				$message = Session::get('khoa');
				if ($message) {
					echo '<p>' . $message . '<p>';
					Session::put('khoa', null);
				}
				?>
			</div>
		</div>

	</div>
	<div style="margin: 95px 3rem 0px 3rem;">


</body>

</html>