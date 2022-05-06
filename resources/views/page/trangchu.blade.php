@extends('layout')
@section('trangchu')
<div class="ms-5 me-5">
    <div class="row g-0">
        <div class="col-sm-6 col-md-7 ">          
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{('public/frontend/img/trangchu/slide_2.jpg')}}" class="d-block img_slide">
                    </div> 
                    <div class="carousel-item">
                        <img src="{{('public/frontend/img/trangchu/slide_3.jpg')}}" class="d-block img_slide">
                    </div>
                    <div class="carousel-item">
                        <img src="{{('public/frontend/img/trangchu/slide_1.jpg')}}" class="d-block img_slide">
                    </div>                                    
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            <div class="mt-3 menu_main">
            <div class="d-flex justify-content-between">
                <!-- <div class="bd-highlight">
                    <div class="card">
                        <img src="{{('public/frontend/img/dm1_Calendar_hinh2.png')}}" class="card-img-top menu" alt="...">
                        <div class="text-center card-body">
                            <p class="card-text">Calendar/ Schedule</p>
                        </div>
                    </div>
                </div> -->
                <div class="bd-highlight">
                    <div class="card">
                        <img src="{{('public/frontend/img/dm2_sticker.jpg')}}" class="card-img-top menu" alt="...">
                        <div class="text-center card-body">
                            <p class="card-text">Sticker</p>
                        </div>
                    </div>
                </div>
                <div class="bd-highlight">
                    <div class="card">
                        <img src="{{('public/frontend/img/dm3_Masking Tape.jpg')}}" class="card-img-top menu" alt="...">
                        <div class="text-center card-body">
                            <p class="card-text">Masking Tape</p>
                        </div>
                    </div>
                </div>
                <div class="bd-highlight">
                    <div class="card">
                        <img src="{{('public/frontend/img/dm4_Sticky Note.jpg')}}" class="card-img-top menu" alt="...">
                        <div class="text-center card-body">
                            <p class="card-text">Sticky Note</p>
                        </div>
                    </div>
                </div>
                <div class="bd-highlight">
                    <div class="card">
                        <img src="{{('public/frontend/img/dm5_Writing.jpg')}}" class="card-img-top menu" alt="..." >
                        <div class="text-center card-body">
                            <p class="card-text">Writing Utensils</p>
                        </div>
                    </div>
                </div>
                <div class="bd-highlight">
                    <div class="card">
                        <img src="{{('public/frontend/img/dm6_Notebook.jpg')}}" class="card-img-top menu" alt="...">
                        <div class="text-center card-body">
                            <p class="card-text">Notebook</p>
                        </div>
                    </div>
                </div>
                <!-- <div class="bd-highlight">
                    <div class="card">
                        <img src="{{('public/frontend/img/dm7_Stamp.jpg')}}" class="card-img-top menu" alt="..." height="150px">
                        <div class="text-center card-body">
                            <p class="card-text">Stamp/ Inkpad</p>
                        </div>
                    </div>
                </div> -->
                <div class="bd-highlight">
                    <div class="card">
                        <img src="{{('public/frontend/img/dm8_GiftSet.jpg')}}" class="card-img-top menu" alt="..." height="150px">
                        <div class="text-center card-body">
                            <p class="card-text">Gift Set</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>
        <div class="col-6 col-md-5">
            <img src="{{('public/frontend/img/right1.png')}}" class="d-block mb-2" alt="..." width="100%" height="250px">
            <img src="{{('public/frontend/img/right2.png')}}" class="d-block" alt="..." width="100%" height="250px">
        </div>

        <div class="mt-5">
            <div class="d-flex justify-content-between mb-4">
                <div class="title-row">Sản phẩm mới nhất</div>
                <div class=""><a href="{{URL::to('/all-product-home')}}">Xem thêm</a></div>
            </div>
            <div class="d-flex justify-content-between mb-5">
                @for($i=0; $i<=3; $i++)
                <div class="card" style="width: 250px; height: 250px;">
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
            <div class="d-flex justify-content-between mb-5">
                @for($i=4; $i<=7; $i++)
                <div class="card" style="width: 250px; height: 250px;">
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
            <div class="d-flex justify-content-between mb-5">
                @for($i=7; $i<=10; $i++)
                <div class="card" style="width: 250px; height: 250px;">
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
    </div>
</div>
</div>
@endsection