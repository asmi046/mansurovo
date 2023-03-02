<div class="product_item">
    <div class="img_blk">
        <img src="{{$item->img1}}" alt="">
    </div>
    <div class="text_blk">
        <h2>{{$item->title}}</h2>
        @if (!empty($item->quote))
            <p>{{$item->quote}}</p>
        @else
            <p>{{mb_strimwidth(strip_tags($item->description), 0, 70, '...')}}</p>
        @endif

        <a href="{{route('products_page', [$categorySlug, $item->slug])}}" class="btn">Подробнее</a>
    </div>
</div>
