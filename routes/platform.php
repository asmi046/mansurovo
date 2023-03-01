<?php

declare(strict_types=1);

use App\Orchid\Screens\Examples\ExampleCardsScreen;
use App\Orchid\Screens\Examples\ExampleChartsScreen;
use App\Orchid\Screens\Examples\ExampleFieldsAdvancedScreen;
use App\Orchid\Screens\Examples\ExampleFieldsScreen;
use App\Orchid\Screens\Examples\ExampleLayoutsScreen;
use App\Orchid\Screens\Examples\ExampleScreen;
use App\Orchid\Screens\Examples\ExampleTextEditorsScreen;
use App\Orchid\Screens\PlatformScreen;
use App\Orchid\Screens\Role\RoleEditScreen;
use App\Orchid\Screens\Role\RoleListScreen;
use App\Orchid\Screens\User\UserEditScreen;
use App\Orchid\Screens\User\UserListScreen;
use App\Orchid\Screens\User\UserProfileScreen;
use Illuminate\Support\Facades\Route;
use Tabuna\Breadcrumbs\Trail;

use App\Orchid\Screens\Category\CategoryCreateScreen;
use App\Orchid\Screens\Category\CategoryEditScreen;
use App\Orchid\Screens\Category\CategoryListScreen;

use App\Orchid\Screens\Vacancy\VacancyCreateScreen;
use App\Orchid\Screens\Vacancy\VacancyEditScreen;
use App\Orchid\Screens\Vacancy\VacancyListScreen;

use App\Orchid\Screens\Product\ProductCreateScreen;
use App\Orchid\Screens\Product\ProductEditScreen;
use App\Orchid\Screens\Product\ProductListScreen;

use App\Orchid\Screens\Options\OptionsList;
use App\Orchid\Screens\Options\EditOptions;

use App\Orchid\Screens\News\NewsCreateScreen;
use App\Orchid\Screens\News\NewsEditScreen;
use App\Orchid\Screens\News\NewsListScreen;

/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the need "dashboard" middleware group. Now create something great!
|
*/

// Опции
Route::screen('/options', OptionsList::class)
    ->name('platform.options')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.index')
        ->push(__('Опции'), route("platform.options")));

Route::screen('/options/{id}/edit', EditOptions::class)
    ->name('platform.options_edit')->breadcrumbs(fn (Trail $trail, $id) => $trail
    ->parent('platform.options')
    ->push(__('Редактирование опции'), route('platform.options_edit', $id)));

// Категории
Route::screen('/categories', CategoryListScreen::class)
    ->name('platform.category')->breadcrumbs(fn (Trail $trail) => $trail
    ->parent('platform.index')
    ->push(__('Категории товаров'), route('platform.category')));

Route::screen('/categories/{id}/edit', CategoryEditScreen::class)
    ->name('platform.category_edit')->breadcrumbs(fn (Trail $trail, $id) => $trail
    ->parent('platform.category')
    ->push(__('Редактирование категории'), route('platform.category_edit', $id)));

Route::screen('/categories/create', CategoryCreateScreen::class)
    ->name('platform.category_create')->breadcrumbs(fn (Trail $trail) => $trail
    ->parent('platform.category')
    ->push(__('Добавление категории'), route('platform.category_create')));


// Товары
Route::screen('/products', ProductListScreen::class)
    ->name('platform.product')->breadcrumbs(fn (Trail $trail) => $trail
    ->parent('platform.index')
    ->push(__('Товары'), route('platform.product')));

Route::screen('/products/{id}/edit', ProductEditScreen::class)
    ->name('platform.product_edit')->breadcrumbs(fn (Trail $trail, $id) => $trail
    ->parent('platform.product')
    ->push(__('Редактирование товара'), route('platform.product_edit', $id)));

Route::screen('/products/create', ProductCreateScreen::class)
    ->name('platform.product_create')->breadcrumbs(fn (Trail $trail) => $trail
    ->parent('platform.product')
    ->push(__('Добавление товара'), route('platform.product_create')));

// Вакансии
Route::screen('/vacancy', VacancyListScreen::class)
    ->name('platform.vacancy')->breadcrumbs(fn (Trail $trail) => $trail
    ->parent('platform.index')
    ->push(__('Вакансии'), route('platform.vacancy')));

Route::screen('/vacancy/{id}/edit', VacancyEditScreen::class)
    ->name('platform.vacancy_edit')->breadcrumbs(fn (Trail $trail, $id) => $trail
    ->parent('platform.vacancy')
    ->push(__('Редактирование вакансии'), route('platform.vacancy_edit', $id)));

Route::screen('/vacancy/create', VacancyCreateScreen::class)
    ->name('platform.vacancy_create')->breadcrumbs(fn (Trail $trail) => $trail
    ->parent('platform.vacancy')
    ->push(__('Добавление вакансии'), route('platform.vacancy_create')));


// Новости
Route::screen('/news', NewsListScreen::class)
    ->name('platform.news')->breadcrumbs(fn (Trail $trail) => $trail
    ->parent('platform.index')
    ->push(__('Новости'), route('platform.news')));

Route::screen('/news/{id}/edit', VacancyEditScreen::class)
    ->name('platform.news_edit')->breadcrumbs(fn (Trail $trail, $id) => $trail
    ->parent('platform.news')
    ->push(__('Редактирование новости'), route('platform.news_edit', $id)));

Route::screen('/news/create', NewsCreateScreen::class)
    ->name('platform.news_create')->breadcrumbs(fn (Trail $trail) => $trail
    ->parent('platform.news')
    ->push(__('Добавление новости'), route('platform.news_create')));





// Main
Route::screen('/main', PlatformScreen::class)
    ->name('platform.main');

// Platform > Profile
Route::screen('profile', UserProfileScreen::class)
    ->name('platform.profile')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.index')
        ->push(__('Profile'), route('platform.profile')));

// Platform > System > Users
Route::screen('users/{user}/edit', UserEditScreen::class)
    ->name('platform.systems.users.edit')
    ->breadcrumbs(fn (Trail $trail, $user) => $trail
        ->parent('platform.systems.users')
        ->push(__('User'), route('platform.systems.users.edit', $user)));

// Platform > System > Users > Create
Route::screen('users/create', UserEditScreen::class)
    ->name('platform.systems.users.create')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.systems.users')
        ->push(__('Create'), route('platform.systems.users.create')));

// Platform > System > Users > User
Route::screen('users', UserListScreen::class)
    ->name('platform.systems.users')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.index')
        ->push(__('Users'), route('platform.systems.users')));

// Platform > System > Roles > Role
Route::screen('roles/{role}/edit', RoleEditScreen::class)
    ->name('platform.systems.roles.edit')
    ->breadcrumbs(fn (Trail $trail, $role) => $trail
        ->parent('platform.systems.roles')
        ->push(__('Role'), route('platform.systems.roles.edit', $role)));

// Platform > System > Roles > Create
Route::screen('roles/create', RoleEditScreen::class)
    ->name('platform.systems.roles.create')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.systems.roles')
        ->push(__('Create'), route('platform.systems.roles.create')));

// Platform > System > Roles
Route::screen('roles', RoleListScreen::class)
    ->name('platform.systems.roles')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.index')
        ->push(__('Roles'), route('platform.systems.roles')));

// Example...
Route::screen('example', ExampleScreen::class)
    ->name('platform.example')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.index')
        ->push('Example screen'));

Route::screen('example-fields', ExampleFieldsScreen::class)->name('platform.example.fields');
Route::screen('example-layouts', ExampleLayoutsScreen::class)->name('platform.example.layouts');
Route::screen('example-charts', ExampleChartsScreen::class)->name('platform.example.charts');
Route::screen('example-editors', ExampleTextEditorsScreen::class)->name('platform.example.editors');
Route::screen('example-cards', ExampleCardsScreen::class)->name('platform.example.cards');
Route::screen('example-advanced', ExampleFieldsAdvancedScreen::class)->name('platform.example.advanced');

//Route::screen('idea', Idea::class, 'platform.screens.idea');
