@foreach ($post->comments as $comment) 
  <div class="mb-2">
    <span>
      <strong>
        <a class="no-text-decoration black-color" href="/users/{{ $comment->user->id }}">{{ $comment->user->name }}</a>
      </strong>
    </span>
    <span>{{ $comment->comment }}</span>
    @if ($comment->user->id == Auth::user()->id)
      <a class="delete-comment" data-remote="true" rel="nofollow" data-method="delete" href="/comments/{{ $comment->id }}"><img style="width:10px; hegiht:10px; text-align:right; " src="{{ asset('storage/images/x.png') }}" alt=""></a>
    @endif
  </div>
@endforeach