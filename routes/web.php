<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;

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

Route::get('/hello', function () {
    return 'Hello world';
});

Route::get('/world', function () {
    return 'World';
   });

Route::get('/welcome', function(){
    return 'Selamat Datang';
});

Route::get('/about', function(){
    return 'Nama     : Lilla Nur Wahidiyah
            </p>NIM      : 2241720144' ;
});

Route::get('/user/{name}', function ($name){
    return 'Nama Saya '.$name;
});

Route::get('/posts/{post}/comments/{comment}', function
($postId, $commentId) {
 return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

Route::get('/user/{name?}', function ($name=null) {
    return 'Nama saya '.$name;
});

Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '.$name;
    });
    
Route::get('/hello', [WelcomeController::class,'hello']);