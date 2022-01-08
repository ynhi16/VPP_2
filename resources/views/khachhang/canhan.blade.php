<<<<<<< HEAD
@extends('khachhangHome')
@section('khachhang_content')

<div class="d-flex justify-content-center">
	<div class="col-md-6">
		<h2>Thiết lập tài khoản</h2>
				<!-- bắt đầu menu ngang -->
				<div class="row" style="margin-top: 60px;">
					<a class="btn-vienden tab-duocchon" href="{{URL::to('/canhan')}}">Thông tin cá nhân</a>
					<a class="tab-khongchon" href="{{URL::to('/matkhau')}}">Đổi mật khẩu</a>
				</div> <!-- kết thúc menu ngang -->
				<hr>

				<!-- <h5 style="margin-top: 60px;">Avatar</h5> -->

				<!-- bắt đầu avatar -->
				<!-- <div class="row" style="margin-top: 20px;">
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
<<<<<<< HEAD
		</div> <!-- kết thúc avatar -->

		<!-- bắt đầu phần thông tin cá nhân -->
		<form action="{{URL::to('/capnhat-ttcn')}}" method="post">
			@csrf
			<div class="row inf-canhan" style="margin-top: 50px;">
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
				<label for="pwd"><strong>Tỉnh thành</strong></label>
				<select class="form-control input-canhan" name="tinhthanh">
					@foreach($tinhthanh as $key => $tt)
					@if($tt->tenTT == $value->tenTT)

					<option selected value="{{$tt->IDTT}}">{{$tt->tenTT}}</option>
					@else

					<option value="{{$tt->IDTT}}">{{$tt->tenTT}}</option>
					@endif
					@endforeach
				</select>
				<label for="pwd"><strong>Quận huyện</strong></label>
				<select class="form-control input-canhan" name="quanhuyen">
					@foreach($quanhuyen as $key => $tt)
					@if($tt->tenQH == $value->tenQH)

					<option selected value="{{$tt->IDQH}}">{{$tt->tenQH}}</option>
					@else

					<option value="{{$tt->IDQH}}">{{$tt->tenQH}}</option>
					@endif
					@endforeach
				</select>
				<label for="pwd"><strong>Phường xã</strong></label>
				<select class="form-control input-canhan" name="phuongxa">
					@foreach($phuongxa as $key => $tt)
					@if($tt->tenPX == $value->tenPX)

					<option selected value="{{$tt->IDPX}}">{{$tt->tenPX}}</option>
					@else

					<option value="{{$tt->IDPX}}">{{$tt->tenPX}}</option>
					@endif
					@endforeach
				</select>
				<label for="pwd"><strong>Số nhà</strong></label>
				<input type="text" class="form-control input-canhan" value="{{$value->diaChi}}" name="diaChi">

				<input type="hidden" value="{{$value->maND}}" name="maND">
				<input type="hidden" value="{{$value->taiKhoan}}" name="taiKhoan">
				<input type="hidden" value="{{$value->matKhau}}" name="matKhau">
				<input type="hidden" value="{{$value->maQuyen}}" name="maQuyen">
				@endforeach
			</div>
=======
		</div>  -->
				<!-- kết thúc avatar -->
>>>>>>> refs/remotes/origin/khachhang

				<div class="row">
					<!-- bắt đầu phần thông tin cá nhân -->
					<form action="{{URL::to('/capnhat-ttcn')}}" method="post">
						@csrf
						<div class="row inf-canhan" style="margin-top: 50px;">
							@foreach($nguoidung as $key => $value)
							<div class="col-md-5">
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

							</div>

							<div class="col-md-1"></div>

							<div class="col-md-5">
								<label for="pwd"><strong>Tỉnh thành</strong></label>
								<select class="form-control input-canhan" name="tinhthanh">
									@foreach($tinhthanh as $key => $tt)
									@if($tt->tenTT == $value->tenTT)

									<option selected value="{{$tt->IDTT}}">{{$tt->tenTT}}</option>
									@else

									<option value="{{$tt->IDTT}}">{{$tt->tenTT}}</option>
									@endif
									@endforeach
								</select>
								<label for="pwd"><strong>Quận huyện</strong></label>
								<select class="form-control input-canhan" name="quanhuyen">
									@foreach($quanhuyen as $key => $tt)
									@if($tt->tenQH == $value->tenQH)

									<option selected value="{{$tt->IDQH}}">{{$tt->tenQH}}</option>
									@else

									<option value="{{$tt->IDQH}}">{{$tt->tenQH}}</option>
									@endif
									@endforeach
								</select>
								<label for="pwd"><strong>Phường xã</strong></label>
								<select class="form-control input-canhan" name="phuongxa">
									@foreach($phuongxa as $key => $tt)
									@if($tt->tenPX == $value->tenPX)

									<option selected value="{{$tt->IDPX}}">{{$tt->tenPX}}</option>
									@else

									<option value="{{$tt->IDPX}}">{{$tt->tenPX}}</option>
									@endif
									@endforeach
								</select>
								<label for="pwd"><strong>Số nhà</strong></label>
								<input type="text" class="form-control input-canhan" value="{{$value->diaChi}}" name="diaChi">
							</div>

							<input type="hidden" value="{{$value->maND}}" name="maND">
							<input type="hidden" value="{{$value->taiKhoan}}" name="taiKhoan">
							<input type="hidden" value="{{$value->matKhau}}" name="matKhau">
							<input type="hidden" value="{{$value->maQuyen}}" name="maQuyen">
							@endforeach
						</div>

						<div class="row" style="margin-top: 100px;">
							<input type="submit" class="btn-den btn-luu" value="Lưu thay đổi" />
						</div>
					</form> <!-- kết thúc phần thông tin cá nhân -->
				</div>
			</div>
		</div>
	</div>
</body>

</html>


@endsection