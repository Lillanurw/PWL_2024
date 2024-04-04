<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
    use App\Http\Controllers\ArticleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/hello', function () {
//     return 'Hello world';
// });

// Route::get('/world', function () {
//     return 'World';
//    });

// Route::get('/welcome', function(){
//     return 'Selamat Datang';
// });

// Route::get('/about', function(){
//     return 'Nama     : Lilla Nur Wahidiyah
//             </p>NIM      : 2241720144' ;
// });

// Route::get('/user/{name}', function ($name){
//     return 'Nama Saya '.$name;
// });

// Route::get('/posts/{post}/comments/{comment}', function
// ($postId, $commentId) {
//  return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
// });

// Route::get('/user/{name?}', function ($name=null) {
//     return 'Nama saya '.$name;
// });

// Route::get('/user/{name?}', function ($name='John') {
//     return 'Nama saya '.$name;
//     });
    
// Route::get('/hello', [WelcomeController::class,'hello']);

// Route::get('/index', [PageController::class,'index']);

// Route::get('/about', [PageController::class,'about']);

// Route::get('/articles/{id}', [PageController::class,'articles']);

// Route::get('/', 'HomeController');
// Route::get('/about', 'AboutController');
// Route::get('/articles/{id}', 'ArticleController');

// Route::resource('photos', PhotoController::class);

// Route::resource('photos', PhotoController::class)->only([
//     'index', 'show'
//    ]);
//    Route::resource('photos', PhotoController::class)->except([
//     'create', 'store', 'update', 'destroy'
//    ]);
   

//    Route::get('/greeting', function () {
//     return view('hello', ['name' => 'Lilla']);
//     });