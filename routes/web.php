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
    Route::get('/', function () {
        return view('admin.home.index');
    });

    Route::get('santri', 'Admin\SantriController@index');
    Route::get('santri/create', 'Admin\SantriController@create');// display a form for the user to create a new blog post
    Route::post('santri', 'Admin\SantriController@store');//store the new blog post in the database.
    Route::get('santri/{id}/edit', 'Admin\SantriController@edit');
    Route::put('santri', 'Admin\SantriController@update');
    Route::delete('santri/{id}/delete', 'Admin\SantriController@delete');

    Route::get('guru', 'Admin\GuruController@index');
    Route::get('guru/create', 'Admin\GuruController@create');
    Route::post('guru', 'Admin\GuruController@store');
    Route::get('guru/{id}/edit', 'Admin\GuruController@edit');
    Route::put('guru', 'Admin\GuruController@update');
    Route::delete('guru/{id}/delete', 'Admin\GuruController@delete');

    Route::get('provinsi', 'Admin\ProvinsiController@index');
    Route::get('provinsi/create', 'Admin\ProvinsiController@create');
    Route::post('provinsi', 'Admin\ProvinsiController@store');
    Route::get('provinsi/{id}/edit', 'Admin\ProvinsiController@edit');
    Route::put('provinsi', 'Admin\ProvinsiController@update');
    Route::delete('provinsi/{id}/delete', 'Admin\ProvinsiController@delete');
});