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
/*Построение роутинга hello*/
Route::get('hello', function () {
	$world = [
		'one',
		'two',
		'tree'
	];/* Объявление массива*/
    return view('hello', compact('world'));/*Объявление массивов*/
});
