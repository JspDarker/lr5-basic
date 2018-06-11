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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Auth::routes();

#Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', [
    'uses'=>'HomeController@index',
    'as' => 'home'
]);
#->middleware('check.age')

#Route::get('/logout', 'HomeController@logout')->name('logout');

Route::get('error', function() {
   return view('exceptions.error');
})->name('error');


/*---------------------------------------------------------
| when open project
|   /laravel where execute | php artisan serve & where laravel query
|
|   /var/www/html/git-lr5/lr5-basic$: where async(dong bo) GitHub remote
|
|
 */

//===========================AJAX=======

Route::get('ajax',function(){
    return view('ajax.json');
});

Route::get('search', 'AjaxController@search');
Route::get('emailjs', 'AjaxController@emailRegistration');
Route::get('ajaxlogin', 'AjaxController@emailLogin');
