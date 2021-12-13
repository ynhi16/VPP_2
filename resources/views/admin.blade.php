<!doctype html>
<html lang="en">

<head>
    <title>Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('public/frontend/css/admin.css')}}">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body>

    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar" class="active">
            <h1 class="title logo">Sahami</h1>
            <ul class="list-unstyled components mb-5">
                <li class="active">
                    <a href="{{URL::to('/dashboard')}}"><span class="fa fa-home"></span> Dashboard</a>
                </li>
                <li>
                    <a href="#"><span class="fa fa-user"></span> Quản lý tài khoản</a>
                </li>
                <li>
                <a href="#"><span class="fa fa-tasks" aria-hidden="true"></span>Quản lý sản phẩm</a>
                </li>
                <li>
                   
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="">
                        <span class="fa fa-book" aria-hidden="true"></span>Quản lý danh mục </a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="{{URL::to('/add-category-product')}}">Thêm danh mục sản phẩm</a>
                        </li>
                        <li>
                            <a href="{{URL::to('/all-category-product')}}">Liệt kê danh mục sản phẩm</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><span class="fa fa-sticky-note" aria-hidden="true"></span>Xét duyệt hóa đơn</a>
                </li>
                <li>
                    <a href="#"><span class="fa fa-percent" aria-hidden="true"></span> Quản lý khuyến mãi</a>
                </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-success me-3">
                        <i class="fa fa-bars"></i>
                        <span class="sr-only">Toggle Menu</span>
                    </button>
                    

                </div>
            </nav>
            <div class="mt-3">
                @yield('dashboard')
                @yield('addcategory')
                @yield('allcategory')
            </div>

        </div>

    </div>

    <script src="{{asset('public/backend/js/jquery.min.js')}}"></script>
    <script src="{{asset('public/backend/js/popper.js')}}"></script>
    <script src="{{asset('public/backend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/backend/js/main.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>