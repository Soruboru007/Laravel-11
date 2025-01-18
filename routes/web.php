<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
	return view('welcome');
});

Route::post('/', function (Request $request) {
	//新しいポストを作成
	//入ってくるリクエストを検証する
	dd($request->all());
});

Route::put('/{id}', function (Request $request, $id) {
	return $id;
});

Route::delete('/{id}', function (Request $request, $id) {
	return $id;
});

Route::get('/test', function () {

	$test = "Test again";
	return "<h1>$test</h1>";

});




