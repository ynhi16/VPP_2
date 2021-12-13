<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('public/frontend/css/layout.css')}}">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body>
    <div class="ms-5 me-5">
        <div class="navbar_style">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
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
                    </div>
                    <div class="d-flex align-items-start bd-highlight mb-3" style="height: 100px">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="navbar_right" href="#">Đăng Nhập</a>
                            <li class="nav-item">
                                <a class="navbar_right" href="#">Đăng Ký</a>
                            <li class="nav-item">
                            </li>
                            <button type="button" class="btn me-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                </svg>
                            </button>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div>@yield('trangchu')</div>
        <footer class="text-center text-lg-start bg-light">
            <div class="d-flex justify-content-between border_title">
               <h1 class="title p-2">Sahami</h1>
                <div class="p-2 bd-highlight">
                    <button type="button" class="btn me-2">
                        <i class="fab fa-pinterest fa-lg"></i>
                    </button>              
                    <button type="button" class="btn me-2">
                        <i class="fab fa-instagram fa-lg"></i>
                    </button>
                    <button type="button" class="btn me-2">
                        <i class="fab fa-facebook fa-lg" ></i>                                       
                    </button>
                </div>
            </div>
            <div class="d-flex justify-content-around" style="width: 50%">           
                <div class="d-flex flex-column bd-highlight">
                    <div class="p-2 bd-highlight">Địa chỉ: 48 Cao Thắng - P. Thanh Bình - Q.Hải Châu - TP. Đà Nẵng  </div>
                    <div class="p-2">Email: sahami@gmail.com</div>
                    <div class="p-2">Số điện thoại: 09123456789</div>
                </div>           
                <div class="d-flex flex-column footer_right">
                    <div class="p-2"> Hỗ trợ khách hàng </div>
                    <div class="p-2"><a href="#">Hướng dẫn mua hàng</a></div>
                    <div class="p-2"><a href="#">Chính sách đổi trả</a></div>
                    <div class="p-2"><a href="#">Các câu hỏi thường gặp</a></div>
                </div>
               
            </div>
        </footer>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
</body>

</html>