@extends('admin.layout_admin')
@section('title', 'Danh sách danh mục')
@section('content')
    <form action="{{ route('store-category') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class=" mb-3">
            <label class="">Name</label>
            <input type="text" name="name" class="form-control">
        </div>

        <div class=" m-3">
            <button type="submit" class="btn btn-primary">Lưu</button>
        </div>
    </form>
@endsection
