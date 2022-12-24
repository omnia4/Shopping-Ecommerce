<?php

use App\Http\Controllers\Site\Auth\LoginController;
use App\Http\Controllers\Site\Auth\RegisterController;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\WishListController;
use App\Http\Controllers\Site\FavoriteController;

use App\Http\Controllers\Site\CartController;
use App\Http\Controllers\Site\Auth\PasswordController;
use App\Http\Controllers\Site\CategoryController;
use App\Http\Controllers\Site\SearchController;
use App\Http\Controllers\Site\Usercontroller;
use App\Http\Controllers\ContactController;
use GuzzleHttp\Middleware;
use App\Http\Controllers\FeaturedProductController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Site\RateController;
use App\Http\Controllers\Site\CheckoutController;
use App\Http\Controllers\Site\ItemsController;
use App\Http\Controllers\Site\FooterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|{{trans('main_trans.')}}
*/


Route::group(['prefix' => LaravelLocalization::setLocale()], function () {
    /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/

    Route::get('/', [HomeController::class, 'index'])->name('home');

    Route::group(['prefix' => 'site', 'middleware' => 'auth'], function () {
        Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
        Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist');
        Route::post('/wishlist/{id}', [WishlistController::class, 'addToWishlist'])->name('wish.store');
        Route::post('/removeWislist/{id}', [WishlistController::class, 'removeWishCard'])->name('cardW.remove');

        Route::get('/favorite', [FavoriteController::class, 'index'])->name('Favorite');
        Route::post('/favorite/{id}', [FavoriteController::class, 'addToFav'])->name('fav.store');
        Route::post('/remove/{id}', [FavoriteController::class, 'removeFavCard'])->name('cardFav.remove');
       // Route::get('EditProfile', [USercontroller::class, 'Edit'])->name('Edit.Profile');
        Route::get('ShowProfile', [USercontroller::class, 'profile'])->name('ShowProfile');
        Route::Put('UpdateProfile', [USercontroller::class, 'UpdateProfile'])->name('Update.Profile');



    });
    Route::get('/contact', [ContactController::class, 'show'])->name('contact.show');
    Route::post('/ContactStore', [ContactController::class, 'store'])->name('contact.store');
    Route::get('/aboutus', [ContactController::class, 'showaboutus'])->name('aboutus.show');
    Route::get('/readmore', [ContactController::class, 'showread'])->name('read.show');
    Route::get('/cart', [CartController::class, 'cartList'])->name('cart.list');
    Route::post('/cart/{id}', [CartController::class, 'addToCart'])->name('cart.store');
    Route::post('/remove/{id}', [CartController::class, 'removeCart'])->name('cart.remove');

    Route::group(['prefix' => '/', ['Middleware' => 'auth', 'guest']], function () {
        Route::get('/', [HomeController::class, 'index'])->name('home');
        Route::group(['prefix' => 'categories'], function () {
            Route::get('/shop/{grid}/{cat?}',[CategoryController::class,'index'])->name('category.show');

        });
        Route::group(['prefix' => 'Search'], function () {
            Route::get('/', [SearchController::class, 'index'])->name('search.show');
            Route::post('/itemSearch', [SearchController::class, 'searchItem'])->name('search.Item');
        });
    });

    Route::group(['middleware' => 'guest'], function () {
        Route::get('/showLogin', [LoginController::class, 'loginShow'])->name('login.show');
        Route::post('/checkLogin', [LoginController::class, 'login'])->name('checkLogin');
        Route::get('/showRegister', [RegisterController::class, 'registerShow'])->name('register.show');
        Route::post('/registerStore', [RegisterController::class, 'store'])->name('register.store');
        Route::get('/showPassword', [PasswordController::class, 'showPass'])->name('password.show');
        Route::post('/checkPassword', [PasswordController::class, 'passwordChange'])->name('password.check');
        // Route::get('/edit_Profile',[USercontroller::class,'edit'])->name('edit_Profile');
        // Route::post('/updateProfile', [USercontroller::class,'update_Profile'])->name('update.Profile');
        
    });
    Route::group(['prefix' => 'site', 'middleware' => 'auth'], function () {
        Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    });
    Route::get('order_List',[USercontroller::class,'index'])->name('order_List');
    Route::get('product-details/{id}',[ItemsController::class,'productdetails'])->name('product-details');
    Route::post('product-rate',[RateController::class,'productRate'])->name('product-rate');
    Route::get('checkout',[CartController::class,'checkoutCreate'])->name('checkout');
    Route::post('checkout/store',[CheckoutController::class,'CheckoutStore'])->name('checkout.store');
    Route::get('view_details',[USercontroller::class,'view'])->name('view_details');
    Route::get('term',[FooterController::class,'term'])->name('term');


});
