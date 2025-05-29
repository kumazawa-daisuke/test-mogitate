<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>mogitate</title>
  <link rel="stylesheet" href="{{ asset('sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('products.css') }}" />
</head>

<body>
  <header class="header">
    <h1 class="header__inner">mogitate
</h1>
  </header>

  <main class="main">
    <article class="content__head">
      <h2 class="content__head--title">商品一覧</h2>
      <a href="{{ route('products.register')}}">
        <button class="content__head--button">+商品を追加</button>
      </a>
    </article>
    <article class="content__main">
      <aside class="sidebar">
        <input class="sidebar__search" type="text" name="name" placeholder="商品名で検索">
        <button class="sidebar__button">
          検索
        </button>
        <h3 class="sidebar__value--title">
          価格順で表示
        </h3>
        <select class="sidebar__value--search" name="value">
          <option value="high">高い順に表示</option>
          <option value="low">安い順に表示</option>
        </select>
      </aside>
      <article class="content__innner">
        @foreach($products as $product)
        <div class="card">
          <a href="/products/{{$product->id}}"><img class="card__img" src="{{ asset('storage/'.$product->image) }}" alt="{{$product->name}}"></a>
          <div class="card__title">
            <p class="fruit">{{$product->name}}</p>
            <p class="price">￥{{$product->price}}</p>
          </div>
        </div>
        @endforeach
        <!-- {{ $products->links() }} -->
      </article>
    </article>
  </main>
  {{ $products->links() }}
</body>

</html>