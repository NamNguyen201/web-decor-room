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
Route::get('/','HomeController@viewhome')->name('home');
Route::post('/handleSaveContact','HomeController@updataform')->name('formsubmit');


Route::get('/login', 'AdminController@viewlogin')->name('login');

Route::get('/logout', 'AdminController@logout')->name('logout');

Route::post('/admin_dashboard', 'AdminController@dashboard')->name('formlogin');    






Route::group(['prefix'=>'admin','middleware'=>['CheckTypeUser']], function(){
    Route::get('/dashboard','AdminController@show_dashboard')->name('show_dashboard');
    Route::get('/contact', 'ContactController@index')->name('contact-list');
    Route::get('/contact/edit/{id}', 'ContactController@edit')->name('contact-edit');
    Route::post('/contact/update/{id}', 'ContactController@update')->name('contact-update');

    
    Route::get('/product', 'ProductController@index')->name('product-list');
});