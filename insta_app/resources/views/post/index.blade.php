@extends('layouts.app')
@include('navbar')
@include('footer')

@section('content')
@foreach ($posts as $post) 
  <div class="col-md-8 col-md-2 mx-auto">
    <div class="card-wrap">
      <div class="card">
        <div class="card-header align-items-center d-flex">
          <a class="no-text-decoration" href="/users/{{ $post->user->id }}">
            <!-- プロフ写真 -->
            @if ($post->user->profile_photo)
                <img style="width:50px; height:50px; " class="post-profile-icon round-img" src="{{ asset('storage/user_images/' . $post->user->profile_photo) }}"/>
            @else
                <img class="post-profile-icon round-img" src="{{ asset('/images/blank_profile.png') }}"/>
            @endif
          </a>
          <!-- ユーザー名 -->
          <a class="black-color no-text-decoration" title="{{ $post->user->name }}" href="/users/{{ $post->user->id }}">
            <strong>{{ $post->user->name }}</strong>
          </a>
          <!-- 自分の投稿だったら削除できる -->
          @if ($post->user->id == Auth::user()->id)
          	<a class="ml-auto mx-0 my-auto" rel="nofollow" href="/postsdelete/{{ $post->id }}">
              <div class="delete-post-icon">
                <img style="width:20px; height:20px; " class="delete-icon round-img" src="{{ asset('storage/images/delete.png') }}"/>
              </div>
          	</a>
          @endif
        </div>
        <!-- 投稿写真 -->
        <a href="/users/{{ $post->user->id }}">
          <img src="/storage/post_images/{{ $post->id }}.jpg" class="card-img-top" />
        </a>
        <!-- いいね -->
        <div class="card-body">
          <div class="row parts">
            <div id="like-icon-post-{{ $post->id }}">
              @if ($post->likedBy(Auth::user())->count() > 0)
                <a class="loved hide-text" data-remote="true" rel="nofollow" data-method="DELETE" href="/likes/{{ $post->likedBy(Auth::user())->firstOrFail()->id }}"><img style="width: 30px; height:30px;" src="{{asset('storage//images/heart_red.png')}}" alt=""></a>
              @else
                <a class="love hide-text" data-remote="true" rel="nofollow" data-method="POST" href="/posts/{{ $post->id }}/likes"><img style="width: 30px; height:30px;" src="{{asset('storage//images/heart_blank.png')}}" alt=""></a>
              @endif
            </div>
            <a class="comment" href="#"></a>
          </div>
          <div id="like-text-post-{{ $post->id }}">
            @include('post.like_text')
          </div>
          <div>
            <span><strong>{{ $post->user->name }}</strong></span>
            <span>{{ $post->caption }}</span>
          </div>
          <!-- コメント -->
          <div id="comment-post-{{ $post->id }}">
              @include('post.comment_list')
          </div>
            <a class="light-color post-time no-text-decoration" href="/posts/{{ $post->id }}">{{ $post->created_at }}</a>
            <hr>
            <div class="row actions" id="comment-form-post-{{ $post->id }}">
           	  <form class="w-100" id="new_comment" action="/posts/{{ $post->id }}/comments" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="&#x2713;" />
             	  {{csrf_field()}} 
                <input value="{{ Auth::user()->id }}" type="hidden" name="user_id" />
                <input value="{{ $post->id }}" type="hidden" name="post_id" />
                <input class="form-control comment-input border-0" placeholder="コメント ..." autocomplete="off" type="text" name="comment" />
              </form>
            </div>
        </div>
      </div>
    </div>
  </div>
@endforeach
@endsection