@extends('admin.layout_admin')
@section('title', 'Dashboard')
@section('content')
    <div class="d-flex gap-2">
        <div class="card text-center shadow p-3 mb-5 bg-body-tertiary rounded" style="width: 500px;">
            <h1 class="text-success">Tổng sản phẩm</h1>
            <div class="card-body">
                <h3 class=""> {{ $totalProduct }}</h3>
            </div>
        </div>
        <div class="card text-center shadow p-3 mb-5 bg-body-tertiary rounded" style="width: 500px;">
            <h1 class="text-success">Tổng danh mục</h1>
            <div class="card-body">
                <h3 class=""> {{ $totalCategory }}</h3>
            </div>
        </div>
    </div>
    <div class="d-flex gap-3 ">
        <div class="card text-center shadow p-3 mb-5 bg-body-tertiary rounded" style="width: 500px;">
            <h1 class="text-success">Tổng số lượt xem </h1>
            <div class="card-body">
                <h3 class=""> {{ $totalView }}</h3>
            </div>
        </div>

        <div class="card text-center shadow p-3 mb-5 bg-body-tertiary rounded" style="width: 500px;">
            <h1 class="text-success">Sản phẩm theo danh mục</h1>
            <div class="card-body">
                @foreach ($productsByCategory as $category)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        {{ $category->name }}
                        <span class="badge badge-primary badge-pill text-danger">{{ $category->products->count() }}</span>
                    </li>
                @endforeach
            </div>
        </div>
    </div>
@endsection
