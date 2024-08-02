
@extends('admin.layout_admin')
@section('title', 'Danh sách danh mục')
@section('content')
    @if (session('mes'))
        <div class="alert alert-success">
            {{ session('mes') }}
        </div>
    @endif
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Full Name</th>
                <th scope="col">User Name</th>
                <th scope="col">Avatar</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>

            </tr>
        </thead>
        <tbody>
            <a href="{{ route('create-user') }}" class="btn btn-primary">Create new</a>
            @foreach ($users as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->fullname }}</td>
                    <td>{{ $user->username }}</td>
                    <td><img src="{{ asset('/storage/'.$user->avatar) }}" width="50" alt=""></td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->password }}</td>

                    <td>{{}}</td>
                    <td class="d-flex gap-1">
                        <form action="{{ route('destroy-user', $user) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger "
                                onclick="return confirm('Bạn chắc chắn muốn xóa ? ')">Delete</button>
                        </form>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
