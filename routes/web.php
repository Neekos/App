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

// Route::get('table', function () {
// 	$table = App\TableTest::incomplete();
// 	// $table = DB::table('mytable')->get();//Получить данные из бд
//     return view('table.index', compact('table'));
// });

// Route::get('table/{num}', function ($id) {
// 	// $num = DB::table('mytable')->find($id);//Получить данные из бд по id
//     //dd($num);//dump and dump
//     $num = App\TableTest::find($id);
//     return view('table.show', compact('num'));
// });

Route::get('table', 'TableTestController@index');// Обращение к методам через контроллеры
Route::get('table/{num}', 'TableTestController@show');
