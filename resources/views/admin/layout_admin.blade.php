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

        <div class="row mt-3">
            <div class="col-3">
                <a href="{{ route('home.product') }}"> <img src="{{ asset('storage/images/logo.jpg') }}" width="50px"
                        alt=""></a>
            </div>
            <div class="col-6 mt-3">

            </div>
            <div class="col-3 d-flex  justify-content-end align-items-center">
                @auth
                    <div class="dropdown w-25">

                        <button class="btn btn-link" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ asset('storage/images/icon.png') }}" width="35px" alt="">
                        </button>
                        <ul class="dropdown-menu">
                            {{-- <li><a class="dropdown-item" href="{{ route('detail-user', Auth::user()->id) }}">Thông tin tài
                                    khoản</a></li> --}}
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
                        </ul>
                    </div>
                    </ul>
                @endauth
            </div>

        </div>

    </div>
    <div class="container">
        <div class="row">
            <h3 class="text-center mb-3">@yield('title')</h3>
            <hr>
            <aside class="col-3">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('dashboard') }}">Dashboard</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="{{ route('list-product') }}">Product</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('list-category') }}">Category</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('list-user') }}">User</a>
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
