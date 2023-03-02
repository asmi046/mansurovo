<div class="carieer_blk">
    <div class="career_heder">
        <div class="text">
            <h2>{{$item->name}}</h2>
            <div class="more">
                <span>Площадка: {{$item->place}}</span>
                <span>График: {{$item->grafic}}</span>
                @if ($item->price ==0)
                    <span>Зарплата: по итогам собеседования</span>
                @else
                    <span>Зарплата: от {{$item->price}} р.</span>
                @endif

            </div>
        </div>
        <div class="control">
            <a href="" class="flip_control"></a>
        </div>
    </div>

    <div class="career_body">
        <div class="cbb obiaz">
            <h3>Обязанности</h3>
            {!! $item->ob !!}
        </div>

        <div class="cbb treb">
            <h3>Требования</h3>
            {!! $item->treb !!}
        </div>

        <div class="cbb ysl">
            <h3>Условия</h3>
            {!! $item->usl !!}
        </div>

    </div>
</div>
