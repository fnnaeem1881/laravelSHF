<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//
//Route::get('/', function () {
//    return view('frontend.home');
//});
//menu route
route::get('/','frontend\MenuController@home')->name('home');
route::get('/talent','frontend\MenuController@talent')->name('talent');
route::get('/accivment','frontend\MenuController@accivment')->name('accivment');
route::get('/gellary','frontend\MenuController@gellary')->name('gellary');
route::get('/publication','frontend\MenuController@publication')->name('publication');
route::get('/jobs','frontend\MenuController@jobs')->name('jobs');
route::get('/blog','frontend\MenuController@blog')->name('blog');
route::get('/shop','frontend\MenuController@shop')->name('shop');
route::get('/login','frontend\MenuController@login')->name('login');
route::get('/profile','frontend\MenuController@profile')->name('profile');
route::get('/register','frontend\MenuController@register')->name('register');
route::get('/checkout','frontend\MenuController@checkout')->name('checkout');
route::get('/cart','frontend\MenuController@cart')->name('cart');
route::get('/donate','frontend\MenuController@donate')->name('donate');
route::get('/becomevolunteer','frontend\MenuController@becomevolunteer')->name('becomevolunteer');
route::get('/about','frontend\MenuController@about')->name('about');
route::get('/contact','frontend\MenuController@contact')->name('contact');


//page route

route::get('/whatwedo','frontend\PageController@whatwedo')->name('whatwedo');
route::get('/ourvolunters','frontend\PageController@ourvolunters')->name('ourvolunters');
