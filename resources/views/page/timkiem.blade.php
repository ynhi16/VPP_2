<link rel="stylesheet" href="{{asset('public/frontend/css/timkiem.css')}}">
@extends('layout')
@section('trangchu')

 <div class="container">
  <div class="row">
  	<div class="col-sm-3">
  		<p class="filter">Bộ lọc</p>

  		<p class="tieudemucluc">Sahami</p>
  		<div class="form-check">
			  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
			  <label class="form-check-label" for="flexCheckDefault">
			    Bán chạy
			  </label>
		</div>
		<div class="form-check">
			  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
			  <label class="form-check-label" for="flexCheckDefault">
			    Giảm giá
			  </label>
		</div>

		<p class="tieudemucluc">Phân loại</p>
  		<div class="form-check">
			  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
			  <label class="form-check-label" for="flexCheckDefault">
			    Tất cả
			  </label>
		</div>
		<div class="form-check">
			  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
			  <label class="form-check-label" for="flexCheckDefault">
			    Calendar/ Schedule
			  </label>
		</div>
		<div class="form-check">
			  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
			  <label class="form-check-label" for="flexCheckDefault">
			    Stickers
			  </label>
		</div>
		<div class="form-check">
			  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
			  <label class="form-check-label" for="flexCheckDefault">
			    Masking Tape
			  </label>
		</div>
		<div class="form-check">
			  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
			  <label class="form-check-label" for="flexCheckDefault">
			    Sticky Note/ Memo Pad
			  </label>
		</div>
		<div class="form-check">
			  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
			  <label class="form-check-label" for="flexCheckDefault">
			    Writing Utensils
			  </label>
		</div>
		<div class="form-check">
			  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
			  <label class="form-check-label" for="flexCheckDefault">
			    Notebook
			  </label>
		</div>
		<div class="form-check">
			  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
			  <label class="form-check-label" for="flexCheckDefault">
			    Stamp/ Inkpad
			  </label>
		</div>
		<div class="form-check">
			  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
			  <label class="form-check-label" for="flexCheckDefault">
			    Gift Set
			  </label>
		</div>
		<div class="form-check">
			  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
			  <label class="form-check-label" for="flexCheckDefault">
			    Others
			  </label>
		</div>

		<p class="tieudemucluc">Mức giá</p>
  		<div class="form-check">
			  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
			  <label class="form-check-label" for="flexCheckDefault">
			    Dưới 5.000
			  </label>
		</div>
		<div class="form-check">
			  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
			  <label class="form-check-label" for="flexCheckDefault">
			    5.000 - 10.000 
			  </label>
		</div>
		<div class="form-check">
			  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
			  <label class="form-check-label" for="flexCheckDefault">
			    10.000 - 30.000
			  </label>
		</div>
		<div class="form-check">
			  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
			  <label class="form-check-label" for="flexCheckDefault">
			    30.000 - 50.000
			  </label>
		</div>
		<div class="form-check">
			  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
			  <label class="form-check-label" for="flexCheckDefault">
			    50.000 - 100.000
			  </label>
		</div>
		<div class="form-check">
			  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
			  <label class="form-check-label" for="flexCheckDefault">
			    Trên 100.000
			  </label>
		</div>

  	</div>

    <div class="col-sm-9">
    	<div class="row">
    		<div class="col-sm-8"></div>
		    <div class="col-sm-4">
		    	<select class="form-select" style="width: 100%;">
			        <option selected>Danh mục</option>
			        <option value="1">One</option>
			        <option value="2">Two</option>
			        <option value="3">Three</option>
			    </select>
		    </div>
    	</div>
    	<div class="row mt-4">
		    <div class="col-sm-4">
		    	<div class="card" style="width: 300px; height: 300px;">
                    <img src="{{('public/frontend/img/06f271855c0a9654cf1b.jpg')}}" class="card-img-top" alt="..." height="230px" width="98%">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div class="card-text">60 Sticker cổ điển retro</div>
                            <div class="text-end card-text price">24000</div>
                        </div>
                    </div>
                </div>
		    </div>
		    <div class="col-sm-4">
		    	<div class="card" style="width: 300px; height: 300px;">
                    <img src="{{('public/frontend/img/06f271855c0a9654cf1b.jpg')}}" class="card-img-top" alt="..." height="230px" width="98%">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div class="card-text">60 Sticker cổ điển retro</div>
                            <div class="text-end card-text price">24000</div>
                        </div>
                    </div>
                </div>
		    </div>
		    <div class="col-sm-4">
		    	<div class="card" style="width: 300px; height: 300px;">
                    <img src="{{('public/frontend/img/06f271855c0a9654cf1b.jpg')}}" class="card-img-top" alt="..." height="230px" width="98%">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div class="card-text">60 Sticker cổ điển retro</div>
                            <div class="text-end card-text price">24000</div>
                        </div>
                    </div>
                </div>
		    </div>
    	</div>

    	<div class="row mt-4">
		    <div class="col-sm-4">
		    	<div class="card" style="width: 300px; height: 300px;">
                    <img src="{{('public/frontend/img/06f271855c0a9654cf1b.jpg')}}" class="card-img-top" alt="..." height="230px" width="98%">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div class="card-text">60 Sticker cổ điển retro</div>
                            <div class="text-end card-text price">24000</div>
                        </div>
                    </div>
                </div>
		    </div>
		    <div class="col-sm-4">
		    	<div class="card" style="width: 300px; height: 300px;">
                    <img src="{{('public/frontend/img/06f271855c0a9654cf1b.jpg')}}" class="card-img-top" alt="..." height="230px" width="98%">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div class="card-text">60 Sticker cổ điển retro</div>
                            <div class="text-end card-text price">24000</div>
                        </div>
                    </div>
                </div>
		    </div>
		    <div class="col-sm-4">
		    	<div class="card" style="width: 300px; height: 300px;">
                    <img src="{{('public/frontend/img/06f271855c0a9654cf1b.jpg')}}" class="card-img-top" alt="..." height="230px" width="98%">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div class="card-text">60 Sticker cổ điển retro</div>
                            <div class="text-end card-text price">24000</div>
                        </div>
                    </div>
                </div>
		    </div>
    	</div>

    	<div class="row mt-4">
		    <div class="col-sm-4">
		    	<div class="card" style="width: 300px; height: 300px;">
                    <img src="{{('public/frontend/img/06f271855c0a9654cf1b.jpg')}}" class="card-img-top" alt="..." height="230px" width="98%">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div class="card-text">60 Sticker cổ điển retro</div>
                            <div class="text-end card-text price">24000</div>
                        </div>
                    </div>
                </div>
		    </div>
		    <div class="col-sm-4">
		    	<div class="card" style="width: 300px; height: 300px;">
                    <img src="{{('public/frontend/img/06f271855c0a9654cf1b.jpg')}}" class="card-img-top" alt="..." height="230px" width="98%">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div class="card-text">60 Sticker cổ điển retro</div>
                            <div class="text-end card-text price">24000</div>
                        </div>
                    </div>
                </div>
		    </div>
		    <div class="col-sm-4">
		    	<div class="card" style="width: 300px; height: 300px;">
                    <img src="{{('public/frontend/img/06f271855c0a9654cf1b.jpg')}}" class="card-img-top" alt="..." height="230px" width="98%">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div class="card-text">60 Sticker cổ điển retro</div>
                            <div class="text-end card-text price">24000</div>
                        </div>
                    </div>
                </div>
		    </div>
    	</div>
    </div>
  </div>
</div>

@endsection
