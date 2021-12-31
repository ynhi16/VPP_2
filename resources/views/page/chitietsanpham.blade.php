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
            padding: 0;
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
            /* width: 138px;
            height: 87px; */
            margin-top: 5px;

        }

        .img-con-chon {
            border: solid #16A085;
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
        }

        .btn-soluong-tang {
            background-color: #16A085;
            border: solid #16A085;
            width: 29px;
            height: 29px;
            border-radius: 3px;
        }

        .btn {
            text-align: center;
            margin-top: 20px;
        }

        .btn-chitiet {
            width: 300px;
            height: 40px;
            margin-bottom: 15px;
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
    </style>
</head>

<body>

    <div class="container">
        <p class="danhmuc">{{$sanphamct[0]->tenDM}}</p>
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <img src="{{asset('public/frontend/img/'.$tenha)}}" class="img-thumbnail" alt="Cinque Terre">
                </div>
                <div class="row">
                    @foreach($sanphamct as $kay => $value)

                    <div class="col-md-3" style="padding: 0; margin-right: 5px;">
                        <a href="{{URL::to('/chitietsanpham/'.$value->maSP.'&'.$value->tenHA)}}">
                            @if ($value->tenHA === $tenha)

                            <img src="{{asset('public/frontend/img/'.$value->tenHA)}}" class="img-thumbnail img-con img-con-chon" alt="Cinque Terre">
                            @else

                            <img src="{{asset('public/frontend/img/'.$value->tenHA)}}" class="img-thumbnail img-con" alt="Cinque Terre">
                            @endif
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="col-md-5 inf-sanpham">
                <form action="{{URL::to('/add-giohang')}}" method="post">
                    @csrf
                    <input type="hidden" name="maSP" value="{{$sanphamct[0]->maSP}}">
                    <p class="text-dendam" style="font-size: 22px;">{{$value->tenSP}}</p>
                    <p>{{$value->donGia}} đ</p>
                    <p>Số lượng còn: {{$value->soLuongCon}}</p>
                    <div class="btnsoluong">
                        <button class="btn-soluong-giam"><a href="#" style="color: #16A085;">-</a></button>
                        <input type="text" class="input-soluong" value="1" name="soluong">
                        <button class="btn-soluong-tang"><a href="#" style="color: white;">+</a></button>
                    </div>
                    <div class="btn">
                        <button type="submit" class="btn-xanh btn-chitiet">Thêm vào giỏ hàng</button>
                        <button class="btn-trang btn-chitiet">Mua ngay</button>
                    </div>
                </form>
            </div>
        </div>

        <div style="margin-top: 100px;"></div>

    </div>

    <!-- /// -->
    <div style="margin-top: 100px;"></div>
    <div style="width: 87%; margin-left: 90px;">

        <p class="text-dendam">Sản phẩm bán chạy</p>
        <div class="row spbc">
            @for($i=0; $i<=3; $i++) <div class="col-md-3 img-sp-bc">
                <div class="row">
                    <a href="{{URL::to('/chitietsanpham/'.$sanphambc[$i]->maSP.'&'.$sanphambc[$i]->tenHA)}}"><img src="{{asset('public/frontend/img/'.$sanphambc[$i]->tenHA)}}" class="img-thumbnail" alt="Cinque Terre"></a>
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
                <a href="{{URL::to('/chitietsanpham/'.$sanphambc[$i]->maSP.'&'.$sanphambc[$i]->tenHA)}}"><img src="{{asset('public/frontend/img/'.$sanphambc[$i]->tenHA)}}" class="img-thumbnail" alt="Cinque Terre"></a>
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

</body>

</html>




@endsection