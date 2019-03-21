<?php

namespace App\Providers;

use App\Ayar;
/*use App\Kategori;*/
use App\Menu;
use App\Sayfa;
use App\Yazi;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
    public function boot()
    {
        Schema::defaultStringLength(191);
        $ayar = Ayar::find(1);
        $menuler = Menu::where('menu_ust_id','=','0')->get();
        $footericerikler = Yazi::orderby('created_at','desc')->take(6)->get();


        view::share([
            'ayar' =>$ayar,
            'menuler' =>$menuler,
            'footericerikler' =>$footericerikler,

        ]);
    }
}
