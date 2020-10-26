@section('nav')
<nav>
    <!-- アイテム追加 -->
    <div class="form-group">
        <a class="btn btn-primary btn-block" href="add" role="button">アイテム追加</a>
    </div>
    <!-- 並び替え -->
    <div class="form-group">
        <select class="form-control" name="ordering" onChange="location.href=value;">
            <option>並び替え</option>
            <option value="price_asc">安い順</option>
            <option value="price_desc">高い順</option>
            <option value="buy_desc">購入日が新しい順</option>
            <option value="buy_asc">購入日が古い順</option>
        </select>
    </div>
    <!-- キーワードで探す -->
    <form action="" method="get">
        @csrf
        <div class="input-group">
            <input type="text" class="form-control" name="keyword" placeholder="アイテム検索">
            <span class="input-group-btn">
                <button type="submit" class="btn btn-primary">検索</button>
            </span>
        </div>
    </form>
    <!-- その他機能 -->
    <div class="form-group">
        <select class="form-control" name="other_functions" onChange="location.href=value;">
            <option>その他機能</option>
            <option value="random_coordinate">ランダムコーデ</option>
            <option value="lucky_color">ラッキーカラー</option>
        </select>
    </div>
    <!-- 絞り込み -->
    <form action="" method="get" class="detail_search">
        @csrf
        <h3>詳細検索</h3>
        <!-- シチュエーション -->
        <div class="form-group">
            <label class="control-label">シチュエーション</label>
            <select class="form-control" name="situation">
                <option value="">すべて</option>
                <option value="casual">カジュアル</option>
                <option value="formal">フォーマル</option>
                <option value="loungewear">ホーム</option>
                <option value="sports">スポーツ</option>
                <option value="leisure">レジャー</option>
            </select>
        </div>
        <!-- ジャンル -->
        <div class="form-group">
            <label class="control-label">ジャンル</label>
            <select class="form-control" name="genre">
                <option value="">すべて</option>
                <option value="soccer">サッカー</option>
                <option value="baseball">野球</option>
                <option value="basketball">バスケットボール</option>
                <option value="athletics">陸上</option>
                <option value="swim">水泳</option>
                <option value="tennis">テニス</option>
                <option value="futsal">フットサル</option>
            </select>
        </div>
        <!-- カテゴリー -->
        <div class="form-group">
            <label class="control-label">ジャンル</label>
            <select class="form-control" name="category">
                <option value="">すべて</option>
                <option value="tops">トップス</option>
                <option value="jacket">ジャケット</option>
                <option value="vest">ベスト</option>
                <option value="hat">帽子</option>
                <option value="pants">パンツ</option>
                <option value="necktie">ネクタイ</option>
                <option value="gloves">グローブ</option>
                <option value="under_wear">下着</option>
                <option value="socks">靴下</option>
                <option value="shoes">シューズ</option>
                <option value="bag">バッグ</option>
                <option value="watch">時計</option>
                <option value="accessory">アクセサリー</option>
                <option value="item">アイテム</option>
                <option value="swim_wear">水泳着</option>
                <option value="goggles">ゴーグル</option>
                <option value="swim_cap">水泳帽</option>
                <option value="other">その他</option>
                <option value="racket">ラケット</option>
                <option value="bat">バット</option>
                <option value="ball">ボール</option>
                <option value="spike">スパイク</option>
            </select>
        </div>
        <!-- シーズン -->
        <div class="form-group">
            <label class="control-label">シーズン</label>
            <select class="form-control" name="season">
                <option value="">すべて</option>
                <option value="春">春</option>
                <option value="夏">夏</option>
                <option value="秋">秋</option>
                <option value="冬">冬</option>
            </select>
        </div>
        <!-- ウェザー -->
        <div class="form-group">
            <label class="control-label">ウェザー</label>
            <select class="form-control" name="weather">
                <option value="">すべて</option>
                <option value="晴れ">晴れ</option>
                <option value="曇り">曇り</option>
                <option value="雨">雨</option>
                <option value="雪">雪</option>
            </select>
        </div>
        <!-- サイズ -->
        <div class="form-group">
            <label class="control-label">サイズ</label>
            <select class="form-control" name="size">
                <option value="">すべて</option>
                <option value="cloth"></option>
                <option value="shoes"></option>
            </select>
        </div>
        <!-- 送信 -->
        <div class="button-box">
            <button class="btn btn-clear">クリア</button>
            <button class="btn btn-primary btn-submit">送信</button>
        </div>
    </form>
</nav>
@endsection