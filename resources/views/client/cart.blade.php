@extends('layout')
@section('title')
    Giỏ hàng
@endsection

@section('content')
    <div class="row justify-content-center">
        <h3 class="text-center my-4">Giỏ hàng của bạn</h3>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="col-8 ">
            @if(count($cart) > 0)
                @foreach($cart as $id => $details)
                    <div class="row p-4 border rounded shadow-sm mb-3">
                        <div class="col-3">
                            <img src="{{asset('storage/'.$details['image'] )}}" class="card-img-top" alt="...">
                        </div>
                        <div class="col-3">
                            <p>{{ $details['name'] }}</p>
                        </div>
                        <div class="col-3">
                            <p>Số lượng:
                                <input type="number" value="{{ $details['quantity'] }}" class=" w-25">
                            </p>
                        </div>
                        <div class="col-3">
                            <p>Giá:</p> <span class="text-danger">{{ $details['price'] }}$ </span></div>
                    </div>
                @endforeach
                <div class="col-4">
                    @php $total = 0; @endphp
                    @foreach($cart as $details)
                        @php $total += $details['price'] * $details['quantity']; @endphp
                    @endforeach
                    <h3>Tổng giá trị thanh toán: <span class="text-danger">{{ $total }}$</span></h3>
                    <hr>
                    <p>Số dư của bạn: 0$</p>
                    <p>Cần tiền bạn cần nạp: {{ $total }}$ </p>
                    <a class="btn btn-primary" href="">Mua Qua EBank</a> <span> Hoặc </span><a class="btn btn-primary " href="">Mua Qua MOMO</a>
                </div>
            @else
                <p>Giỏ hàng của bạn đang trống.</p>
            @endif
        </div>
    </div>
@endsection
