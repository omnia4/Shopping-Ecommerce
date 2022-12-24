<?php

namespace App\Providers;

use App\Models\ItemType;
use App\Models\Contact;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
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
        view()->composer('*',function($view)
        {
            $cartItems = \Cart::getContent();
            $view->with('cartItems',  $cartItems);
        });
        view()->composer('*',function($view)
        {
            $footer = Contact::find(1);
            $view->with('footer',  $footer);
        });


        \App::singleton('contacts', function () {
            $contacts=DB::table('badr_shop')->leftJoin('contacts','contacts.shop_id' ,'=' ,'badr_shop.serial_id')
                ->select('badr_shop.about','badr_shop.telephone','badr_shop.email','contacts.facebook','contacts.twitter','contacts.youtube','contacts.instagram','contacts.google')
                ->first();
            return $contacts;
        });
        \App::singleton('categories', function () {
            $categories=ItemType::where('shop_id','21036')->withCount('products')->with('subCategories')->selection()->get();
            return $categories;
        });
        // view()->composer('*',function($view)
        // {
        //     $categories = ItemType::where('shop_id',21036)->where('category_id' ,0)->with('subCategories')->get();
        //     $view->with('categories', $categories);
        // });
        Paginator::useBootstrap();
    }
}
