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

Route::get('/', function () {
    return view('welcome');
});

    Route::namespace('App\Http\Controllers')->group(function () {
        Route::namespace('Client')->group(function () {
            Route::get('/client', 'indexController')->name('client.index');
            Route::get('/client/create', 'CreateController')->name('client.create');
            Route::post('/client', 'StoreController')->name('client.store');
            Route::get('/client/{id}', 'ShowController')->name('client.show');
            Route::patch('/client/{id}', 'UpdateController')->name('client.update');
            Route::delete('/client/{client_id}', 'deleteController')->name('client.delete');
        });

        Route::namespace('Avto')->group(function () {
            Route::delete('/client/{client_id}/avto/{id}', 'deleteController')->name('avto.delete');
            Route::get('/client/{client_id}/avto/create', 'CreateController')->name('avto.create');
            Route::post('/client/{client_id}/avto', 'StoreController')->name('avto.store');
            Route::get('/client/{client_id}/avto/{id}/edit', 'EditController')->name('avto.edit');
            Route::patch('/client/{client_id}/avto/{id}', 'UpdateController')->name('avto.update');
        });
    });





