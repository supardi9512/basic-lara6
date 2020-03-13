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


Route::get('/user', function() {
    return 'User';
});

// routing dengan 1 parameter
Route::get('/user/{id}', function($id) {
    return 'User '.$id;
});

// routing dengan banyak parameter
Route::get('/user/{id}/article/{articleId}', function($id, $articleId) {
    return 'User '.$id.' Artikel '.$articleId;
});

// routing dengan 1 parameter opsional
Route::get('/admin/{id?}', function($id = null) {
    return 'Admin '.$id;
});