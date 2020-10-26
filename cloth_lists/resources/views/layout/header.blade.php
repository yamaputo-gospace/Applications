@section('header')
<header>
    <div class="header-box">
        <div class="header-logo">
            <a href="/">
                <div class="header-logo-icon">
                    <img src="{{ asset('storage/app_images/favicon.png') }}" alt="">                    
                </div>
                <div class="header-logo-description">
                    Cloth Lists
                </div>
            </a>
        </div>
        <div class="header-mypage">
            <a href="">
                <div class="header-logo-icon">
                    <img class="header-user-icon" src="{{ asset('storage/app_images/user-default-icon.png') }}" alt="デフォルトユーザーアイコン">
                </div>
                <div class="header-logo-description">
                    マイページ
                </div>
            </a>
        </div>
    </div>
</header>
@endsection