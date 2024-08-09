@extends('layout')
@section('title')
    Giỏ hàng
@endsection

@section('content')
    <div class="row justify-content-center">
        <h3 class="text-center my-4">Giỏ hàng của bạn</h3>
        @if (session('mes'))
            <div class="alert alert-success">
                {{ session('mes') }}
            </div>
        @endif
        <div class="col-8">
            @if (count($cart) > 0)
                @foreach ($cart as $item)
                    <div class="row p-4 border rounded shadow-sm mb-3">
                        <div class="col-3">
                            <img src="{{ asset('/storage/' . $item->product->image) }}" class="card-img-top" alt="...">
                        </div>
                        <div class="col-3">
                            <p>{{ $item->product->name }}</p>
                        </div>
                        <div class="col-2">
                            <p>Số lượng:
                                <input type="number" name="quantity" class="form-control" value="{{ $item->quantity }}"
                                    min="1">
                            </p>
                        </div>
                        <div class="col-2">
                            <p>Giá:</p>
                            <span class="text-danger">{{ $item->product->price }} đ</span>
                        </div>
                        <div class="col-2">
                            <form action="{{ route('delete-cartProduct', $item->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Xóa</button>
                            </form>
                        </div>
                    </div>
                @endforeach
        </div>
        <div class="col-4 justify-content-center">
            @php $total = 0; @endphp
            @foreach ($cart as $item)
                @php $total += $item->product->price * $item->quantity; @endphp
            @endforeach
            <h3>Tổng giá trị thanh toán: <span class="text-danger">{{ $total }} đ</span></h3>
            <hr>
            <p>Số dư của bạn: 0 đ</p>
            <p>Cần tiền bạn cần nạp: {{ $total }} đ</p>
            <a class="btn btn-primary" href="#">Mua Qua EBank</a>
            <span> Hoặc </span>
            <a class="btn btn-primary" href="#">Mua Qua MOMO</a>
        </div>
    @else
        <p>Giỏ hàng của bạn đang trống.</p>
        @endif
    </div>
@endsection
