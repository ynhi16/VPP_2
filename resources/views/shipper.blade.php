<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Shipper</title>
    <link rel="stylesheet" href="{{('public/frontend/css/shipper.css')}}">
    <link rel="stylesheet" type="text/css" href="{{('public/frontend/font/fontawesome-free-5.15.4/css/all.min.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script> 

    <style type="text/css"> 
        .avatar {
            width: 36px;
            height: 36px;
            /*border: solid 1px black;*/
        }
        .bell{
            color: black;
            margin-bottom: 5px;
            /*border: solid 1px black;*/
            width: 36px;
            height: 36px;
        }
        .btn_Exit {
            background: #F9A5A9;
            padding: 10px 15px;
            border-radius: 20px;
            color: white;
        }
        a {
            text-decoration: none;
            color: black;
        }
        li {
            display: inline-block;
            margin-left: 20px;
            margin-top: 10px;
        }
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0 3rem;
        }  
        .title {
            font-family: 'Hello Day', sans-serif;
        }
        .container-fluid {
            color: black;
        }
        .sp_exit {
            padding-left: 10px;
        }
        .noidung{
            background: #FCFAFE;

        }
        .container {
            border: solid 1px black;
            width: 1200px;
        }
        .p_DonHang {         
            font-weight: bold;
            font-size: 22px;
        }
        .HoaDon {
            color: #F08080;
            font-weight: normal;
        }
        .th li {
           padding-right: 50px;
        }
        .input-group {
           width: 150px;
        }
        .form-control {
            background: #5663D6;
            color: white;
        }
        .phan1 {
            background: rgba(255, 228, 225, 0.5);
        }
        .input-group-text {
            background: #5663D6;
            color: white;

        }
        .btn {
            margin-top: -20px;
            margin-left: 10px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="title" href="#"><h1>Sahami</h1></a>
            <form class="d-flex">
                <ul>
                    <li>
                        <a href="">
                           <img src="{{('public/frontend/img/bell.png')}}" class="bell">
                        </a>
                     </li>
                     <li>
                        <a href="">
                           <img src="{{('public/frontend/img/cat.jpg')}}" class="avatar">
                        </a>
                     </li>
                     <li>
                        <a href="" class="btn_Exit">
                          <span>
                              Đăng xuất
                          </span>
                          <span class="sp_exit">
                              <i class="fas fa-sign-out-alt"></i>
                          </span>
                        </a>
                    </li>
                </ul>
            </form>
        </div>
    </nav>
    <div class="noidung">       
        <div class="container">
        <p class="p_DonHang">Đơn hàng</p>
        <div class="phan1">
            <p class="p_DonHang HoaDon">Tất cả hóa đơn</p>
            <ul class="th">
                <li>Ngày bắt đầu</li>
                <li>Ngày kết thúc</li>
                <li>Trạng thái</li>
                <li>Tỉnh thành</li>
            </ul>
            <ul class="btn">
                <li>
                    <div class="col-sm-4">
                        <div class="input-group date" id="datepicker">
                            <input type="text" class="form-control">
                            <span class="input-group-append">
                                <span class="input-group-text d-block">
                                    <i class="fa fa-calendar"></i>
                                </span>
                            </span>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="col-sm-4">
                        <div class="input-group date" id="datepicker2">
                            <input type="text" class="form-control">
                            <span class="input-group-append">
                                <span class="input-group-text d-block">
                                    <i class="fa fa-calendar"></i>
                                </span>
                            </span>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="dropdown">
                        <select>
                            <option>Chờ duyệt</option>
                            <option>Đang giao</option>
                            <option>Đã giao</option>
                        </select>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <script type="text/javascript">
        $(function() {
            $('#datepicker').datepicker();
        });
        $(function() {
            $('#datepicker2').datepicker();
        });
    </script>
</body>
</html>
