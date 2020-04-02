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
    return redirect('jobs');
});

 Route::resource('/jobs', 'JobsController')->middleware('auth');
 Route::resource('/employees', 'EmployeesController')->middleware('auth');
 Route::get('/info','InfoController@show');
 Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/tampilkan', function($nama = "lorem ipsum") {
    $data = [
        'name' => $nama,
        'statusCode' => 200
    ];

    return response()->json($data);
});
