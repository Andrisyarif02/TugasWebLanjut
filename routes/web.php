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
	//PRAKTIKUM 1
 	

 	//Praktikum 2
 	//Route::get('/', 'HomeController@home');
 	//Route::get('/AboutController', 'AboutController@about');
 	//Route::get('/ArticlesController/{id}', 'ArticlesController@articles');
 	//Route::get('/hello', function () {
	//	return view('blog', ['name' => 'Andri' ], ['nim' => '1931710074']);
	//});
	//Praktikum1 minggu 3
	Route::get('/awal', 'HomeControllerawal@awal')->name('awal');
	Route::get('/about', 'AboutController@about')->name('about');
	Route::get('/articles/{id}', 'ArticlesController@viewArticles');
	Route::get('/categories/{cat}', 'CategoriesController');
	Route::get('/logout', 'LogoutController@logout');
Auth::routes();

Route::get('/logout' ,function(){
	$logout=Auth::logout();
	return view('auth.login');
});
Route::get('/' ,function(){
	return view('auth.login');
});
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/manage', 'ArticlesController@index')->name('manage');
Route::get('/artikel/add','ArticlesController@add');
Route::post('/artikel/create','ArticlesController@create');
Route::get('/artikel/edit/{id}','ArticlesController@edit');
Route::post('/artikel/update/{id}','ArticlesController@update');
Route::get('/artikel/delete/{id}','ArticlesController@delete');

Route::get('/article/cetak_pdf', 'ArticlesController@cetak_pdf');


