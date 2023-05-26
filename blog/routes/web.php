<?php


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
// www.everyonecan.website/
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/posts', function () {
    return view('posts.list');
});

// /posts/9487
Route::get('/posts/{id}', function ($id) {

    return view('posts.show');
});
