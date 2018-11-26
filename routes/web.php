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
Route::get('database', function() {
    try {
        DB::connection()->getPdo();
        die("Connected");
    } catch (\Exception $e) {
        die("Could not connect to the database.  Please check your configuration. error:" . $e );
    }
});

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('events', 'GpEventController@index')->name('events');
Route::post('events/causes', 'GpEventController@filteredByCause')->name('filterByCause');