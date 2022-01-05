@extends('layout')
@section('trangchu')
<div class="container">
        <div class="row g-0">
            <div class="col-sm-6 col-md-8">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{('public/frontend/img/trangchu/slide_1.jpg')}}" class="d-block" width="98%" height="400px">
                        </div>
                        <div class="carousel-item">
                            <img src="{{('public/frontend/img/trangchu/slide_2.jpg')}}" class="d-block" width="98%" height="400px">
                        </div>
                        <div class="carousel-item">
                            <img src="{{('public/frontend/img/trangchu/slide_3.jpg')}}" class="d-block" width="98%" height="400px">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-6 col-md-4">
                <img src="{{('public/frontend/img/right1.png')}}" class="d-block mb-2" alt="..." width="100%">
                <img src="{{('public/frontend/img/right2.png')}}" class="d-block" alt="..." width="100%" height="220px">
            </div>
            <div class="mt-3">
                <div class="d-flex justify-content-between">
                    <div class="bd-highlight">
                        <div class="card" style="width: 150px; height: 200px;" >
                            <img src="{{('public/frontend/img/dm1_MiniSerenityDeskCalendar2022_hinh2.jpg')}}" class="card-img-top" alt="..." height="150px">
                            <div class="text-center card-body">
                                <p class="card-text">Calendar/ Schedule</p>
                            </div>
                        </div>
                    </div>
                    <div class="bd-highlight">
                         <div class="card" style="width: 150px; height: 200px;" >
                            <img src="{{('public/frontend/img/dm2_sticker.jpg')}}" class="card-img-top" alt="..." height="150px">
                            <div class="text-center card-body">
                                <p class="card-text">Sticker</p>
                            </div>
                        </div>
                    </div>
                    <div class="bd-highlight">
                        <div class="card" style="width: 150px; height: 200px;" >
                            <img src="{{('public/frontend/img/dm3_Masking Tape.jpg')}}" class="card-img-top" alt="..." height="150px">
                            <div class="text-center card-body">
                                <p class="card-text">Masking Tape</p>
                            </div>
                        </div>
                    </div>
                    <div class="bd-highlight">
                        <div class="card" style="width: 150px; height: 200px;" >
                            <img src="{{('public/frontend/img/dm4_Sticky Note.jpg')}}" class="card-img-top" alt="..." height="150px">
                            <div class="text-center card-body">
                                <p class="card-text">Sticky Note</p>
                            </div>
                        </div>
                    </div>
                    <div class="bd-highlight">
                        <div class="card" style="width: 150px; height: 200px;" >
                            <img src="{{('public/frontend/img/dm5_Writing.jpg')}}" class="card-img-top" alt="..." height="150px">
                            <div class="text-center card-body">
                                <p class="card-text">Writing Utensils</p>
                            </div>
                        </div>
                    </div>
                    <div class="bd-highlight">
                        <div class="card" style="width: 150px; height: 200px;" >
                            <img src="{{('public/frontend/img/dm6_Notebook.jpg')}}" class="card-img-top" alt="..." height="150px">
                            <div class="text-center card-body">
                                <p class="card-text">Notebook</p>
                            </div>
                        </div>
                    </div>
                    <div class="bd-highlight">
                        <div class="card" style="width: 150px; height: 200px;" >
                            <img src="{{('public/frontend/img/dm7_Stamp.jpg')}}" class="card-img-top" alt="..." height="150px">
                            <div class="text-center card-body">
                                <p class="card-text">Stamp/ Inkpad</p>
                            </div>
                        </div>
                    </div>
                    <div class="bd-highlight">
                        <div class="card" style="width: 150px; height: 200px;" >
                            <img src="{{('public/frontend/img/dm8_GiftSet.jpg')}}" class="card-img-top" alt="..." height="150px">
                            <div class="text-center card-body">
                                <p class="card-text">Gift Set</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-5">
                <div class="d-flex justify-content-between mb-4">
                    <div class="title-row">Sản phẩm mới nhất</div>
                    <div class=""><a href="#">Xem thêm</a></div>
                </div>
            
                <div class="d-flex justify-content-between mb-5">
                    <div class="card" style="width: 300px; height: 300px;">
                        <img src="{{('public/frontend/img/06f271855c0a9654cf1b.jpg')}}" class="card-img-top" alt="..." height="230px" width="98%">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div class="card-text">60 Sticker cổ điển retro</div>
                                <div class="text-end card-text price">24000</div>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="width: 300px; height: 300px;">
                        <img src="{{('public/frontend/img/dm7_Stamp.jpg')}}" class="card-img-top" alt="..." height="230px" width="98%">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div class="card-text">60 Sticker cổ điển retro</div>
                                <div class="text-end card-text price">24000</div>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="width: 300px;">
                        <img src="{{('public/frontend/img/06f271855c0a9654cf1b.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div class="card-text">60 Sticker cổ điển retro</div>
                                <div class="text-end card-text price">24000</div>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="width: 300px;">
                        <img src="{{('public/frontend/img/06f271855c0a9654cf1b.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div class="card-text">60 Sticker cổ điển retro</div>
                                <div class="text-end card-text price">24000</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-4">
                <div class="d-flex justify-content-between mb-4">
                    <div class="title-row">Sản phẩm bán chạy</div>
                    <div class=""><a href="#">Xem thêm</a></div>
                </div>
            
                <div class="d-flex justify-content-between mb-5">
                    <div class="card" style="width: 300px; height: 300px;">
                        <img src="{{('public/frontend/img/06f271855c0a9654cf1b.jpg')}}" class="card-img-top" alt="..." height="230px" width="98%">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div class="card-text">60 Sticker cổ điển retro</div>
                                <div class="text-end card-text price">24000</div>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="width: 300px; height: 300px;">
                        <img src="{{('public/frontend/img/dm7_Stamp.jpg')}}" class="card-img-top" alt="..." height="230px" width="98%">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div class="card-text">60 Sticker cổ điển retro</div>
                                <div class="text-end card-text price">24000</div>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="width: 300px;">
                        <img src="{{('public/frontend/img/06f271855c0a9654cf1b.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div class="card-text">60 Sticker cổ điển retro</div>
                                <div class="text-end card-text price">24000</div>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="width: 300px;">
                        <img src="{{('public/frontend/img/06f271855c0a9654cf1b.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div class="card-text">60 Sticker cổ điển retro</div>
                                <div class="text-end card-text price">24000</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-4">
                <div class="d-flex justify-content-between mb-4">
                    <div class="title-row">Sản phẩm giảm giá</div>
                    <div class=""><a href="#">Xem thêm</a></div>
                </div>
            
                <div class="d-flex justify-content-between mb-5">
                    <div class="card" style="width: 300px; height: 300px;">
                        <img src="{{('public/frontend/img/06f271855c0a9654cf1b.jpg')}}" class="card-img-top" alt="..." height="230px" width="98%">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div class="card-text">60 Sticker cổ điển retro</div>
                                <div class="text-end card-text price">24000</div>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="width: 300px; height: 300px;">
                        <img src="{{('public/frontend/img/dm7_Stamp.jpg')}}" class="card-img-top" alt="..." height="230px" width="98%">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div class="card-text">60 Sticker cổ điển retro</div>
                                <div class="text-end card-text price">24000</div>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="width: 300px;">
                        <img src="{{('public/frontend/img/06f271855c0a9654cf1b.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div class="card-text">60 Sticker cổ điển retro</div>
                                <div class="text-end card-text price">24000</div>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="width: 300px;">
                        <img src="{{('public/frontend/img/06f271855c0a9654cf1b.jpg')}}" class="card-img-top" alt="...">
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
@endsection
