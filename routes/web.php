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