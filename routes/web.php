<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServicePagesController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ContactFormController;
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

//Route::get('/', function () {
    //return view('welcome');
//});



   Route::get('/', 'PagesController@index');
   Route::get('/dashboard', 'PagesController@dashboard')->name('dashboard');
   Route::get('/main', 'MainPagesController@index')->name('main');
   Route::put('/main', 'MainPagesController@update')->name('main.update');

   Route::get('/service/create', 'ServicePagesController@create')->name('services.create');
   Route::post('/service/create', 'ServicePagesController@store')->name('services.store');
   Route::get('/service/list', 'ServicePagesController@list')->name('services.list');
   Route::get('/service/edit/{id}', 'ServicePagesController@edit')->name('services.edit');
   Route::post('/service/update/{id}', 'ServicePagesController@update')->name('services.update');
   Route::delete('/service/destroy/{id}', 'ServicePagesController@destroy')->name('services.destroy');

   Route::get('/portfolio/create', 'PortfolioController@create')->name('portfolios.create');
   Route::put('/portfolio/create', 'PortfolioController@store')->name('portfolios.store');
   Route::get('/portfolio/list', 'PortfolioController@list')->name('portfolios.list');
   Route::get('/portfolio/edit/{id}', 'PortfolioController@edit')->name('portfolios.edit');
   Route::post('/portfolio/update/{id}', 'PortfolioController@update')->name('portfolios.update');
   Route::delete('/portfolio/destroy/{id}', 'PortfolioController@destroy')->name('portfolios.destroy');

   Route::get('/about/create', 'AboutController@create')->name('abouts.create');
   Route::put('/about/create', 'AboutController@store')->name('abouts.store');
   Route::get('/about/list', 'AboutController@list')->name('abouts.list');
   Route::get('/about/edit/{id}', 'AboutController@edit')->name('abouts.edit');
   Route::post('/about/update/{id}', 'AboutController@update')->name('abouts.update');
   Route::delete('/about/destroy/{id}', 'AboutController@destroy')->name('abouts.destroy');


 Auth::routes();
 Route::post('/contact-form', 'ContactFormController@store')->name('contact-form.store');


