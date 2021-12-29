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
            height: 355px;
            padding-left: 40px;
            padding-top: 20px;
            margin-left: 20px;

        }

        .img-con {
            width: 138px;
            height: 87px;
            margin-top: 5px;
            margin-right: 5px;
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

    </style>
</head>

<body>

    <div class="container">
        <p class="danhmuc">Sticker</p>
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <img src="{{asset('public/frontend/img/sanpham1.png')}}" class="img-thumbnail" alt="Cinque Terre">
                </div>
                <div class="row">
                    <img src="{{asset('public/frontend/img/sanpham1.png')}}" class="img-thumbnail img-con img-con-chon" alt="Cinque Terre">
                    <img src="{{asset('public/frontend/img/sanpham1.png')}}" class="img-thumbnail img-con" alt="Cinque Terre">
                    <img src="{{asset('public/frontend/img/sanpham1.png')}}" class="img-thumbnail img-con" alt="Cinque Terre">
                </div>
            </div>

            <div class="col-md-5 inf-sanpham">
                <p class="text-dendam" style="font-size: 24px;">60 Sticker cổ điển retro</p>
                <p>22.000 đ</p>
                <div class="btnsoluong">
                    <button class="btn-soluong-giam"><a href="#" style="color: #16A085;">-</a></button>
                    <input type="text" class="input-soluong" value="1">
                    <button class="btn-soluong-tang"><a href="#" style="color: white;">+</a></button>
                </div>
                <div class="btn">
                    <button class="btn-xanh btn-chitiet">Thêm vào giỏ hàng</button>
                    <button class="btn-trang btn-chitiet">Mua ngay</button>
                </div>
            </div>
        </div>

        <div style="margin-top: 100px;"></div>
        @include('element.sanphambanchay')

    </div>

</body>

</html>




@endsection