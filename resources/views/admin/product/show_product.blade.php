@extends('admin.layout_admin')
@section('title', 'Danh sách sản phẩm')
@section('content')

    <div class="m-3"><a href="{{ route('list-product') }}" class= "btn btn-primary">Quay lại</a></div>
    <form action="{{ route('store-product') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class=" mb-3">
            <label class="">Name</label>
            <input type="text" name="name" class="form-control" value="{{ $product->name }}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Image</label>
            <div class="">
                <img src="{{ asset('/storage/' . $product->image) }}" width="50" alt="">
                <input type="file" id="image" name="image" class="form-control">
            </div>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Price</label>
            <div class="">
                <input type="number" name="price" class="form-control" value="{{ $product->price }}">
            </div>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">View</label>
            <div class="">
                <input type="number" name="view" class="form-control" value="{{ $product->view }}">
            </div>
        </div>
        <div class=" mb-3">
            <label class="">Description</label>
            <textarea name="description" cols="30" rows="10" class="form-control">{{ $product->description }}</textarea>
        </div>
        <div class="">
            <label class="">Category</label>
            <select name="category_id" class="form-select">
                @foreach ($category as $cate)
                    <option value="{{ $cate->id }}" @if ($product->category_id == $cate->id) selected @endif>
                        {{ $cate->name }}</option>
                @endforeach
            </select>
        </div>
        <div class=" m-3">
            <button type="submit" class="btn btn-primary">Lưu</button>
        </div>
    </form>
@endsection
