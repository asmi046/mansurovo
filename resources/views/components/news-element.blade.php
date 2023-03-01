<div class="news-agro__column">
    <div class="news-agro__card">
        <a href="{{route('newspage', $item->slug)}}" class="news-agro__card-img">
            <img src="{{$item->thumb}}" alt="">
        </a>
        <div class="news-agro__card-descp">
            <span class="news-agro__card-descp-date">{{date("d.m.Y", strtotime($item->news_data))}}</span>
            <h3 class="news-agro__card-descp-title">
                {{$item->title}}
            </h3>

            <div class="quote">
                {{$item->quote}}
            </div>
            <a href="{{route('newspage', $item->slug)}}" class="news-agro__card-descp-btn">Подробнее...</a>
        </div>
    </div>
</div>
