<div class="navbar_style">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{URL::to('/')}}">
                <h1 class="title">Sahami</h1>
                <p class="title_font">Văn phòng phẩm</p>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="d-flex flex-column bd-highlight mb-3">
                    <div class="p-2 bd-highlight">
                        <form class="d-flex">
                            <select class="form-select me-2" aria-label="Default select example">
                                <option selected>Danh mục</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </form>
                    </div>
                    <div class="p-2 bd-highlight">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Calendar/ Schedule</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Stickers</a>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Masking Tape</a>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Sticky Note/ Memo Pad</a>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Writing Utensils</a>
                            </li>
                            <button type="button" class="btn button_sale ms-3 me-3">Sale</button>
                        </ul>
                    </div>
                </div>
                <?php $nguoidung_id = Session::get('nguoidung_id') ?>
                @if($nguoidung_id)
                <div class="d-flex align-items-start bd-highlight mb-3" style="height: 100px">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li><a class="navbar_right" href="#"><img src="{{asset('public/frontend/img/avtkhachhang.png')}}" style="width: 30px; height: 30px;"></a></li>
                        <li class="nav-item li-1"><span>Khánh Hạ</span>
                            <ul class="ul-2">
                                <li class="li-2"><a href="{{URL::to('/canhan')}}" class="li-2-a">Cá nhân</a></li>
                                <li class="li-2"><a href="{{URL::to('/giohang')}}" class="li-2-a">Giỏ hàng</a></li>
                                <li class="li-2"><a href="{{URL::to('/donmua')}}" class="li-2-a">Đơn mua</a></li>
                                <li class="li-2"><a href="{{URL::to('/dangxuat')}}" class="li-2-a">Đăng xuất</a></li>
                            </ul>
                        <li class="nav-item">
                        </li>
                        <button type="button" class="btn me-2">
                            <a href="{{URL::to('/giohang')}}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                </svg>
                            </a>
                        </button>
                    </ul>
                </div>
                @else

                <div class="d-flex align-items-start bd-highlight mb-3" style="height: 100px">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="navbar_right" href="{{URL::to('/dangnhap')}}">Đăng Nhập</a>
                        <li class="nav-item">
                            <a class="navbar_right" href="{{URL::to('/dangky')}}">Đăng Ký</a>
                        <li class="nav-item">
                        </li>
                        <button type="button" class="btn me-2">
                            <a href="{{URL::to('/giohang')}}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                </svg>
                            </a>
                        </button>
                    </ul>
                </div>
                @endif

            
        </div>
    </nav>
</div>

</body>

</html>
