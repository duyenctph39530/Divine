<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container ">
        <div class="row">
            <div class="col-6"></div>
            <div class="col-2"> 
                <a href="" class="text-info ">Sản phẩm khuyến mãi</a>
            </div>
            <div class="col-2"> 
                <a href="" class="text-info ">Thông tin liên hệ</a>
            </div>
            <div class="col-2"> 
                <a href="" class="text-info ">Hình thức liên hệ</a>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-3">
                <img src="{{ asset('storage/images/logo.jpg') }}" width="50px" alt="">
            </div>
            <div class="col-6 mt-3">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
            <div class="col-3 d-flex  justify-content-end align-items-center">
                <div class="dropdown w-25">
                    <button class="btn btn-link" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{ asset('storage/images/icon.png') }}" width="35px" alt="">
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('login.product')}}">Đăng Nhập</a></li>
                        <li><a class="dropdown-item" href="{{route('logout.product')}}">Đăng Ký</a></li>
                    </ul>
                </div>

                <div class=""> <a href="{{route('cart.product')}}"><img src="{{ asset('storage/images/cart.png') }}" width="80px"
                            alt=""></a></div>


            </div>

        </div>
       
        <div class="row mb-3 bg-light ">
            <nav class="navbar navbar-expand-lg ">
                <div class="container-fluid d-flex justify-content-center align-items-center">
                    <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                        <ul class="navbar-nav mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link text-success" href="{{ route('home.product') }}">Trang Chủ</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-success" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Sản phẩm
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('list.product') }}">Tất cả</a></li>
                                    <li><a class="dropdown-item" href="{{ route('study.product') }}">Học tập</a></li>
                                    <li><a class="dropdown-item" href="{{ route('work.product') }}">Giải trí</a></li>
                                    <li><a class="dropdown-item" href="{{ route('entertaiment.product') }}">Công việc</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-success" href="{{ route('deal.product') }}">Ưu đãi dành cho khách vip</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-success" href="{{ route('conduct.product') }}">Hướng dẫn mua hàng</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <hr>
      
    </div>
 <div class="container">
            @yield('content')</div>
    <footer class="container ">
        <div class="row">
            <div class="col-3">
                <img src="{{ asset('storage/images/facebook.png') }}" width="70px" alt="">
                <img src="{{ asset('storage/images/instagram.jpg') }}" width="50px" alt="">
                <img src="{{ asset('storage/images/youtube.png') }}" width="40px" alt="">
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-3 text-center ">
                <h4> GIỚI THIỆU</h4>
                <p><a href="" class="text-light">Game bản quyền là gì?</a> </p>
                <p><a href="">Giới thiệu Divine Shop</a> </p>
                <p> <a href="">Điều khoản dịch vụ</a> </p>
                <p><a href="">Chính sách bảo mật</a> </p>
            </div>
            <div class="col-3 text-center">
                <h4> TÀI KHOẢN</h4>
                <p><a href="">Đăng nhập</a> </p>
                <p><a href="">Đăng ký</a> </p>
            </div>
            <div class="col-3 text-center">
                <h4> LIÊN HỆ</h4>
                <p><a href="">Hotline tự động 1900 633 305</a> </p>
                <p><a href="">Liên hệ Hỗ trợ</a> </p>
                <p><a href="">Chat với CSKH</a> </p>
            </div>
        </div>
    </footer>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

</html>
