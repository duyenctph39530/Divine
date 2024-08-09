<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thông tin tài khoản</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class=" row justify-content-center">
        <div class="col-6">
            @if (session('mes'))
                <div class="alert alert-success">
                    {{ session('mes') }}
                </div>
            @endif
            {{-- <a href="{{ route('updatePassword') }}" class="btn btn-primary">Đổi mật khẩu</a> --}}
            <form action="{{ route('updateUser', Auth::user()->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label">Full Name</label>
                    <input type="text" name="fullname" class="form-control" value="{{ Auth::user()->fullname }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">User Name</label>
                    <input type="text" name="username" class="form-control" value="{{ Auth::user()->username }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" value="{{ Auth::user()->email }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Avatar</label>
                    <input type="file" name="avatar" class="form-control">
                    @if (Auth::user()->avatar)
                        <img src="{{ asset('/storage/' . Auth::user()->avatar) }}" alt="Avatar" width="100">
                    @endif
                </div>
                <div class="m-3">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
