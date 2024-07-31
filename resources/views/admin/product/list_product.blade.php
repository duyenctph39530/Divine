@extends('admin.layout_admin')
@section('title', 'Danh sách sản phẩm')
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
                <th scope="col">Image</th>
                <th scope="col">Price</th>
                <th scope="col">View</th>
                <th scope="col">Category</th>

            </tr>
        </thead>
        <tbody>
            <a href="{{ route('create-product') }}" class="btn btn-primary">Create new</a>
            @foreach ($products as $product)
                <tr>
                    <th scope="row">{{ $product->id }}</th>
                    <td>{{ $product->name }}</td>
                    <td><img src="{{ asset('/storage/' . $product->image) }}" width="75" alt=""></td>
                    {{-- <td><img src="{{$product->image }}" width="75" alt=""></td> --}}
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->view }}</td>
                    <td>{{ $product->category->name }}</td>
                    <td class="d-flex gap-1">
                        <a href="{{ route('edit-product', $product) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('destroy-product', $product) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger " onclick="return confirm('Bạn chắc chắn muốn xóa ? ')">Delete</button>
                        </form>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$products->links()}};
@endsection
