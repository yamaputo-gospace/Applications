@section('navbar')
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container" style="height: 80px;">
        <a class="navbar__brand navbar__mainLogo" href="/"><img src="{{ asset('storage/images/logo.png') }}" alt="ロゴ" style="width: 200px; height:auto; "></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-md-auto align-items-center">
            <li>
              <a class="btn btn-primary" href="/posts/new">投稿</a>
            </li>
            <li>
              <a class="nav-link commonNavIcon profile-icon" href="/users/{{ Auth::user()->id }}"><img class="round-img2" src="{{ asset('storage/images/blank_profile.png') }}" style="width: 30px; height:30; border-radius:50%;"></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
@endsection
