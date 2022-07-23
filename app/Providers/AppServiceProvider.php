<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema; //この行を追加
use Illuminate\Support\Facades\URL;    //この行を追加
use Illuminate\Routing\UrlGenerator;//この行を追加


class AppServiceProvider extends ServiceProvider
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
    //bootメソッドを以下に変更
     public function boot(UrlGenerator $url)
    {
        $url->forceScheme('https');
    }
}
