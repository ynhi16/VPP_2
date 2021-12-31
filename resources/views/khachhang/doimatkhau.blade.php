@extends('khachhangHome')
@section('khachhang_content')

<div class="container">
	<div class="col-md-10">
		<h2>Thiết lập tài khoản</h2>

		<!-- bắt đầu menu ngang -->
		<div class="row" style="margin-top: 70px;">
			<a class="tab-khongchon" href="{{URL::to('/canhan')}}">Thông tin cá nhân</a>
			<a class="btn-xanh tab-duocchon" href="{{URL::to('/matkhau')}}">Đổi mật khẩu</a>
		</div> <!-- kết thúc menu ngang -->

		<hr>

		<?php

		$tbcanhan = Session::get('capnhat');
		if ($tbcanhan) {
			echo $tbcanhan;
			Session::put('capnhat', '');
		}
		?>

		<!-- bắt đầu phần điền mật khẩu -->
		<form action="{{URL::to('/capnhat-mk')}}" method="post">
			@csrf
			<div class="row inf-canhan">

				<label for="pwd"><strong>Mật khẩu hiện tại</strong></label>
				<input type="text" class="form-control input-canhan" name="mkcu">
				<label for="pwd"><strong>Mật khẩu mới</strong></label>
				<input type="password" class="form-control input-canhan" name="mkmoi">
				<label for="pwd"><strong>Nhập lại mật khẩu</strong></label>
				<input type="password" class="form-control input-canhan" name="mkmoi2">

			</div> <!-- kết thúc phần điền mật khẩu -->

			<div class="row" style="margin-top: 100px;">
				<button type="submit" class="btn-xanh btn-luu">Lưu thay đổi</button>
			</div>
		</form>
	</div>
</div>

@endsection