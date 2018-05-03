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

Route::get('/','LadinController@index');

Route::group(['middleware' => 'auth'], function () {

});
Route::get('/Articulo','ArticuloController@index');
Route::post('/Articulo/nuevo','ArticuloController@nuevo');
/*Route::get('test', function() {
    Storage::disk('google')->put('test.txt', 'Hello World');   
});*/
Route::get('test','ArchivosController@index');
Route::post('test/nuevo','ArchivosController@nuevo');