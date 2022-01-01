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
                            <img src="https://fast.vn/assets/banner-home/banner-home02.jpg" class="d-block" width="98%">
                        </div>
                        <div class="carousel-item">
                            <img src="https://fast.vn/assets/banner-home/banner-home02.jpg" class="d-block" width="98%">
                        </div>
                        <div class="carousel-item">
                            <img src="https://fast.vn/assets/banner-home/banner-home02.jpg" class="d-block" width="98%">
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
                <img src="https://fast.vn/assets/banner-side/banner_02.jpg" class="d-block mb-2" alt="..." width="100%">
                <img src="https://fast.vn/assets/banner-side/banner_02.jpg" class="d-block" alt="..." width="100%">
            </div>
            <div class="mt-3">
                <div class="d-flex justify-content-between">
                    <div class="bd-highlight">
                        <div class="card" style="width: 170px;">
                            <img src="{{('public/frontend/img/06f271855c0a9654cf1b.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Calendar/ Schedule</p>
                            </div>
                        </div>
                    </div>
                    <div class="bd-highlight">
                        <div class="card" style="width: 170px;">
                            <img src="{{('public/frontend/img/06f271855c0a9654cf1b.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Stickers</p>
                            </div>
                        </div>
                    </div>
                    <div class="bd-highlight">
                        <div class="card" style="width: 170px;">
                            <img src="{{('public/frontend/img/06f271855c0a9654cf1b.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Masking Tape</p>
                            </div>
                        </div>
                    </div>
                    <div class="bd-highlight">
                        <div class="card" style="width: 170px;">
                            <img src="{{('public/frontend/img/06f271855c0a9654cf1b.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Sticky Note/ Memo Pad</p>
                            </div>
                        </div>
                    </div>
                    <div class="bd-highlight">
                        <div class="card" style="width: 170px;">
                            <img src="{{('public/frontend/img/06f271855c0a9654cf1b.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Writing Utensils</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-3">
                <div class="d-flex justify-content-between mb-2">
                    <div class="title-row">Sản phẩm mới nhất</div>
                    <div class=""><a href="#">Xem thêm</a></div>
                </div>
            
                <div class="d-flex justify-content-between">
                    <div class="card" style="width: 250px;">
                        <img src="{{('public/frontend/img/06f271855c0a9654cf1b.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div class="card-text">60 Sticker cổ điển retro</div>
                                <div class="text-end card-text price">24000</div>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="width: 250px;">
                        <img src="{{('public/frontend/img/06f271855c0a9654cf1b.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div class="card-text">60 Sticker cổ điển retro</div>
                                <div class="text-end card-text price">24000</div>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="width: 250px;">
                        <img src="{{('public/frontend/img/06f271855c0a9654cf1b.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div class="card-text">60 Sticker cổ điển retro</div>
                                <div class="text-end card-text price">24000</div>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="width: 250px;">
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
            <div class="mt-3">
                <div class="d-flex justify-content-between mb-2">
                    <div class="title-row">Sản phẩm bán chạy</div>
                    <div class=""><a href="#">Xem thêm</a></div>
                </div>
            
                <div class="d-flex justify-content-between">
                    <div class="card" style="width: 250px;">
                        <img src="{{('public/frontend/img/06f271855c0a9654cf1b.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div class="card-text">60 Sticker cổ điển retro</div>
                                <div class="text-end card-text price">24000</div>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="width: 250px;">
                        <img src="{{('public/frontend/img/06f271855c0a9654cf1b.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div class="card-text">60 Sticker cổ điển retro</div>
                                <div class="text-end card-text price">24000</div>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="width: 250px;">
                        <img src="{{('public/frontend/img/06f271855c0a9654cf1b.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div class="card-text">60 Sticker cổ điển retro</div>
                                <div class="text-end card-text price">24000</div>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="width: 250px;">
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
            <div class="mt-3">
                <div class="d-flex justify-content-between mb-2">
                    <div class="title-row">Sản phẩm giảm giá</div>
                    <div class=""><a href="#">Xem thêm</a></div>
                </div>
            
                <div class="d-flex justify-content-between">
                    <div class="card" style="width: 250px;">
                        <img src="{{('public/frontend/img/06f271855c0a9654cf1b.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div class="card-text">60 Sticker cổ điển retro</div>
                                <div class="text-end card-text price">24000</div>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="width: 250px;">
                        <img src="{{('public/frontend/img/06f271855c0a9654cf1b.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div class="card-text">60 Sticker cổ điển retro</div>
                                <div class="text-end card-text price">24000</div>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="width: 250px;">
                        <img src="{{('public/frontend/img/06f271855c0a9654cf1b.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div class="card-text">60 Sticker cổ điển retro</div>
                                <div class="text-end card-text price">24000</div>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="width: 250px;">
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
