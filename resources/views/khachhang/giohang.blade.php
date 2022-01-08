@extends('layout')
@section('trangchu')
<style>
	.wp-giohang {
		/* font-size: 18px; */
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
</style>
<div class="wp-giohang">
	<h2>Giỏ hàng</h2>

	<div class="row">

		<div class="col-md-8">

			<?php
			$giohang = Cart::content();
			$soluong = 0;
			$tongsoluong = 0;
			$tongtien = 0;
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
						<p style="font-size: 22px; ">{{$item->name}}</p>
					</div>
					<div class="row">
						<p>{{$item->price}} đ</p>
					</div>
					<div class="row">
						<input type="text" class="input-soluong input-gh-sl" value="{{$item->qty}}" name="newqty">
					</div>

				</div>
				<!-- <div class="col-md-3 giohang-box3">
							<div class="giohang-box3-1">

								<div class="btnsoluong">
									<label class="btn-soluong-giam btn-gh-giam">-</label>
								<input type="text" class="input-soluong input-gh-sl" value="{{$item->qty}}" name="newqty[]" id="qty">
								<label class="btn-soluong-tang btn-gh-tang" onclick="">+</label>
									<input type="text" class="input-soluong input-gh-sl" value="{{$item->qty}}" name="newqty">
								</div>

							</div>
						</div> -->
				<div class="col-md-2">
					<p style="text-align: right;">{{$item->qty * $item->price}} đ</p>
					<p style="text-align: right;"><a href="{{URL::to('/del-giohang/'.$item->rowId)}}" class="a-del">Delete</a></p>

				</div>
			</div>


			<?php
			$soluong++;
			$tongsoluong += $item->qty;
			$tongtien += $item->qty * $item->price;
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
	<div class="d-flex justify-content-between mb-5">
		@for($i=0; $i<=3; $i++) <div class="card" style="width: 300px; height: 300px;">
			<a href="{{URL::to('/chitietsanpham/'.$sanphambc[$i]->maSP)}}">
				<img src="{{asset('public/frontend/img/'.$sanphambc[$i]->tenHA)}}" class="card-img-top" alt="..." height="230px" width="98%"></a>
			<div class="card-body">
				<div class="d-flex justify-content-between">
					<div class="card-text">{{$sanphambc[$i]->tenSP}}</div>
					<div class="text-end card-text price">{{$sanphambc[$i]->donGia}}đ</div>
				</div>
			</div>
	</div>
	@endfor
</div>

<div class="d-flex justify-content-between mb-5">
	@for($i=0; $i<=3; $i++) <div class="card" style="width: 300px; height: 300px;">
		<a href="{{URL::to('/chitietsanpham/'.$sanphambc[$i]->maSP)}}">
			<img src="{{asset('public/frontend/img/'.$sanphambc[$i]->tenHA)}}" class="card-img-top" alt="..." height="230px" width="98%"></a>
		<div class="card-body">
			<div class="d-flex justify-content-between">
				<div class="card-text">{{$sanphambc[$i]->tenSP}}</div>
				<div class="d-flex align-items-start"><div class="text-end card-text price">{{$sanphambc[$i]->donGia}}đ</div></div>
			</div>
		</div>
</div>
@endfor
</div>
</div>

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