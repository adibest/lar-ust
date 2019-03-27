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
    return view('admin.home.index');
});

Route::get('home', function () {
	$data['name'] = 'Paijo';
	$data['alamat'] = 'Galaksi';
	$data['jk'] = 1;
	return view('admin.home.index', $data);
});

Route::get('user/{id}/{name}', function ($id,$name) {
	return 'User '.$id.' Nama '.$name;
});

Route::get('user/{name?}', function ($name = 'John') {
	return $name;
});

Route::prefix('admine')->group(function () {
    Route::get('users', function () {
        // Matches The "/admin/users" URL
        echo "this is admin/users";
    });
});

Route::prefix('admin')->group(function () {
    Route::get('santri', 'Admin\Santri@index');
    Route::get('santri/create', 'Admin\Santri@create');
    Route::post('santri', 'Admin\Santri@store');
});