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
                <th scope="col">Name</th>


            </tr>
        </thead>
        <tbody>
            <a href="{{ route('create-category') }}" class="btn btn-primary">Create new</a>
            @foreach ($categories as $category)
                <tr>
                    <th scope="row">{{ $category->id }}</th>
                    <td>{{ $category->name }}</td>

                    <td class="d-flex gap-1">
                        <a href="{{ route('edit-category', $category) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('destroy-category', $category) }}">
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
