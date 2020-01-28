@extends('layouts.master')
@section('content')

<div class="row m-2 m-md-5 text-center">
    @foreach ($products as $product)
    <div class="col-6 col-sm-4 col-md-3 mt-3 p-0 pl-1 p-md-2">
        <div class="card text-left remove-border-radius">
            <img class="card-img-top product-image" src="{{$product['img']}}" alt="">
            <div class="product__view">View Product</div>
            <div class="card-body p-0">
                <p class="card-text text-center product__name m-0">{{$product['name']}}</p>
                <div class="d-flex">
                    <input type="button" class="product__button flex-column flex-fill" value="hah">
                    <input type="button" class="product__button flex-column flex-fill" value="hah">
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection