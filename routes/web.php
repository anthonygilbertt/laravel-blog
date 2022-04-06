<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;


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

// Route::get('/users/{id}/{name}', function ($id, $name){
//     return 'This is user '. $name . ' with an ID of '. $id;
// });

// Route::get('/', function() {
//     return "Hey";
// });

Route::get('/', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/services', [PagesController::class, 'services']);
Route::get('/', [PagesController::class, 'logout']);
Route::get('/', [PagesController::class, 'login']);
Route::get('/signup', [PagesController::class, 'signup']);

// Route::resource('posts', PostsController::class)->parameters([
//     'posts' => 'admin_user'
// ]);
Route::resource('posts', PostsController::class);
// Route::get('/', 'PagesController@index');
// Route::get('/', function() {
//     return "Hey";
// });

// Route::get('/about', function () {
//     return view('about');
// });
// Route::get('/services', function () {
//     return view('services');
// });
