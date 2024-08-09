@extends('layout')
@section('title')
    Chi Tiết sản phẩm
@endsection

@section('content')
    <div class="row">
        <div class="col-6">
            <img src="{{asset('storage/'.$products->image )}}" class="card-img-top" alt="...">
        </div>
        <div class="col-6">
            <h2>{{ $products->name }}</h2>
            Giá: <span class="danger">{{ $products->price }} đ</span>
            <p>Thể loại: {{ $products->category->name }}</p>
            <div class="">
                <a href="{{route('add.cart',$products->id)}}" class="btn btn-primary">Thêm vào giỏ hàng</a>
                <a href="" class="btn btn-danger">Mua</a>

            </div>
        </div>

    </div>
    <hr>
    <div class="row">
        <div class="col-8">
            <h4>Mô Tả: </h4>
            <p>{{ $products->description }}</p>
        </div>
    </div>
    <div class="alert alert-info ">
        Lưu ý:

        Đơn hàng của quý khách sẽ được xử lý trong vòng tối đa 24h.
        Tài khoản mới tạo trong vòng 1 tháng sẽ không áp dụng được gói này.
        Sản phẩm chỉ áp dụng cho tài khoản thường và chưa từng thêm phương thức thanh toán, mỗi tài khoản chỉ mua được một
        lần gói 3 tháng.
        Sau khi mua bạn chat vào Fanpage bên mình để được hỗ trợ xác thực đăng nhập tại ĐÂY
    </div>
    <div class="col-8">
        <h4>Chính sách bảo hành</h4>
        <p>
            Thời gian bảo hành </p>
       <p>- 3 tháng</p> 

       <p> Cách thức bảo hành</p>
       <p>- Đổi mới sản phẩm nếu bị lỗi trong quá trình sử dụng</p>

        <p>- Trong trường hợp hết hàng để đổi mới, hoàn tiền theo quy tắc:</p>

        <p>Dưới 15 ngày: Hoàn 100% giá trị đơn hàng</p>
        <p>Sau 15 ngày: Hoàn tiền theo theo thời gian chưa sử dụng (VD: Nếu sử dụng sản phẩm được sau 1 tháng phát sinh lỗi sẽ
        được hoàn lại 65% giá trị đơn hàng)</p>
    </div>
    <hr>
    <div class="row">
      <h3>Sản phẩm liên quan</h3>
      @foreach ($product as $pro )
        <div class="col-3">
        <img src="{{$pro->image}}" width="200px" alt="">
        <div class="">
        <a href="{{route('detail.product',$pro->id)}}">Xem thêm>></a></div>
      </div>
      @endforeach
      
    </div>
@endsection
