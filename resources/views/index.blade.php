@extends('layouts.master')
@section('content')

<div class="row m-0 m-md-2 m-lg-5 text-center">

    @foreach ($products as $product)
    <div class="col-6 col-sm-4 col-md-3 mt-3 p-0 p-md-1 p-lg-2 {{ $loop->even ? 'pl-1' : ''}}">
        <div class="card text-left remove-border-radius">
            <a href="#" class="product__wrap">
                <img class="card-img-top product__image" src="{{$product['img']}}" alt="" />
                <input type="button" class="button--pill button--white product__view" value="View Product" />
            </a>
            {{-- <a href="#"><img class="card-img-top product__image" src="{{$product['img']}}" alt="" /></a>
            <a class="product__view">View Product</a> --}}
            <div class="card-body p-0">
                <p class="card-text text-center product__name m-0">{{$product['name']}}</p>
                <div class="d-flex flex-row">
                    <input type="button" class="product__button flex-fill" value="Type">
                    <input type="button" class="product__button flex-fill" value="Label">
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

<div class="row mt-3">
    <div class="col-12 d-flex">
        <button type="button" class="justify-content-start button__nav button__nav--left inactive">
            <i class="fa fa-chevron-left mr-3" aria-hidden="true"></i> Prev Page
        </button>
        <div class="d-flex justify-content-center flex-fill align-self-center">
            <span class="pagination pagination__prev active">001</span>
            <span class="pagination pagination__delimiter"> // </span>
            <span class="pagination pagination__next"> 007 </span>
        </div>
        <button type="button" class="justify-content-end button__nav button__nav--right">
            Next Page <i class="fa fa-chevron-right ml-3" aria-hidden="true"></i>
        </button>
    </div>
</div>


@endsection