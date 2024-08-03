@extends('layout')
@section('title')
    Giỏ hàng
@endsection

@section('content')
    <div class="row justify-content-center">

        <h3 class="text-center my-4">Giỏ hàng của bạn</h3>
        <div class="col-8 ">
            <div class="row p-4 border rounded shadow-sm">
                <div class="col-3">
                    <img src="{{ $products->image }}" alt="" width="100px">
                </div>
                <div class="col-3">
                    <p>{{ $products->name }}</p>
                </div>
                <div class="col-3">
                    <p>Số lượng:
                        <input type="number" value="1" class=" w-25">
                    </p>
                </div>
                <div class="col-3">
                    <p>Giá:</p> <span class="text-danger">{{ $products->price }}$ </span></div>
            </div>
        </div>
        <div class="col-4">
           
                <h3>Tổng giá trị thanh toán: <span class="text-danger">{{$products->price }}$</span> </h3> 
                <hr>
            <p>Số dư của bạn: 0$</p>
            <p>Cần tiền bạn cần nạp: {{$products->price }}$ </p>
            <a class="btn btn-primary" href="">Mua Qua EBank</a> <span> Hoặc </span><a class="btn btn-primary " href="">Mua Qua MOMO</a>
        </div>
    @endsection
