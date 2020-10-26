<!DOCTYPE html>
<html lang="en">
<head>
  <script src="{{ asset('js/app.js') }}" defer></script>
  <link rel="shortcut icon" href="{{ asset('/favicon.png') }}">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('style/add_style.css') }}">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cloth_Lists</title>
</head>
<body>
  <header>
    <div class="header-box">
      <div class="header-logo">
        Cloth Lists
      </div>
      <div class="header-mypage">
        <a href="">
          <img class="header-user-icon" src="{{ asset('/user-default-icon.png') }}" alt="デフォルトユーザーアイコン">
            マイページ
        </a>
      </div>
    </div>
  </header>
  @isset($filesizeover)
  <div class="alert alert-warning alert-dismissible fade show">
    <strong>Warning!</strong> 4Gより小さいサイズのファイルを選択してください。
    <button type="button" class="close" data-dismiss="alert">&times;</button>
  </div>
  @endisset
  <main>
    <div class="l-content">
      <form action="/add" method="post" enctype="multipart/form-data">
        @csrf
        <!-- 画像ファイル -->
        <div class="form-group">
          <label for="inputFile">画像(Picture)</label>
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="inputFile" name="imageFile" accept="image/jpeg,image/gif,image/png">
            <label class="custom-file-label" for="inputFile" data-browse="参照">ファイルを選択(ここにドロップすることもできます)</label>
          </div>
        </div>
        <!-- メンズ・レディース -->
        <div class="form-group">
          <label class="control-label">メンズ・レディース</label>
          <div class="radio">
            <label><input type="radio" name="gender" value="mens" checked="checked">メンズ</label>
            <label><input type="radio" name="gender" value="ladies">レディース</label>
          </div>
        </div>
        <!-- シチュエーション -->
        <div class="form-group">
          <label class="control-label">シチュエーション</label>
          <div class="radio">
            <label><input type="checkbox" name="casual" value="1" checked="checked">カジュアル</label>
            <label><input type="checkbox" name="suit" value="1">フォーマル</label>
            <label><input type="checkbox" name="loungewear" value="1">ホームウェア</label>
            <label><input type="checkbox" name="sports" value="1">スポーツ</label>
            <label><input type="checkbox" name="leisure" value="1">レジャー</label>
          </div>
        </div>
        <!-- ジャンル -->
        <style>/*
          <div class="form-group">
            <label class="control-label">ジャンル</label>
            <select class="form-control" name="genre">
              <option value="swim">水泳</option>
              <option value="soccer">サッカー</option>
              <option value="baseball">野球</option>
              <option value="futsal">フットサル</option>
              <option value="tennis">テニス</option>
              <option value="basketball">バスケットボール</option>
              <option value="athletics">陸上</option>
          
            </select>
          </div>
        */</style>
        <!-- カテゴリー -->
        <div class="form-group">
          <label class="control-label">カテゴリー</label>
          <select class="form-control" name="category">
            <option value="tops">トップス</option>
            <option value="jacket">ジャケット</option>
            <option value="vest">ベスト</option>
            <option value="pants">パンツ</option>
            <option value="socks">ソックス</option>
            <option value="gloves">グローブ</option>
            <option value="shoes">シューズ</option>
            <option value="hat">帽子</option>
            <option value="necktie">ネクタイ</option>
            <option value="swim_wear">スイムパンツ</option>
            <option value="swim_cap">スイムキャップ</option>
            <option value="goggles">ゴーグル</option>
            <option value="under_wear">下着</option>
            <option value="bag">バッグ</option>
            <option value="watch">時計</option>
            <option value="accessory">アクセサリー</option>
            <option value="item">アイテム</option>
            <option value="other">その他</option>
          </select>
        </div>
        <style>/*
          <!-- スーツ -->
          <div class="form-group">
            <select class="form-control" name="suit_genre>
              <option value="jacket">スーツジャケット</option>
              <option value="tops">スーツシャツ</option>
              <option value="vest">スーツベスト</option>
              <option value="socks">ソックス</option>
              <option value="pants">スラックス</option>
              <option value="necktie">スラックス</option>
              <option value="item">スラックス</option>
              <option value="watch">スラックス</option>
              <option value="other">その他</option>
            </select>
          </div>
          <!-- スポーツ -->
          <div class="form-group">
            <select class="form-control" name="sports_genre">
              <option value=""jacket>ジャケット</option>
              <option value="tops">ウェア</option>
              <option value="pants">パンツ</option>
              <option value="socks">ソックス</option>
              <option value="shoes">シューズ</option>
              <option value="item">アイテム</option>
              <option value="other">その他</option>
            </select>
          </div>
          <!-- 水着 -->
          <div class="form-group">
            <select class="form-control" name="swimsuit_genre>
              <option value="swim_wear">スイムパンツ</option>
              <option value="swim_cap">キャップ</option>
              <option value="swim_goggles">ゴーグル</option>
              <option value="other">その他</option>
            </select>
          </div>
          <!-- レジャー -->
          <div class="form-group">
            <select class="form-control" name="leisure_genre>
              <option value="jacket">ジャケット</option>
              <option value="tops">トップス</option>
              <option value="pants">パンツ</option>
              <option value="socks">ソックス</option>
              <option value="shoes">シューズ</option>
              <option value="item">アイテム</option>
              <option value="other">その他</option>
            </select>
          </div>
        */</style>
        <!-- ブランド -->
        <div class="form-group">
          <label class="control-label">ブランド名</label>
          <input class="form-control" type="text" name="brand">
        </div>
        <style>/*
          <!-- シューズサイズ(メンズ) -->
          <div class="form-group">
            <label class="control-label">サイズを選択</label>
            <div class="radio">
              @for($i=23; $i<=30; $i=$i+0.5)
                <label><input type="checkbox" name="radio">{{$i}}</label>
              @endfor
            </div>
          </div>
          <!-- シューズサイズ(レディース) -->
          <div class="form-group">
            <label class="control-label">サイズを選択</label>
            <div class="radio">
              @for($i=22; $i<=27; $i=$i+0.5)
                <label><input type="checkbox" name="radio">{{$i}}</label>
              @endfor
            </div>
          </div>
        */</style>
        <!-- 服サイズ(メンズ) -->
        <div class="form-group">
          <label class="control-label">服サイズ(メンズ)</label>
          <select class="form-control" name="cloth_size">
            <option value="under_XXS">XXS以下</option>
            <option value="XS(SS)">XS(SS)</option>
            <option value="S">S</option>
            <option value="M" selected>M</option>
            <option value="L">L</option>
            <option value="XL(LL)">XL(LL)</option>
            <option value="2XL(3L)">2XL(3L)</option>
            <option value="3XL(4L)">3XL(4L)</option>
            <option value="over_4XL(5L)">4XL(5L)以上</option>
            <option value="FREE SIZE">FREE SIZE</option>
          </select>
        </div>
        <style>/*
          <!-- 服サイズ(レディース) -->
          <div class="form-group">
            <label class="control-label">服サイズ(レディース)</label>
            <select class="form-control" name="cloth_size">
              <option value="under_XXS">XXS以下</option>
              <option value="XS(SS)">XS(SS)</option>
              <option value="S">S</option>
              <option value="M">M</option>
              <option value="L">L</option>
              <option value="XL(LL)">XL(LL)</option>
              <option value="2XL(3L)">2XL(3L)</option>
              <option value="3XL(4L)">3XL(4L)</option>
              <option value="over_4XL(5L)">4XL(5L)以上</option>
              <option value="FREE SIZE">FREE SIZE</option>
            </select>
          </div>
        */</style>
        <!-- プライス -->
        <div class="form-group">
          <label class="control-label">値段(円)</label>
          <input class="form-control" type="text" name="price">
        </div>
        <!-- 購入した年 -->
        <div class="form-group">
          <label class="control-label">購入した年</label>
          <select class="form-control" name="buy_year">
            @for($i=2020; $i>=1900; $i--)
            <option value="{{$i}}">{{$i}}</option>
            @endfor
          </select>
        </div>
        <!-- 購入した月 -->
        <div class="form-group">
          <label class="control-label">購入した月</label>
          <select class="form-control" name="buy_month">
            @for($i=1; $i<=12; $i++)
            <option value="{{$i}}">{{$i}}</option>
            @endfor
          </select>
        </div>
        <!-- シーズン -->
        <div class="form-group">
          <label class="control-label">シーズン</label>
          <div class="radio">
            <label><input type="checkbox" name="spring" value="1">春</label>
            <label><input type="checkbox" name="summer" value="1">夏</label>
            <label><input type="checkbox" name="fall" value="1">秋</label>
            <label><input type="checkbox" name="winter" value="1">冬</label>
          </div>
        </div>
        <!-- ウェザー -->
        <div class="form-group">
          <label class="control-label">ウェザー</label>
          <div class="checkbox">
            <label><input type="checkbox" name="sunny" value="1">晴れ</label>
            <label><input type="checkbox" name="cloudy" value="1">曇り</label>
            <label><input type="checkbox" name="rainy" value="1">雨</label>
            <label><input type="checkbox" name="snowy" value="1">雪</label>
          </div>
        </div>
        <!-- 数量 -->
        <div class="form-group">
          <label class="control-label">数</label>
          <select class="form-control" name="quantity">
            @for($i=1; $i<=10; $i++)
              <option value="{{$i}}">{{$i}}</option>
            @endfor
          </select>
        </div>
        <!-- 送信 -->
        <button class="btn btn-default">送信</button>
      </form>
    </div>
  </main>
  <footer>
    <div>
      @Kenichi Yamamoto
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.js"></script>
  <script>
    bsCustomFileInput.init();
  </script>
</body>
</html>