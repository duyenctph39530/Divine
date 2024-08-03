
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
                <th scope="col">Active</th>

            </tr>
        </thead>
        <tbody>
            {{-- <a href="{{ route('create-user') }}" class="btn btn-primary">Create new</a> --}}
            @foreach ($users as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->fullname }}</td>
                    <td>{{ $user->username }}</td>
                    <td><img src="{{ asset('storage/'.$user->avatar) }}" width="50" alt=""></td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->active ? 'Kích hoạt' : 'Dừng hoạt động'}}</td>

                    <td class="">
                        
                        <form action="{{ route('toggleActive', $user->id) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button type="submit"
                                class="btn btn-danger">{{ $user->active ? 'Dừng hoạt động' : 'Kích hoạt' }}</button>
                        </form>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
