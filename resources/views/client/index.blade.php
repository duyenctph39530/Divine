@extends('client.layout')
@section('title')
    Trang Chủ
@endsection

@section('content')
    <div class="row">
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2">
                </button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3">
                </button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                    aria-label="Slide 4">
                </button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                    aria-label="Slide 5">
                </button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5"
                    aria-label="Slide 6">
                </button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6"
                    aria-label="Slide 7">
                </button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="7"
                    aria-label="Slide 8">
                </button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="8"
                    aria-label="Slide 9">
                </button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="9"
                    aria-label="Slide 10">
                </button>

            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('storage/images/slide1.png') }}" class="d-block w-100" alt="...">

                </div>
                <div class="carousel-item">
                    <img src="{{ asset('storage/images/slide2.png') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('storage/images/slide3.png') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('storage/images/slide4.png') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('storage/images/slide5.png') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('storage/images/slide6.png') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('storage/images/slide7.png') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('storage/images/slide8.png') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('storage/images/slide9.png') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('storage/images/slide10.png') }}" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <h2 class="text-center">Sản phẩm mới nhất</h2>
    <hr>
    <div class="row">

        @foreach ($products as $product)
            <div class="col-3 mb-3">
                <div class="card" style="width: 100%;">
                    <img src="{{ $product->image }}" class="card-img-top" alt="...">
                    <div class="card-body text center">
                        <a href="{{ route('detail.product', $product->id) }}">
                            <h5 class="card-title text-body">{{ $product->name }}</h5>
                        </a>
                        <p class=" text-danger"> Giá: {{ $product->price }}</p>
                    </div>
                    <div class="d-flex justify-content-center m-2 ">
                        <a href="{{ route('detail.product', $product->id) }}" class="btn btn-primary w-50 ">Xem thêm</a>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
    <div class="d-flex justify-content-center">
        {{ $products->links() }}
    </div>
    <h2 class="text-center">Sản phẩm nổi bật nhất</h2>
    <hr>
    <div class="row">
        @foreach ($views as $view)
            <div class="col-3 mb-3">
                <div class="card" style="width: 100%;">
                    <img src="{{ $view->image }}" class="card-img-top" alt="...">
                    <div class="card-body text center">
                        <a href="{{ route('detail.product', $product->id) }}">
                            <h5 class="card-title text-body">{{ $view->name }}</h5>
                        </a>
                        <p class=" text-danger"> Giá: {{ $view->price }}</p>
                    </div>
                    <div class="d-flex justify-content-center m-2">
                        <a href="{{ route('detail.product', $product->id) }}" class="btn btn-primary w-50 ">Xem thêm</a>
                    </div>
                </div>
            </div>
        @endforeach<div class="d-flex justify-content-center">
        
    </div>
    </div>
    
   <div class="">
    
   </div>
    <hr>
    <div class="row">
        @foreach ($study1 as $study)
            <div class="col-3 mb-3">
                <div class="card" style="width: 100%;">
                    <img src="{{ $study->image }}" class="card-img-top" alt="...">
                    <div class="card-body text center">
                        <p class=" text-danger"> Giá: {{ $study->price }}</p>
                    </div>
                    <div class="d-flex justify-content-center m-2">
                        <a href="{{ route('detail.product', $product->id) }}" class="btn btn-primary w-50 ">Xem thêm</a>
                    </div>
                </div>
            </div>
        @endforeach <div class="d-flex justify-content-center">
        
    </div>
    </div>
   
    <h2 class="text-center">Công việc</h2>
    <hr>
    <div class="row">
        @foreach ($study2 as $study)
            <div class="col-3 mb-3">
                <div class="card" style="width: 100%;">
                    <img src="{{ $study->image }}" class="card-img-top" alt="...">
                    <div class="card-body text center">
                        <p class=" text-danger"> Giá: {{ $study->price }}</p>
                    </div>
                    <div class="d-flex justify-content-center m-2">
                        <a href="{{ route('detail.product', $product->id) }}" class="btn btn-primary w-50 ">Xem thêm</a>
                    </div>
                </div>
            </div>
        @endforeach<div class="d-flex justify-content-center">
        
    </div>
    </div>
    
    <h2 class="text-center">Giải trí</h2>
    <hr>
    <div class="row">
        @foreach ($study3 as $study)
            <div class="col-3 mb-3">
                <div class="card" style="width: 100%;">
                    <img src="{{ $study->image }}" class="card-img-top" alt="...">
                    <div class="card-body text center">
                        <p class=" text-danger"> Giá: {{ $study->price }}</p>
                    </div>
                    <div class="d-flex justify-content-center m-2">
                        <a href="{{ route('detail.product', $product->id) }}" class="btn btn-primary w-50 ">Xem thêm</a>
                    </div>
                </div>
            </div>
        @endforeach    <div class="d-flex justify-content-center">
        
    </div>
    </div>

@endsection
