@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/product.css')}}">
@endsection

@section('content')
<div class="products-form">
  <div class="products-form__heading">
    <h2 class="products-form__title">商品一覧</h2>
    <a href="/products/register" class="products-form__register-btn">+ 商品を追加</a>
  </div>
  <div class="products-form__inner">
    <div class="products-form__sidebar">
      あ
    </div>
    <div class="products-form__main">
      @foreach($products as $products)
      <div class="products-card">
        <div class="products-card__img-wrapper">
          <img class="products-card__img" src="{{$products->image}}" alt="商品画像">
        </div>
        <div class="products-card__body">
          <p class="products-card__name">{{$products->name}}</p>
          <p class="products-card__price">{{$products->price}}</p>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>

@endsection