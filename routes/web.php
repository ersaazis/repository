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

Route::get('/{slashData}', 'FilemanagerController@repo')->where('slashData', '(.*)');
Route::group([
    'middleware' => ['web', \crocodicstudio\crudbooster\middlewares\CBBackend::class],
    'prefix' => cb()->getAdminPath(),
], function () {
    Route::get('/filemanager', 'FilemanagerController@index')->name('filemanager');
    cb()->routeController('/users','AdminUsersController');
});