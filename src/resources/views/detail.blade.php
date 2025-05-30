@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('detail.css') }}" />
@endsection

@section('content')
<article class="content__main">
  <!-- <form action="" method="post"> -->
    <!-- @csrf -->
    <section class="upper">
      <div class="image">
        <p><span class="image__title">商品一覧</span>>キウイ</p>
        <img class="image__file" src="{{ asset('storage/kiwi.png') }}" alt="kiwi"> 
        <button class="image__button">ファイルを選択</button>
        <span class="image__name">image01.png</span>
      </div>
      <div class="detail">
        <p class="detail__title">商品名</p>
        <input class="detail__input" type="text" name="name" placeholder="商品名を入力">
        <p class="detail__title">値段</p>
        <input class="detail__input" type="text" name="price" placeholder="値段を入力">
        <p class="detail__title">季節</p>
        <input type="radio" name="season" value="spring">春
        <input class="detail__radio" type="radio" name="season" value="summer">夏
        <input class="detail__radio" type="radio" name="season" value="autom">秋
        <input class="detail__radio" type="radio" name="season" value="winter">冬
      </div>
    </section>
    <section class="explain">
      <p class="explain__title">商品説明</p>
      <textarea class="explain__text" name="explain" cols="85" rows="8" placeholder="商品の説明を入力"></textarea>
      <div class="explain__button--area">
        <a href="/products"><button class="button__return">戻る</button></a>
        <button class="button__save">変更を保存</button>
        <img class="button__delete" src="{{ asset('storage/trash.png') }}" alt="trash" width="40" height="40">
      </div>
    </section>
  <!-- </form> -->
</article>
@endsection