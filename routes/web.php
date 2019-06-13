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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', 'HomeController@getIndex');
Route::get('/news/{id}', 'NewsController@getNews');
Route::get('/list_news/{id}', 'NewsController@listNews');
Route::get('page/{slug}','PageController@getIndex');
Route::get('/chart', 'PageController@getChart');

Route::get('/course/{id}/{i}', 'PageController@getCourse');
Route::get('/ta_download/{id}', 'DownloadController@ta_download');
Route::get('/st_download/{id}', 'DownloadController@st_download');

/* Personal */
Route::get('/administrator', 'PageController@getAdministrator');

Route::get('/personal/{id}', 'PageController@getPersonal');

Route::get('/staff', 'PageController@getStaff');




Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
