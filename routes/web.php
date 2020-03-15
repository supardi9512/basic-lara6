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

Route::get('/user', 'HomeController@index')->name('user');


// Route::get('/user', function() {
//     return 'User';
// });

// // ROUTING DENGAN 1 PARAMETER
// Route::get('/user/{id}', function($id) {
//     return 'User '.$id;
// });

// // ROUTING DENGAN BANYAK PARAMETER
// Route::get('/user/{id}/article/{articleId}', function($id, $articleId) {
//     return 'User '.$id.' Artikel '.$articleId;
// });

// // ROUTING DENGAN 1 PARAMETER OPSIONAL
// Route::get('/admin/{id?}', function($id = null) {
//     return 'Admin '.$id;
// });

// // ROUTE GROUP
// Route::prefix('account')->group(function() {
//     // definisikan route
//     Route::get('/change-password', function() {
//         return 'change-password';
//     });

//     Route::get('/profile', function() {
//         return 'profile';
//     });

//     Route::get('/photo', function() {
//         return 'photo';
//     });
// });

// // ROUTE GROUP DALAM ROUTE GROUP
// Route::prefix('account')->group(function() {
//     Route::prefix('setting')->group(function() {
//         // definisikan route
//         Route::get('/change-password', function() {
//             return 'change-password';
//         });

//         Route::get('/profile', function() {
//             return 'profile';
//         });

//         Route::get('/photo', function() {
//             return 'photo';
//         });
//     });

//     Route::get('/follower', function() {
//         return 'Follower';
//     });
// });

// // ROUTE ALIAS NAME
// Route::get('redirect', function() {
//     return redirect()->route('homepage');
// });

// Route::get('home/landing', function() {
//     return 'Landing';
// })->name('homepage');

// // ROUTE RESOURCE
// Route::resource('article', 'ArticleController');

// // API RESOURCE
// Route::apiResource('article', 'ArticleController');

// // ROUTE VIEW
// Route::view('/', 'welcome');

// // ROUTE REDIRECT
// Route::redirect('/disini', 'kesana');