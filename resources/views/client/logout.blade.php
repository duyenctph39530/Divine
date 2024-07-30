@extends('client.layout')
@section('title')
Đăng ký
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h3 class="text-center my-4">Đăng ký</h3>
            <form action="" method="post" class="p-4 border rounded shadow-sm">
                @csrf
                <div class="form-group mb-3">
                    <label for="name">Tên đăng nhập</label>
                    <input class="form-control" type="text" name="name" id="name" required>
                </div>
                <div class="form-group mb-3">
                    <label for="email">Email hoặc số điện thoại</label>
                    <input class="form-control" type="text" name="email" id="email" required>
                </div>
                <div class="form-group mb-3">
                    <label for="password">Mật khẩu</label>
                    <input class="form-control" type="password" name="password" id="password" required>
                </div>
                <div class="form-group mb-3">
                    <label for="checkPassword">Nhập Lại Mật khẩu</label>
                    <input class="form-control" type="checkPassword" name="checkPassword" id="checkPassword" required>
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-success">Đăng Ký</button>
                </div>
            </form>
            
            <p class="text-center my-4">Hoặc Đăng Nhập bằng</p>
            <div class="text-center">
                <a href="#" class="me-2"><img src="{{ asset('storage/images/google.jpg') }}" width="50px" alt="Google"></a>
                <a href="#"><img src="{{ asset('storage/images/facebook.png') }}" width="80px" alt="Facebook"></a>
            </div>
        </div>
    </div>
@endsection
