@extends('khachhangHome')
@section('khachhang_content')


<div class="container">

	<h2>Thiết lập tài khoản</h2>


	<!-- bắt đầu menu ngang -->
	<div class="row" style="margin-top: 70px;">
		<a class="btn-xanh tab-duocchon" href="{{URL::to('/canhan')}}">Thông tin cá nhân</a>
		<a class="tab-khongchon" href="{{URL::to('/matkhau')}}">Đổi mật khẩu</a>
	</div> <!-- kết thúc menu ngang -->
	<hr>

	<h4 style="margin-top: 70px;">Avatar</h4>

	<!-- bắt đầu avatar -->
	<div class="row" style="margin-top: 30px;">
		<div class="col-md-2" style="padding: 0px;">
			<img src="{{('public/frontend/img/avtkhachhang.png')}}" alt="loi">
		</div>
		<div class="col-md-10">
			<div class="row">
				<p><strong>hangu</strong></p>
			</div>
			<div class="row">
				<button class="btn-xanh" style="width: 80px; height: 35px;">Update</button>
				<button class="btn-trang" style="margin-left: 10px;width: 80px; height: 35px;">Delete</button>
			</div>
		</div>
	</div> <!-- kết thúc avatar -->

	<!-- bắt đầu phần thông tin cá nhân -->
	<form action="{{URL::to('/capnhat-ttcn')}}" method="post">
		@csrf
		<div class="row inf-canhan">
			@foreach($nguoidung as $key => $value)
			<label for="pwd"><strong>Họ tên</strong></label>
			<input type="text" class="form-control input-canhan" value="{{$value->tenND}}" name="tenND">
			<label for="pwd"><strong>Giới tính</strong></label>
			<input type="text" class="form-control input-canhan" value="{{$value->gioiTinh}}" name="gioiTinh">
			<label for="pwd"><strong>Ngày sinh</strong></label>
			<input type="date" class="form-control input-canhan" value="{{$value->ngaySinh}}" name="ngaySinh">
			<label for="pwd"><strong>Email</strong></label>
			<input type="text" class="form-control input-canhan" value="{{$value->email}}" name="email">
			<label for="pwd"><strong>Số điện thoại</strong></label>
			<input type="text" class="form-control input-canhan" value="{{$value->SDT}}" name="SDT">
			<label for="pwd"><strong>Địa chỉ</strong></label>
			<input type="text" class="form-control input-canhan" value="{{$value->diaChi}}" name="diaChi">

			<input type="hidden"  value="{{$value->maND}}" name="maND">
			<input type="hidden"  value="{{$value->taiKhoan}}" name="taiKhoan">
			<input type="hidden"  value="{{$value->matKhau}}" name="matKhau">
			<input type="hidden"  value="{{$value->maPX}}" name="maPX">
			<input type="hidden"  value="{{$value->vaiTro}}" name="vaiTro">
			<input type="hidden"  value="{{$value->maQuyen}}" name="maQuyen">
			@endforeach
		</div> 

		<div class="row" style="margin-top: 100px;">
			<input type="submit" class="btn-xanh btn-luu" value="Lưu thay đổi" />
		</div>
	</form> <!-- kết thúc phần thông tin cá nhân -->
</div>

@endsection