<!DOCTYPE html>
<html lang="en">
<head>
  <script src=" asset('js/app.js') " defer></script>
  <link rel="shortcut icon" href=" asset('/favicon.png') ">
  <link href=" asset('css/app.css') " rel="stylesheet">
  <link rel="stylesheet" href=" asset('style/add_style.css') ">
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
          <img class="header-user-icon" src=" asset('/user-default-icon.png') " alt="デフォルトユーザーアイコン">
            マイページ
        </a>
      </div>
    </div>
  </header>
  <main>
    <div class="l-content">
      @if($input->genre == "tops")
        ジャンル: トップス
      @elseif($input->genre == "jacket")
        ジャンル: ジャケット
      @elseif($input->genre == "vest")
        ジャンル: ベスト
      @elseif($input->genre == "pants")
        ジャンル: パンツ
      @elseif($input->genre == "socks")
        ジャンル: ソックス
      @elseif($input->genre == "gloves")
        ジャンル: グローブ
      @elseif($input->genre == "shoes")
        ジャンル: シューズ
      @elseif($input->genre == "hat")
        ジャンル: 帽子
      @elseif($input->genre == "suit")
        ジャンル: スーツ
      @elseif($input->genre == "sports")
        ジャンル: スポーツ
      @elseif($input->genre == "swimsuit")
       ジャンル: 水着
      @elseif($input->genre == "leisure")
       ジャンル: レジャー
      @elseif($input->genre == "under_wear")
        ジャンル: 下着
      @elseif($input->genre == "bag")
       ジャンル: バッグ
      @elseif($input->genre == "watch")
        ジャンル: 時計
      @elseif($input->genre == "accessory")
       ジャンル: アクセサリー
      @elseif($input->genre == "other")
        ジャンル: その他
      @endif
    </div>
  </main>
  <footer>
    <div>
      @Kenichi Yamamoto
    </div>
  </footer>
</body>
</html>