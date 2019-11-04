<?php

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
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {return view('front.pages.home'); })->name('home');
Route::get('/contact', function () {return view('front.pages.contact'); })->name('contact');
Route::get('/blog', function () {return view('front.pages.blog'); })->name('blog');
Route::get('/blog/{id}', function () {return view('front.pages.blog.details'); })->name('blog.details');
Route::get('/commander', function () {return view('front.pages.ordering'); })->name('front.order');
Route::get('/services', function () {return view('front.pages.services'); })->name('services');

Route::get('/connexion', function (){ return view('front.pages.login');})->name('Marchantlogin');
Route::post('/authentification', 'MerchantController@authenticate')->name('authentication');

Route::get('/inscription', function (){
    if(Auth::user()){
        return view('merchant/pages/dashboard');
    }
    return view('front.pages.register');})->name('MerchantRegister');

Route::post('/inscription', 'MerchantController@create')->name('MerchantCreate');

Route::prefix('admin')->name('admin.')->group(function () {

    Route::permanentRedirect('', '/admin/dashboard');

    Route::get('home', function () {
        return view('admin/index');
    })->name('index');

    Route::get('dashboard', function () {
        return view('admin/pages/dashboard');
    })->name('dashboard');

    Route::get('login', function () {
        return view('admin/pages/login');
    })->name('login');

    Route::get('lock', function () {
        return view('admin/pages/lock');
    })->name('lock');

    Route::get('register', function () {
        return view('admin/pages/register');
    })->name('register');


    Route::get('recover', function () {
        return view('admin/pages/recover');
    })->name('recover');

    Route::get('error', function () {
        return view('admin/pages/error', ['code' => 400, 'message' => 'Page not found']);
    })->name('error');
});

Route::middleware(['App\Http\Middleware\LoggedMerchant'])->prefix('marchand')->name('marchand.')->group(function () {
    Route::get('/', 'MerchantController@dashboard' )->name('dashboard');
    Route::get('commandes', 'MerchantController@order')->name('orders');
    Route::get('equipe', 'MerchantController@team')->name('team');
    Route::get('fournisseurs', 'MerchantController@supplier')->name('suppliers');
});

Route::any('/deconnexion', function (){ Auth::logout(); return redirect('/');})->name('logout');
