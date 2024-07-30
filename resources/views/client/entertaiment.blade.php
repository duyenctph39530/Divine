@extends('client.layout')
@section('title')
    Giải trí
@endsection

@section('content')
    <div class="row">
        @foreach ($products as $product)
            <div class="col-3 mb-3">
                <div class="card" style="width: 100%;">
                    <img src="{{ $product->image }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5> 
                        <p class=" text-danger"> Giá: {{ $product->price }}</p>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
@endsection
