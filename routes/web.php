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
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/lista', function() {
    $data = App\User::all();
    return view('listado', compact('data'));
});

Route::get('/datos', function() {
        $data = App\User::all();

        return response()->json(
            [
                'data' => $data
                ]
            );
});
