<header id="header" class="header">
	<x-search></x-search>
    <div class="header__container _container">

		<div class="header__row d-flex">

			<ul class="menu-list header__menu-list d-flex">
				<x-menu-puncts></x-menu-puncts>
			</ul>

			<a href="{{route('home')}}" class="logo-icon header__logo"></a>

			<div class="header__navigation">

				<a href="#" class="header__conf-policy">Политика конфиденциальности</a>

				<button class="header__search-icon search_open"></button>

				<div class="header__icon-menu">
					<div class="header__icon-menu-text">Меню</div>
					<div class="icon-menu toggle_menu" aria-label="Бургер меню">
						<span></span>
						<span></span>
						<span></span>
					</div>
				</div>

			</div>

		</div>
</header>
<x-menu></x-menu>
