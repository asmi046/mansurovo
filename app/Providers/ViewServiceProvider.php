<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\View;
use App\Models\Option;
use DB;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*', function ($view) {
            // if (DB::connection()->getDatabaseName())  {
                $all_options = Option::all();

                $opt = [];
                $opt_json = [];

                foreach ($all_options as $otion) {
                    $opt[$otion['name']] = $otion['value'];
                    $opt_json[$otion['name']] = $otion['value_json'];
                }
                View::share('options', $opt);
                View::share('options_json', $opt_json);

            // }
        });
    }
}
