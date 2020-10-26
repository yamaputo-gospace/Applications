@section('main')
<main>
    <h2>アイテム一覧</h2>
    @foreach( $list as $category => $bundle)
        @continue(count($bundle) === 0)
        @foreach($bundle as $item)
            @if( $loop->first )
                <h3>{{ $categoryList[$category] }}</h3>
                <div class="container">
            @endif
                <a href="/view/?id={{ $item->id }}">
                    <div class="item">
                        <div class="item_image">
                            <img src="{{ asset('storage/item_images/' . $item->img_name) }}" alt="">
                        </div>
                        <div class="item_detail">
                            {{ $item->brand }}
                        </div>
                    </div>
                </a>
            @if( $loop->last )
                </div>
            @endif
        @endforeach
    @endforeach
</main>
@endsection