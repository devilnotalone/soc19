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
Route::get('promote/{slug}', 'PageController@getPromote');
Route::get('/chart', 'PageController@getChart');

Route::get('/course/{id}/{i}', 'PageController@getCourse');
Route::get('/ta_download/{id}', 'DownloadController@ta_download');
Route::get('/st_download/{id}', 'DownloadController@st_download');

/* Personal */
Route::get('/administrator', 'PageController@getAdministrator');
Route::get('/personal/{id}', 'PageController@getPersonal');
Route::get('/personal2/{id}', 'PageController@getPersonal2');
Route::get('/staff', 'PageController@getStaff');


/* Galleries */
Route::get('/album', 'GalleriesController@getAlbum');
Route::get('/gallery/{id}', 'GalleriesController@getGallery');

// Blc ร่องบัวลอย
Route::view('/blccenter', 'rongbualoy.index');
Route::view('/blccenter/history', 'rongbualoy.history');
Route::view('/blccenter/blinfo001', 'rongbualoy.believe_info_001');
Route::view('/blccenter/blinfo002', 'rongbualoy.believe_info_002');
Route::view('/blccenter/blinfo003', 'rongbualoy.believe_info_003');
Route::view('/blccenter/blinfo004', 'rongbualoy.believe_info_004');
Route::view('/blccenter/blinfo005', 'rongbualoy.believe_info_005');
Route::view('/blccenter/map', 'rongbualoy.map');
Route::view('/blccenter/rongbualoy1_info', 'rongbualoy.rongbualoy1_info');
Route::view('/blccenter/rongbualoy2_info', 'rongbualoy.rongbualoy2_info');
Route::view('/blccenter/salarongthongbualoy_info', 'rongbualoy.salarongthongbualoy_info');
Route::view('/blccenter/seree_info', 'rongbualoy.seree_info');




Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
