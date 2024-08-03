@extends('admin.layout_admin')
@section('title', 'Dashboard')
@section('content')
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
    <div class="card text-center shadow p-3 mb-5 bg-body-tertiary rounded" style="width: 500px;">
        <h1 class="text-success">Tổng số lượt xem </h1>
        <div class="card-body">
            <h3 class=""> {{ $totalView }}</h3>
        </div>
    </div>

@endsection
