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

Route::get('/serverSide', [
    'as'   => 'serverSide',
    'uses' => function () {
        \DB::enableQueryLog();

        $users = App\User::where('id', '>', '1');
        $data = Datatables::of($users)->make();

        Log::info(\DB::getQueryLog());
        return $data;
    }
]);

Route::get('/list', 'HomeController@dxTable')->name('list');

Route::get('/home', 'HomeController@index')->name('home');


