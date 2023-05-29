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
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

//CRUD
//3 routing: create/ edit/ list
//***********
//不知道為啥使用use App\Http\Controllers\PostController
//無法使用'PostController@index'
//需要寫完整路徑'App\Http\Controllers\PostController@index'
//或是[PostController::class, 'index']
//***********
Route::get('/posts/admin', [PostController::class, 'admin']);

Route::get('/posts/create', [PostController::class, 'create']);

Route::post('/posts', [PostController::class, 'store']);
Route::get('/posts/{post}', [PostController::class, 'show']);
Route::put('/posts/{post}', [PostController::class, 'update']);
Route::delete('/posts/{post}', [PostController::class, 'destroy']);

Route::get('/posts/{post}/edit',  [PostController::class, 'edit']);
Route::get('/posts', [PostController::class, 'index']);


// Route::get('/posts', function () {
//     $posts = [1,2,3,4,5];
//     return view('posts.list', ['posts'=>$posts]);
// });

// // /posts/9487
// Route::get('/posts/{id}', function ($id) {

//     return view('posts.show');
// });
