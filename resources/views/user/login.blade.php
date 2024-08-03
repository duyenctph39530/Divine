@extends('layout')
@section('title')
    Đăng Nhập
@endsection

@section('content')
    @if (session('mes'))
        <div class="alert alert-success">
            {{ session('mes') }}
        </div>
    @endif
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h3 class="text-center my-4">Login</h3>
            <form action="" method="post" class="p-4 border rounded shadow-sm">
                @csrf
                <div class="form-group mb-3">
                    <label for="name">User Name</label>
                    <input class="form-control" type="text" name="username" id="name" required>
                </div>

                <div class="form-group mb-3">
                    <label for="password">Password</label>
                    <input class="form-control" type="password" name="password" id="password" required>
                </div>

                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-success">Login</button>
                </div>
            </form>

            <p class="text-center my-4">Or</p>
            <div class="text-center">
                <a href="#" class="me-2"><img src="{{ asset('storage/images/google.jpg') }}" width="50px"
                        alt="Google"></a>
                <a href="#"><img src="{{ asset('storage/images/facebook.png') }}" width="80px" alt="Facebook"></a>
            </div>
        </div>
    </div>
@endsection
