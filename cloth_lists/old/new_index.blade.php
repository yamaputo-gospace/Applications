<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="shortcut icon" href="{{ asset('/favicon.png') }}">
	<link rel="stylesheet" href="{{ asset('style/new_style.css') }}">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cloth Lists</title>
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
	<nav>
		<div>
			並び替え
		</div>
		キーワードで探す
		<form action="">
			<input type="text" name="key-word" value="">
			<input type="submit">
		</form>
		ランダムコーデ
		<form action="">
			<select name="" id=""></select>
			<input type="submit">
		</form>
		<div class="grouping-container">
			グルーピング
		<form action="">
			@csrf
			<div class="grouping-container-box">
			<span>ジャンルを選択する</span>
			<select name="" id="">
				<option value="">すべて</option>
				<option value="">カジュアル</option>
				<option value="">ビジネス</option>
			</select>
			</div>
			<div class="grouping-container-box">
			<span>サイズ</span>
			<select name="" id="">
				<option value="">すべて</option>
				<option value="">洋服</option>
				<option value="">シューズ</option>
			</select>
			</div>
			<div class="grouping-container-box">
			シーズン
			<div>
				<input type="checkbox">春
				<input type="checkbox">夏
			</div>
			<div>
				<input type="checkbox">秋
				<input type="checkbox">冬
			</div>
			</div>
			<div class="grouping-container-box">
			ウェザー
			<div>
				<input type="checkbox">晴
				<input type="checkbox">曇
			</div>
			<div>
				<input type="checkbox">雨
				<input type="checkbox">雪
			</div>
			</div>
			<input type="submit" value="クリア">
			<input type="submit" value="完了">
		</form>
		</div>
	</nav>
	<main>
		main
	</main>
	<footer>
		footer
	</footer>
</body>
</html>