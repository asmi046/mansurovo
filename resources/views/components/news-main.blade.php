
			<section id="news-agro" class="news-agro section sectionOh">
				<div class="_container">

					<h2 class="news-agro__title title">Новости нашей компании</h2>

					<div class="news-agro__inner">
                        @foreach ($news as $item)
                            <x-news-element :item="$item"></x-news-element>
                        @endforeach

					</div>

					<a href="{{route('news')}}" class="news-agro__button btn">Смотреть все новости</a>

				</div>
			</section>
