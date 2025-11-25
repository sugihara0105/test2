@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css')}}">
@endsection

@section('content')
<div class="register-form">
  <h2 class="register-form__heading">商品登録</h2>
  <div class="register-form__inner">
    <form action="/register" method="post">
      @csrf
      <div class="register-form__group">
        <label class="register-form__label" for="name">
          商品名<span class="register-form__required">必須</span>
        </label><br>
        <input class="register-form__input" type="text" name="name" id="name" value="{{ old('name') }}" placeholder="商品名を入力">
        <div class="register-form__error-message">
          @error('name')
          {{ $message }}
          @enderror
        </div>
      </div>

      <div class="register-form__group">
        <label class="register-form__label" for="price">
          値段<span class="register-form__required">必須</span>
        </label><br>
        <input class="register-form__input" type="text" name="price" id="price" value="{{ old('price') }}" placeholder="値段を入力">
        <div class="register-form__error-message">
          @error('price')
          {{ $message }}
          @enderror
        </div>
      </div>
      
      <div class="register-form__group">
        <label class="register-form__label" for="image">
          商品画像<span class="register-form__required">必須</span>
        </label><br>
        <input class="register-form__input-image" type="file" name="image" id="image" value="{{ old('image') }}">
        <div class="register-form__error-message">
          @error('image')
          {{ $message }}
          @enderror
        </div>
      </div>

      <div class="register-form__group">
        <label class="register-form__label" for="name">
          季節<span class="register-form__required">必須</span><span class="register-form__select">複数選択可</span>
        </label>
        <div class="register-form__select-inner">
            <input type="checkbox" name="name[]" id="spring" value="春">
            <label for="spring">春</label>
            <input type="checkbox" name="name[]" id="summer" value="夏">
            <label for="summer">夏</label>
            <input type="checkbox" name="name[]" id="autumn" value="秋">
            <label for="autumn">秋</label>
            <input type="checkbox" name="name[]" id="winter" value="冬">
            <label for="winter">冬</label>
            </div>
        <div class="register-form__error-message">
          @error('name')
          {{ $message }}
          @enderror
        </div>
      </div>

      <div class="register-form__group">
        <label class="register-form__label" for="description">
          商品説明<span class="register-form__required">必須</span>
        </label><br>
        <textarea class="register-form__textarea" name="description" id="" cols="30" rows="10" placeholder="商品の説明を入力">{{ old('description') }}</textarea>
        <div class="register-form__error-message">
          @error('description')
          {{ $message }}
          @enderror
        </div>
      </div>

    <div class="register-form__btn-wrapper">
      <a href="/products" class="register-form__back-link">戻る</a>
      <input class="register-form__btn btn" type="submit" value="登録">
    </form>
    </div>
  </div>
</div>
@endsection