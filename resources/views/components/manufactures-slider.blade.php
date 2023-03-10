<section id="directions-agro" class="directions-agro section sectionOh">
    <div class="_container">

        <div class="directions-agro__wrap d-flex">

            <div class="directions-agro__column directions-agro__column-left">
                <h6 class="directions-agro__title">ОСНОВНЫЕ НАПРАВЛЕНИЯ ДЕЯТЕЛЬНОСТИ</h6>

                <div class="directSlDescp-pagination-fraction"></div>

                <div class="directions-agro__slDescp directSlDescp slider">

                    <div class="swiper-wrapper">

                        @foreach ($works as $item)

                            <div class="directions-agro__slDescp-slide slider__slide swiper-slide">
                                <h2 class="directions-agro__slDescp-slide-title">{{$item->title}}</h2>
                                <p class="directions-agro__slDescp-slide-subtitle">
                                    {!!$item->quote!!}
                                </p>
                                <a href="{{route('home').'/'.$item->lnk}}" class="directions-agro__slDescp-slide-link btn">Подробнее</a>
                            </div>

                        @endforeach

                    </div>

                </div>

                <div class="directions-agro__buttonBlock">
                    <button class="swiper-button swiper-button-prev"></button>
                    <button class="swiper-button swiper-button-next"></button>
                </div>

            </div>

            <div class="directions-agro__column directions-agro__column-right">

                <div class="directions-agro__slImg directSlImg slider ">
                    <div class="swiper-wrapper">
                        @foreach ($works as $item)
                            <div class="directions-agro__slImg-slide slider__slide swiper-slide">
                                <picture>
                                    <img loading="lazy" src="{{$item->img}}" alt="{{$item->title}}">
                                </picture>
                            </div>
                        @endforeach


                    </div>
                </div>

            </div>

        </div>

    </div>
</section>
