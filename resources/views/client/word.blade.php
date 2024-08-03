@extends('layout')
@section('title')
    Công Việc
@endsection

@section('content')
    <div class="row">
        @foreach ($products as $product)
            <div class="col-3 mb-3">
                <div class="card" style="width: 100%;">
                    <img src="{{asset('storage/'.$product->image )}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a href="{{ route('detail.product', $product->id) }}">
                        <h5 class="card-title">{{ $product->name }}</h5> </a>
                        <a href=""> DMD</a>
                        <p class=" text-danger"> Giá: {{ $product->price }}</p>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
@endsection