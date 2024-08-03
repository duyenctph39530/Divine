@extends('layout')
@section('title')
    Hướng dẫn mua hàng
@endsection

@section('content')
    <div class="row">
        <h2> Hướng dẫn tạo tài khoản</h2>
        <h4></h4>
        <h4>Bước 1: </h4>

        <p>Ở giao diện trang chủ Divine Shop, click vào Đăng kí</p>
        <img src="{{ asset('storage/images/b1.jpg') }}" alt="">



        <h4>Bước 2: </h4>
        <p>Điền đầy đủ các thông được yêu cầu:</p>
        <img src="{{ asset('storage/images/b2.jpg') }}" alt="">
        <div class="alert alert-danger" role="alert">
            <h4>Lưu ý:</h4>


            <p>Tên đăng nhập (Username) viết liền không dấu, không chứa kí tự đặc biệt. Nên viết dễ đọc dễ nhớ vì nó sẽ nằm
                trong chú pháp nạp tiền để thanh toán tại Shop.</p>

            <p>Email điền chính xác, vì các sản phẩm key game cũng như các thông báo qua trọng sẽ được Shop gửi qua email
                tới khách hàng.</p>
        </div>
        <h4>Bước 3:</h4>
        <p>Click vào nút Tạo tài khoản. Nếu thông tin bạn điền là chính xác và chưa tồn tại trên hệ thống, bạn sẽ được
            chuyển đến trang chủ. </p>

        <p>Như vậy là bạn đã tạo tài khoản thành công và sẵn sàng mua hàng rồi đó.</p>
    </div>
    <div class="alert alert-info">
        Ngoài ra nếu có sẵn tài khoản Google hoặc Facebook bạn có thể Đăng nhập/Đăng kí thông qua 2 mạng xã hội trên thông
        qua các nút dưới phần Đăng nhập qua MXH
    </div>
@endsection
