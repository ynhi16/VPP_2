@extends('khachhangHome')
@section('khachhang_content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
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
            
            margin-bottom: 15px;
            background-color: black;
            height: 45px;
            border-radius: 30px;
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
        .tabs {
            display: flex;
            position: relative;
        }

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
    </style>
</head>

<body>

    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-7">
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
                                </div>
                            </div>

                            <div class="row">
                                <!-- tab items -->
                                <div class="tabs">

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

                                </div>
                            </div>

                            <div class="row" style="margin-top: 80px; margin-left: -10px;">
                                <h3 class="danhmuc">Thông tin sản phẩm</h3>
                                <p style="margin-top: 25px;">Thời gian giao hàng dự kiến cho sản phẩm này là từ 7-9 ngày</p>
                                <p style="margin-top: 25px;">Thông tin sản phẩm: hình dán hình nhân vật hoạt hình</p>
                                <p>Chất liệu: Giấy từ Nhật Bản</p>
                                <p>Khối lượng: 10g</p>
                                <p>Kích thước: 10 * 11.4cm</p>
                                <p>Họa tiết: Hoạt hình</p>
                                <p>Gói hàng bao gồm: 40 hình dán/gói hàng</p>
                                <p style="margin-top: 25px;">Các sản phẩm trong cửa hàng về cơ bản là có sẵn trong kho</p>
                                <p>Chúng tôi chỉ bán các sản phẩm chất lượng cao và kiểm tra chất lượng trước khi giao.</p>
                                <p>Nếu bạn có bất kỳ câu hỏi hoặc đề xuất nào, bạn có thể liên hệ với chúng tôi.</p>
                                <p style="margin-top: 25px;">Lưu ý:</p>
                                <p>Do cài đặt ánh sáng và màn hình khác nhau, màu sắc thực tế của sản phẩm có thể hơi khác so với hình ảnh.</p>
                                <p>Vui lòng cho phép sai số 1-3 cm do đo lường thủ công.</p>
                                <p>Cảm ơn bạn đã thông cảm.</p>
                            </div>

                        </div>

                        <!-- <div class="col-md-5 inf-sanpham"> -->
                        <div class="col-md-4" style="margin-top: 35px;">
                            <form action="{{URL::to('/add-giohang')}}" method="post">
                                @csrf

                                <input type="hidden" name="maSP" value="{{$sanphamct[0]->maSP}}">
                                <p class="text-dendam" style="font-size: 34px;">{{$value->tenSP}}</p>
                                <p style="font-size: 20px; margin-top: 30px;">{{$value->donGia}} đ</p>
                                <!-- <p>Số lượng còn: {{$value->soLuongCon}}</p> -->
                                <div class="chon-phanloai" style="margin-top: 30px;">
                                    <label style="color: #8B8989; font-size:14px;">Phân loại</label>
                                    <select class="form-control select-soluong">
                                        @for($i=1; $i<=$value->soLuongCon; $i++)
                                            <option><?php echo $i ?></option>
                                            @endfor
                                    </select>
                                </div>
                                <div class="chon-soluong" style="margin-top: 15px;">
                                    <label style="color: #8B8989; font-size:14px;">Số lượng</label>
                                    <select class="form-control select-soluong" name="soluong">
                                        @for($i=1; $i<=$value->soLuongCon; $i++)
                                            <option><?php echo $i ?></option>
                                            @endfor
                                    </select>
                                </div>
                                <!-- <div class="btnsoluong">
                                    <label class="btn-soluong-giam btn-ct-giam">-</label>
                                    <input type="text" class="input-soluong input-ct-sl" value="1" name="soluong">
                                    <label class="btn-soluong-tang btn-ct-tang">+</label>
                                </div> -->
                                <div class="box-btn">

                                    <button type="submit" class=" btn-xanh btn-chitiet">Thêm vào giỏ hàng</button>
                                    <!-- <button class="btn-trang btn-chitiet">Mua ngay</button> -->
                                </div>

                            </form>

                        </div>
                    </div>

                    <div style="margin-top: 100px;"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">


    </div>

    <!-- /// -->
    <div style="margin-top: 100px;"></div>
    <div style="width: 87%; margin-left: 90px;">

        <p class="text-dendam">Sản phẩm bán chạy</p>
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
</body>

</html>




@endsection