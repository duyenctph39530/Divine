@extends('admin.layout_admin')
@section('title', 'Cập nhật')
@section('content')
@if (session('mes'))
<div class="alert alert-success">
    {{ session('mes') }}
</div>
@endif
    <form action="{{ route('update-category',$category) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class=" mb-3">
            <label class="">Name</label>
            <input type="text" name="name"  value="{{$category->name}}" class="form-control">
        </div>

        <div class=" m-3">
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{route('list-category')}}" class="btn btn-success">Back</a>
        </div>
    </form>
@endsection
