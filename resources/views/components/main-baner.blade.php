<section id="slider-main" class="slider-main">

				<div class="slider-bg-wrap ">

                    <div class="swiper slider-bg">

                        <div class="swiper-wrapper">
                            @foreach ($slides as $item)


                                <div class="slider-bg__slide slider__slide swiper-slide"
                                    style="background-image: url({{$item->img}})"
                                >
                                    <div class="slider-bg__nuar_blk nuar_blk"></div>
                                    <div class="slider-bg__container _container">

                                        <div class="slider-bg__title-block">
                                            <h1 class="slider-bg__title">
                                                {!!$item->title!!}
                                            </h1>
                                            <p class="slider-bg__subtitle">
                                                {!!$item->subtitle!!}
                                            </p>
                                        </div>

                                        <div class="slider-bg__inner">

                                            <div class="slider-bg__column">
                                                <div class="slider-bg__card slider-bg__card_01">
                                                    <h3 class="slider-bg__card-title">{{$item->value1}}</h3>
                                                    <p class="slider-bg__card-subtitle">
                                                        {{$item->comment1}}
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="slider-bg__column">
                                                <div class="slider-bg__card slider-bg__card_02">
                                                    <h3 class="slider-bg__card-title">{{$item->value2}}</h3>
                                                    <p class="slider-bg__card-subtitle">
                                                        {{$item->comment2}}
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="slider-bg__column">
                                                <div class="slider-bg__card slider-bg__card_03">
                                                    <h3 class="slider-bg__card-title">{{$item->value3}}</h3>
                                                    <p class="slider-bg__card-subtitle">
                                                        {{$item->comment3}}
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="slider-bg__column">
                                                <div class="slider-bg__card slider-bg__card_04">
                                                    <h3 class="slider-bg__card-title">{{$item->value3}}</h3>
                                                    <p class="slider-bg__card-subtitle">
                                                        {{$item->comment4}}
                                                    </p>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            @endforeach

{{--
                            <div class="slider-bg__slide slider__slide swiper-slide"
                                style="background-image: url({{asset('img/main/bn2.webp')}})"
                            >
                                <div class="slider-bg__nuar_blk nuar_blk"></div>
                                <div class="slider-bg__container _container">

                                    <div class="slider-bg__title-block">
                                        <h1 class="slider-bg__title">
                                            Агрокомплекс <br>
                                            «Мансурово»
                                        </h1>
                                        <p class="slider-bg__subtitle">
                                            Творчество в сфере агропромышленности <br>
                                            с активным использованием инноваций
                                        </p>
                                    </div>

                                    <div class="slider-bg__inner">

                                        <div class="slider-bg__column">
                                            <div class="slider-bg__card slider-bg__card_01">
                                                <h3 class="slider-bg__card-title">3788 +</h3>
                                                <p class="slider-bg__card-subtitle">
                                                    Голов крупного рогатого <br>
                                                    скота
                                                </p>
                                            </div>
                                        </div>

                                        <div class="slider-bg__column">
                                            <div class="slider-bg__card slider-bg__card_02">
                                                <h3 class="slider-bg__card-title">24 000+</h3>
                                                <p class="slider-bg__card-subtitle">
                                                    Гектара земли в ежегодно <br>
                                                    в обработке
                                                </p>
                                            </div>
                                        </div>

                                        <div class="slider-bg__column">
                                            <div class="slider-bg__card slider-bg__card_03">
                                                <h3 class="slider-bg__card-title">320 +</h3>
                                                <p class="slider-bg__card-subtitle">
                                                    Гектара производственных <br>
                                                    пощадей
                                                </p>
                                            </div>
                                        </div>

                                        <div class="slider-bg__column">
                                            <div class="slider-bg__card slider-bg__card_04">
                                                <h3 class="slider-bg__card-title">220 +</h3>
                                                <p class="slider-bg__card-subtitle">
                                                    Единиц самоходной техники <br>
                                                    крупнейших производителей
                                                </p>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div> --}}

{{--
                            <div class="slider-bg__slide slider__slide swiper-slide"
                                style="background-image: url({{asset('img/main/bn3.webp')}})"
                            >
                                <div class="slider-bg__nuar_blk nuar_blk"></div>
                                <div class="slider-bg__container _container">

                                    <div class="slider-bg__title-block">
                                        <h1 class="slider-bg__title">
                                            Агрокомплекс <br>
                                            «Мансурово»
                                        </h1>
                                        <p class="slider-bg__subtitle">
                                            Творчество в сфере агропромышленности <br>
                                            с активным использованием инноваций
                                        </p>
                                    </div>

                                    <div class="slider-bg__inner">

                                        <div class="slider-bg__column">
                                            <div class="slider-bg__card slider-bg__card_01">
                                                <h3 class="slider-bg__card-title">3788 +</h3>
                                                <p class="slider-bg__card-subtitle">
                                                    Голов крупного рогатого <br>
                                                    скота
                                                </p>
                                            </div>
                                        </div>

                                        <div class="slider-bg__column">
                                            <div class="slider-bg__card slider-bg__card_02">
                                                <h3 class="slider-bg__card-title">24 000+</h3>
                                                <p class="slider-bg__card-subtitle">
                                                    Гектара земли в ежегодно <br>
                                                    в обработке
                                                </p>
                                            </div>
                                        </div>

                                        <div class="slider-bg__column">
                                            <div class="slider-bg__card slider-bg__card_03">
                                                <h3 class="slider-bg__card-title">320 +</h3>
                                                <p class="slider-bg__card-subtitle">
                                                    Гектара производственных <br>
                                                    пощадей
                                                </p>
                                            </div>
                                        </div>

                                        <div class="slider-bg__column">
                                            <div class="slider-bg__card slider-bg__card_04">
                                                <h3 class="slider-bg__card-title">220 +</h3>
                                                <p class="slider-bg__card-subtitle">
                                                    Единиц самоходной техники <br>
                                                    крупнейших производителей
                                                </p>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div> --}}
						</div>

					</div>
					<div class="slider-bg-pagination-fraction"></div>
				</div>

			</section>
