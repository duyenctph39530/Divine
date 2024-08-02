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
                @auth
                    <div class="dropdown w-25">

                        <button class="btn btn-link" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <span>{{ Auth::user()->username }}</span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="">Thông tin tài khoản</a></li>
                            <form id="logout-form" action="{{ route('logout-user') }}" method="POST"
                                style="display: none;">
                                @csrf
                            </form>
                            <li>
                                <a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Đăng Xuất
                                </a>
                            </li>
                            {{-- <li><a class="dropdown-item" href="{{route('logout-user')}}">Đăng Xuất</a></li> --}}
                        </ul>
                    </div>
                    </ul>
                @endauth

                <div class=""> <a href="{{ route('cart.product') }}"><img
                            src="{{ asset('storage/images/cart.png') }}" width="80px" alt=""></a></div>


            </div>

        </div>

    </div>
    <div class="container">
        <div class="row">
            <h3 class="text-center mb-3">@yield('title')</h3>    <hr>
            <aside class="col-3">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('dashboard')}}" >Dashboard</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link "  href="{{route('list-product')}}">Product</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('list-category')}}">Category</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">User</a>
                    </li>
                    
                </ul>
            </aside>
            <article class="col-8">
                
                @yield('content')
            </article>
        </div>
    </div>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

</html>
