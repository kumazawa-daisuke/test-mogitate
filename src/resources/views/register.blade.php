@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('register.css') }}" />
@endsection

@section('content')
<article class="content__main">
  <!-- <form action="products/register" method="post"> -->
  <!-- @csrf -->
    <h2 class="content__title">商品登録</h2>
    商品名<span class="content__required">必須</span>
    <input class="content__input" type="text" name="name" placeholder="商品名を入力">
    値段<span class="content__required">必須</span>
    <input class="content__input" type="text" name="price" placeholder="値段を入力">
    商品画像<span class="content__required">必須</span>
    <div>
      <button class="content__button">ファイルを選択</button>
    </div>
    <div>
      季節<span class="content__required">必須</span>
      <span class="content__choice">複数選択可</span>
    </div>
    <div>
      <input type="radio" name="season" value="spring">春
      <input class="content__radio" type="radio" name="season" value="summer">夏
      <input class="content__radio" type="radio" name="season" value="autom">秋
      <input class="content__radio" type="radio" name="season" value="winter">冬
    </div>
    商品説明<span class="content__required">必須</span>
    <textarea class="explain__text" name="explain" cols="85" rows="8" placeholder="商品の説明を入力"></textarea>
    <div class="explain__button--area">
      <a href="/products"><button class="button__return">戻る</button></a>
      <button class="button__save">登録</button>
    </div>
  <!-- </form> -->
</article>
@endsection