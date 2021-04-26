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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

/* Installer */

Route::group(['prefix' => 'install-crm', 'middleware' => ['web-install']], function () {
    Route::get('/', 'App\Http\Controllers\InstallController@welcome')->name('install.welcome');
    Route::get('/requirements', 'App\Http\Controllers\InstallController@requirements')->name('install.requirements');
    Route::get('/permissions', 'App\Http\Controllers\InstallController@permissions')->name('install.permissions');
    Route::get('/application', 'App\Http\Controllers\InstallController@application')->name('install.application');
    Route::get('/database', 'App\Http\Controllers\InstallController@database')->name('install.database');
    Route::get('/mail', 'App\Http\Controllers\InstallController@mail')->name('install.mail');
    Route::get('/complete', 'App\Http\Controllers\InstallController@complete')->name('install.complete');
});

/* Updater */

Route::group(['prefix' => 'update-crm', 'middleware' => ['web-install']], function () {
    Route::get('/', 'App\Http\Controllers\UpdateController@welcome')->name('update.welcome');
    Route::get('/overview', 'App\Http\Controllers\UpdateController@overview')->name('update.overview');
    Route::get('/database', 'App\Http\Controllers\UpdateController@database')->name('update.database');
    Route::get('/complete', 'App\Http\Controllers\UpdateController@complete')->name('update.complete');
});
