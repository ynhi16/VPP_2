@extends('layout')
@section('trangchu')
<style>
	.wp-giohang {
		font-size: 14px;
		margin-left: 50px;
	}

	.btnsoluong {
		margin-top: 40px;
		margin-bottom: 30px;
		vertical-align: bottom;
		display: table-cell;
		text-align: right;
	}

	.input-soluong {
		width: 70px;
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
		color: #16A085;
		padding-right: 8px;
	}

	.btn-soluong-tang {
		background-color: #16A085;
		border: solid #16A085;
		width: 29px;
		height: 29px;
		border-radius: 3px;
		color: white;
		padding-right: 7px;
	}


	.img-sp-bc {
		padding-left: 0;
		padding-right: 10px;
		margin-bottom: 50px;
	}

	.bg-xanh {
		background-color: #C8F4F3;
		border-radius: 20px;
		padding-left: 5px;
	}


	.a-del {
		color: black;
		font-weight: bold;
	}

	.a-del:hover {
		color: black;
		font-size: 20px;
		text-decoration: none;
	}

	.btn-giohang-tt {
		width: 100%;
		background-color: black;
		height: 45px;
		border-radius: 30px;
		margin-top: 30px;
	}

	.a-tttt {
		color: white;
		text-decoration: none;
	}

	.a-tttt:hover {
		color: white;
		text-decoration: none;
	}

	.select-soluong3 {
		font-size: 13px;
		height: 30px;
		width: 100px;
	}

</style>

<div class="wp-giohang">
	<h3>Giỏ hàng</h3>

	<div class="row">

		<div class="col-md-8">

			<?php
			$giohang = Cart::content();
			$soluong = 0;
			$tongsoluong = 0;
			$tongtien = 0;
			$ids = 0;
			?>
			@foreach($giohang as $key => $item)
			<hr style="border-width: 0.5px;">
			<!-- bat dau item san pham -->
			<div class="row item-sanphamgiohang">
				<!-- <input type="hidden" class="rowid" value="{{$item->rowId}}" id="rowid"> -->
				<input type="hidden" class="dongia" value="{{$item->price}}">
				<div class="col-md-3">
					<a href="{{URL::to('/chitietsanpham/'.$item->id)}}"><img src="{{asset('public/frontend/img/'.$item->options->image)}}" class="img-thumbnail" alt="Cinque Terre"></a>
				</div>
				<div class="col-md-7">
					<div class="row">
						<label style="font-size: 18px; ">{{$item->name}}</label>
					</div>

					<label style="margin-top: 10px;">{{$item->price}} đ</label>
					<br>

					<div class="row">
						<!-- <input type="text" class="input-soluong input-gh-sl" value="{{$item->qty}}" name="newqty"> -->
						<div>
							<label style="color: #8B8989; font-size:13px; margin-top: 10px;">Phân loại: {{$item->options->phanloai}}</label>
							<br>
							<label style="color: #8B8989; font-size:13px; margin-top: 10px;">Số lượng</label>
							<select class="form-control select-soluong3" name="soluong[]" onchange="location = '{{URL::to('/update-giohang/')}}' + '/' + '{{$item->rowId}}' + '&' + this.value;">
								@for($i=1; $i<=$soluongs[$key]->soLuong; $i++)
									@if($i == $item->qty)
									<option selected><?php echo $i ?></option>
									@else
									<option><?php echo $i ?></option>
									@endif

									@endfor
							</select>
						</div>
					</div>

				</div>
				<div class="col-md-2">
					<p style="text-align: right;">{{$item->qty * $item->price}} đ</p>
					<p style="text-align: right;"><a href="{{URL::to('/del-giohang/'.$item->rowId)}}" class="a-del">Delete</a></p>

				</div>
			</div>


			<?php
			$soluong++;
			$tongsoluong += $item->qty;
			$tongtien += $item->qty * $item->price;
			$ids++;
			?>
			@endforeach


		</div> <!-- ket thuc item san pham -->


		<div class="col-md-3" style="margin-left: 50px;">
			<h5 style="font-weight: bold;"><?php echo $soluong ?> sản phẩm</h5>
			<p style="margin-top: 20px;">Tổng số lượng: <?php echo $tongsoluong ?> món</p>
			<p>Tổng tiền: <?php echo $tongtien ?> đ</p>
			<button class="btn-giohang-tt"><a href="{{URL::to('/thanhtoan')}}" class="a-tttt">Tiếp tục để thanh toán</a></button>
		</div>
	</div>


</div>

</div>
<!-- /// -->
<div style="margin-top: 200px;"></div>
<div style="width: 87%; margin-left: 90px;">

	<p class="text-dendam" style="font-size: 25px;">Sản phẩm bán chạy</p>
	<div class="row spbc">
		@for($i=0; $i<=3; $i++) <div class="col-md-3 img-sp-bc">
			<div class="row">
				<a href="{{URL::to('/chitietsanpham/'.$sanphambc[$i]->maSP)}}"><img src="{{asset('public/frontend/img/'.$sanphambc[$i]->tenHA)}}" class="img-thumbnail" alt="Cinque Terre"></a>
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
			<a href="{{URL::to('/chitietsanpham/'.$sanphambc[$i]->maSP)}}"><img src="{{asset('public/frontend/img/'.$sanphambc[$i]->tenHA)}}" class="img-thumbnail" alt="Cinque Terre"></a>
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


<!-- <script type="text/javascript">
		$(document).ready(function() {
			$('.btn-gh-giam').click(function() {
				var rowid = $(this).data('rowid').val();
				console.log(rowid)

			});

		});
	</script> -->

<!-- <script>
		// innerHTML
		const $ = document.querySelector.bind(document);
		const $$ = document.querySelectorAll.bind(document);

		const btngiams = $$(".btn-soluong-giam.btn-gh-giam");
		const btntangs = $$(".btn-soluong-tang.btn-gh-tang");
		const soluongs = $$(".input-soluong.input-gh-sl");
		const thanhtiens = $$(".p-box4");
		const rowids = $$(".rowid");
		const dongias = $$(".dongia");

		btngiams.forEach((btngiam, index) => {
			const btntang = btntangs[index];
			const soluong = soluongs[index];
			const thanhtien = thanhtiens[index];
			const dongia = dongias[index].value;
			const rowid = rowids[index].value;

			btngiam.onclick = function() {
				var sl = soluong.value;
				if (sl > 1) {
					sl--;
					soluong.value = sl;
					var tt = dongia * sl;
					thanhtien.innerHTML = tt + ' đ' + rowid;

				}
			}

			btntang.onclick = function() {
				var sl = soluong.value;
				sl++;
				soluong.value = sl;
				var tt = dongia * sl;
				thanhtien.innerHTML = tt + ' đ';
			};
		});
	</script> -->

@endsection