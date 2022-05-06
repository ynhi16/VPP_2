@extends('layout')
@section('trangchu')
<link rel='stylesheet prefetch' href='https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css'>

<style>
    .wp-chitiet {
        /* font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; */
        /* font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; */
        /* font-family: 'Times New Roman', Times, serif; */
        /* font-family: 'Courier New', Courier, monospace; */
        /* font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; */
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .danhmuc {
        padding-left: 10px;
        margin: 0;
        color: #8B8989;
        margin-left: -15px;
        margin-bottom: 15px;
    }

    .inf-sanpham {
        border: solid #6666;
        border-width: 1.5px;
        border-radius: 5px;
        height: 385px;
        padding-left: 40px;
        padding-top: 20px;
        margin-left: 20px;

    }

    .img-con {
        margin-top: 5px;

    }

    .btnsoluong {
        margin-top: 40px;
        margin-bottom: 30px;
    }

    .input-soluong {
        width: 30px;
        height: 30px;
        padding-left: 4px;
        border: none;
    }

    .btn-soluong-giam {
        border: solid #16A085;
        background-color: white;
        width: 29px;
        height: 29px;
        border-radius: 3px;
        color: #16A085;
        padding-left: 8px;
    }

    .btn-soluong-tang {
        background-color: #16A085;
        border: solid #16A085;
        width: 29px;
        height: 29px;
        border-radius: 3px;
        color: white;
        padding-left: 8px;
    }

    .box-btn {
        width: 100%;
        margin-top: 50px;
    }

    .btn-chitiet {
        width: 100%;
        color: white;
        margin-bottom: 15px;
        background-color: black;
        height: 45px;
        border-radius: 30px;
        font-size: 20px;
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

    .select-soluong {
        height: 45px;
    }



    /* ///image/// */
    /* .tabs {
        display: flex;
        position: relative;
    } */

    .tab-item {
        /* độ trong suốt */
        opacity: 0.6;
        cursor: pointer;
        transition: all 0.5s ease;
    }

    .tab-item:hover {
        opacity: 1;
        background-color: rgba(194, 53, 100, 0.05);
        border-color: rgba(194, 53, 100, 0.1);
    }

    .tab-item.active {
        opacity: 1;
    }

    .tab-content {
        padding: 28px 0;
    }

    .tab-pane {
        display: none;
    }

    .tab-pane.active {
        display: block;
    }

    /*tab iu 2*/

    .tab-content2 {}

    .tab-pane2 {
        color: #fff;
        display: none;
    }

    .tab-pane2.active2 {
        display: block;
    }



    /* start star rating */
    div.stars {
        width: 35 0px;
        display: inline-block;
    }

    input.star {
        display: none;
    }

    label.star {
        float: right;
        padding: 10px;
        font-size: 36px;
        color: #444;
        transition: all .2s;
    }

    input.star:checked~label.star:before {
        content: '\f005';
        color: #FD4;
        transition: all .25s;
    }

    input.star-5:checked~label.star:before {
        color: #FE7;
        text-shadow: 0 0 20px #952;
    }

    input.star-1:checked~label.star:before {
        color: #F62;
    }

    label.star:hover {
        transform: rotate(-15deg) scale(1.3);
    }

    label.star:before {
        content: '\f006';
        font-family: FontAwesome;
    }

    /**/
    @import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);
    /*reset css*/


    /****** Style Star Rating Widget *****/
    #rating {
        border: none;
        float: left;
    }

    #rating>input {
        display: none;
    }

    /*ẩn input radio - vì chúng ta đã có label là GUI*/
    #rating>label:before {
        margin: 5px;
        font-size: 1.25em;
        font-family: FontAwesome;
        display: inline-block;
        content: "\f005";
    }

    /*1 ngôi sao*/
    #rating>.half:before {
        content: "\f089";
        position: absolute;
    }

    /*0.5 ngôi sao*/
    #rating>label {
        color: #ddd;
        float: right;
    }

    /*float:right để lật ngược các ngôi sao lại đúng theo thứ tự trong thực tế*/
    /*thêm màu cho sao đã chọn và các ngôi sao phía trước*/
    #rating>input:checked~label {
        color: black;
    }

    /*/

    /* end star rating */

    /* star test */
    .test {
        width: 100%;
        height: 500px;

    }

    .box-test {
        width: 91px;
        height: 91px;
        float: left;

    }

    /* end test */

    /** video */
    .video {
        width: 364.66px;
        height: 364.66px;
    }
</style>
</head>

<body>

    <div class="row wp-chitiet">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="row">

                        <!-- Images -->
                        <div class="col-md-4">
                            <p class="danhmuc">{{$sanphamct[0]->tenDM}}</p>
                            <div class="row">

                                <!-- tab content -->
                                <div class="content">
                                    @foreach($sanphamct as $key => $value)
                                    @if ($key == 0)
                                    <div class="tab-pane active">
                                        <img src="{{asset('public/frontend/img/'.$value->tenHA)}}" class="img-thumbnail" alt="Cinque Terre">
                                    </div>
                                    @else
                                    <div class="tab-pane">
                                        <img src="{{asset('public/frontend/img/'.$value->tenHA)}}" class="img-thumbnail" alt="Cinque Terre">
                                    </div>
                                    @endif
                                    @endforeach

                                    @foreach($video as $key => $vid)
                                    @if($vid->masp == $sanphamct[0]->maSP)
                                    <div class="tab-pane video">
                                        <video controls loop width="364.66px" height="364.66px">
                                            <source src="{{asset('public/frontend/vids/'.$vid->tenvd)}}">
                                        </video>
                                    </div>
                                    @endif
                                    @endforeach


                                </div>
                                <!-- end tab content -->
                            </div>

                            <div class="row">
                                <!-- tab items -->
                                <!-- <div class="tabs">

                                    @foreach($sanphamct as $key => $value)
                                    <div class="col-md-2" style="padding: 0; margin-right: 5px;">
                                        @if($key == 0)
                                        <div class="tab-item active">

                                            <img src="{{asset('public/frontend/img/'.$value->tenHA)}}" class="img-thumbnail img-con" alt="Cinque Terre">

                                        </div>
                                        @else
                                        <div class="tab-item">

                                            <img src="{{asset('public/frontend/img/'.$value->tenHA)}}" class="img-thumbnail img-con" alt="Cinque Terre">

                                        </div>
                                        @endif
                                    </div>
                                    @endforeach

                                </div> -->
                                <!-- end tab items -->
                            </div>

                            <!-- start test -->
                            <div class="test">

                                <!-- tab items -->
                                <div class="tabs">
                                    @foreach($sanphamct as $key => $value)
                                    <div class="box-test">

                                        @if($key == 0)
                                        <div class="tab-item active">

                                            <img src="{{asset('public/frontend/img/'.$value->tenHA)}}" class="img-thumbnail img-con" alt="Cinque Terre">

                                        </div>
                                        @else
                                        <div class="tab-item">

                                            <img src="{{asset('public/frontend/img/'.$value->tenHA)}}" class="img-thumbnail img-con" alt="Cinque Terre">

                                        </div>
                                        @endif
                                    </div>
                                    @endforeach

                                    @foreach($video as $key => $vid)
                                    @if($vid->masp == $sanphamct[0]->maSP)
                                    <div class="box-test">
                                        <div class="tab-item">
                                            <img src="{{asset('public/frontend/vids/'.$vid->tenimg)}}" class="img-thumbnail img-con" alt="Cinque Terre">
                                        </div>
                                    </div>
                                    @endif
                                    @endforeach
                                </div>
                                <!-- end tab items -->
                            </div>
                            <!-- end test -->

                        </div>
                        <!-- / Images -->
                        <div class="col-md-1"></div>

                        <!-- <div class="col-md-5 inf-sanpham"> -->
                        <div class="col-md-5" style="margin-top: 35px;">
                            <form action="{{URL::to('/add-giohang')}}" method="post">
                                @csrf

                                <input type="hidden" name="maSP" value="{{$sanphamct[0]->maSP}}">
                                <p class="text-dendam" style="font-size: 26px;">{{$value->tenSP}}</p>

                                <!-- start star rating -->
                                <div class="row">
                                    <?php $tongSao = 0;
                                    $soSao = 0; ?>
                                    @foreach($binhluan as $key => $bl)
                                    <?php $tongSao += $bl->diem;
                                    $soSao++; ?>
                                    @endforeach
                                    @if($tongSao != 0 && $soSao!= 0)
                                    <?php $diem = round($tongSao / $soSao);
                                    $sao = 5 - $diem ?>
                                    <div class="col-md-5">
                                        <div id="rating">
                                            @for($i = 1; $i<=$sao; $i++) <label class="full" for="star5" title="Awesome - 5 stars"></label>
                                                @endfor
                                                @for($i = 1; $i<=$diem; $i++) <label class="full" for="star1" title="Sucks big time - 1 star" style="color: black;"></label>
                                                    @endfor
                                        </div>
                                    </div>

                                    @endif
                                </div>
                                <!-- end star rating -->
                                <div class="row">
                                    <div class="col-md-7">
                                        <p style="font-size: 24px; margin-top: 24px;">{{$value->donGia}}đ</p>
                                    </div>
                                    <div class="col-md-5">
                                        <!-- <p style="text-align: right;"><img src="{{asset('public/frontend/img/tym-trang.png')}}" alt=""></p> -->
                                    </div>
                                </div>
                                <!-- <p>Đánh giá: 4.5</p> -->
                                <p>Kích thước: {{$sanphamct[0]->kichThuoc}}</p>
                                <p>Mô tả: {{$sanphamct[0]->moTa}}</p>


                                <div>

                                    <div class="chon-phanloai" style="margin-top: 30px;">
                                        <label style="color: #8B8989; font-size:14px;">Phân loại</label>
                                        <select class="form-control select-soluong" name="phanloai" onchange="soLuong(this.value)">
                                            @foreach($phanloaisp as $key => $value)
                                            <option value="<?php echo $key ?>">{{$value->tenPL}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <label style="color: #8B8989; font-size:14px; margin-top: 10px;">Số lượng</label>

                                    <div class="content2">
                                        @foreach($phanloaisp as $key => $value2)
                                        @if ($key == 0)
                                        <div class="tab-pane2 active2">
                                            <select class="form-control select-soluong" name="soluong[]">
                                                @for($i=1; $i<=$value2->soLuong; $i++)
                                                    <option><?php echo $i ?></option>
                                                    @endfor
                                            </select>
                                        </div>
                                        @else
                                        <div class="tab-pane2">
                                            <select class="form-control select-soluong" name="soluong[]">
                                                @for($i=1; $i<=$value2->soLuong; $i++)
                                                    <option><?php echo $i ?></option>
                                                    @endfor
                                            </select>
                                        </div>
                                        @endif
                                        @endforeach

                                    </div>
                                </div>

                                <!-- <div class="chon-phanloai" style="margin-top: 30px;">
                                    <label style="color: #8B8989; font-size:14px;">Phân loại</label>
                                    <select class="form-control select-soluong" name="phanloai">
                                        @foreach($phanloaisp as $key => $value)
                                        <option>{{$value->tenPL}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="chon-soluong" style="margin-top: 15px;">
                                    <label style="color: #8B8989; font-size:14px;">Số lượng</label>
                                    <select class="form-control select-soluong" name="soluong">
                                        @for($i=1; $i<=$value->soLuongCon; $i++)
                                            <option><?php echo $i ?></option>
                                            @endfor
                                    </select>
                                </div> -->



                                <!-- <div class="btnsoluong">
                                    <label class="btn-soluong-giam btn-ct-giam">-</label>
                                    <input type="text" class="input-soluong input-ct-sl" value="1" name="soluong">
                                    <label class="btn-soluong-tang btn-ct-tang">+</label>
                                </div> -->
                                <div class="box-btn">

                                    <button type="submit" class="btn-chitiet">Thêm vào giỏ hàng</button>
                                    <!-- <button class="btn-trang btn-chitiet">Mua ngay</button> -->
                                </div>

                            </form>

                        </div>

                        <?php $maND = Session::get('nguoidung_id'); ?>
                        @if ($maND)
                        <div class="col-md-1">

                            <p style="text-align: right; margin-top: 40px;"><a class="like" href="{{URL::to('update-yeuthich/'.$sanphamct[0]->maSP.'&'.$tym)}}"><img src="{{asset('public/frontend/img/'.$tym)}}" alt=""></a></p>

                        </div>
                        @endif
                    </div>

                    <!-- <div style="margin-top: 100px;"></div> -->
                </div>

            </div>
            <!-- đánh giá bình luận của khách hàng -->
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-11">
                    <h4 style="margin-bottom: 50px; margin-left: 35px;">Bình luận</h4>
                    <!-- đánh giá của khách hàng -->
                    @foreach($binhluan as $key => $bl)
                    <!-- đếm số sao -->
                    <?php $sao = 5 - $bl->diem; ?>
                    <!-- format ngày tháng -->
                    <?php $thoigian = explode('-', $bl->thoigian); ?>
                    <div class="row">
                        <!-- avatar khách hàng -->
                        <div class="col-md-1" style="padding-left: 50px">
                            <img src="{{asset('public/frontend/img/avtcustomer.png')}}" alt="Cinque Terre">
                        </div>
                        <div class="col-md-11">
                            <p style="margin-bottom: 0px;"><b>{{$bl->tenND}}</b> <?php echo ($thoigian[2] . "/" . $thoigian[1] . "/" . $thoigian[0]) ?></p>
                            <div id="rating">
                                @for($i = 1; $i<=$sao; $i++) <label class="full" for="star5" title="Awesome - 5 stars"></label>
                                    @endfor
                                    @for($i = 1; $i<=$bl->diem; $i++)
                                        <label class="full" for="star1" title="Sucks big time - 1 star" style="color: black;"></label>
                                        @endfor
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-bottom: 30px;">
                        <div class="col-md-1"></div>
                        <div class="col-md-9">
                            <p>{{$bl->binhluan}}</p>
                        </div>
                    </div>
                    @endforeach
                    <!-- end đánh giá của khách hàng -->
                </div>
            </div>
            <!-- end đánh giá bình luận của khách hàng -->
        </div>
    </div>


    <!-- /// -->
    <div style="margin-top: 100px;"></div>
    <div style="width: 87%; margin-left: 90px;">
        <!-- <p class="text-dendam" style="font-size: 25px;">Đánh giá</p> -->
        <form method="POST">
            {{csrf_field()}}
            <!-- @foreach($sanphambl as $key => $sanphambl)
            <input type="type" name="sanphambl" class="sanphambl" value="{{$sanphambl -> maSP}}" />
            <div></div>
            @endforeach -->
            <div id="comment_show"></div>
            <p class="text-dendam" style="font-size: 25px;">Sản phẩm bán chạy</p>
            <div class="d-flex justify-content-between mb-5">
                @foreach($sanphambc1 as $key => $cate)
                <div class="card" style="width: 300px; height: 300px;">
                    <a href="{{URL::to('/chitietsanpham/'.$cate->maSP)}}">
                        <img src="{{asset('public/frontend/img/'.$cate->tenHA)}}" class="card-img-top" alt="..." height="230px" width="98%"></a>
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div class="card-text">{{$cate->tenSP}}</div>

                            <div class="d-flex align-items-start">
                                <div class="text-end card-text price">{{$cate->donGia}}đ</div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
    </div>

    </div>


    <script>
        //* hình ảnh sản phẩm */

        //chỉ lấy 1 đối tượng
        const $ = document.querySelector.bind(document);
        //lấy tất cả đối tượng
        const $$ = document.querySelectorAll.bind(document);

        //lấy theo tên class
        const tabs = $$(".tab-item");
        const panes = $$(".tab-pane");

        const tabActive = $(".tab-item.active");

        tabs.forEach((tab, index) => {
            const pane = panes[index];

            tab.onclick = function() {
                //tìm và xoá các element có class chứa active
                $(".tab-item.active").classList.remove("active");
                $(".tab-pane.active").classList.remove("active");

                this.classList.add("active");
                pane.classList.add("active");
            };
        });


        ///thay đổi số lượng
        function soLuong(st) {
            const key = Number(st)
            const panes2 = $$(".tab-pane2");
            const pane2 = panes2[key];
            $(".tab-pane2.active2").classList.remove("active2");
            pane2.classList.add("active2");
            // $(".tab-pane2.active2").namespace.remove("soluong")
            // pane2.namespace.add("soluong");
        }



        /* btn số lượng */
        const inputSL = $(".input-soluong.input-ct-sl");
        const btnTang = $(".btn-soluong-tang.btn-ct-tang");
        const btnGiam = $(".btn-soluong-giam.btn-ct-giam");

        btnGiam.onclick = function() {
            var sl = inputSL.value;
            if (sl >= 2) {
                sl--;
                inputSL.value = sl;
            }
        };

        btnTang.onclick = function() {
            var sl = inputSL.value;
            var slmax = <?= $sanphamct[0]->soLuongCon; ?>;
            if (sl < slmax) {
                sl++;
                inputSL.value = sl;
            }
        };
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            var maSP = $('.sanphambl');
            alert(maSP);
        });
    </script>

    <!-- start rating -->
    <script>
        function calcRate(r) {
            const f = ~~r, //Tương tự Math.floor(r)
                id = 'star' + f + (r % f ? 'half' : '')
            id && (document.getElementById(id).checked = !0)
        }
    </script>
    <!-- end rating -->


    @endsection