<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::any('/', function()
    {
        return view('posts/create');
    });

Route::get('/', function () {
    // $post = App\Models\Post::all();
    // $post = App\Models\Post::take(2)->get();
    // $post = App\Models\Post::paginate(2);
    $posts = App\Models\Post::take(3)->latest()->get();  

    return view('welcome', [
        'posts' => $posts
    ]);
});



Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('posts', \App\Http\Controllers\PostController::class);

Route::get('logout', 'Auth\LoginController@logout');

Route::get('/posts', 'PostController@index');
Route::post('/posts', 'PostController@store');
Route::get('/posts/create', 'PostController@create');
Route::get('/posts/{post}', 'PostController@show');
Route::get('/posts/{post}/edit', 'PostController@edit');
Route::put('/posts/{post}', 'PostController@update');
Route::put('/posts/{post}/destroy', 'PostController@destroy');






// Route::get('/', function () {
//     return 'Hello wordl';
// });

// Route::get('/turos/{tests}', function ($tests) {
//     return $tests;
// });

// Route::get('/turos/{turotest}', 'TuroController@show');





