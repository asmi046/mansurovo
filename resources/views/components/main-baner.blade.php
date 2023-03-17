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
                                                    <h3 class="slider-bg__card-title">{{$item->value4}}</h3>
                                                    <p class="slider-bg__card-subtitle">
                                                        {{$item->comment4}}
                                                    </p>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            @endforeach

						</div>

                        <div class="nav_btn_wriper">
                            <button class="main_bn_btn main_btn_prev main_swiper-button-prev"></button>
                            <button class="main_bn_btn main_btn_next main_swiper-button-next"></button>
                        </div>
					</div>
					<div class="slider-bg-pagination-fraction"></div>
				</div>

			</section>
