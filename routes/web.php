<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

//Route Landing Page
Route::get('/', [HomeController::class, 'index']);

//Route Bootcamp
Route::get('/bootcamp', [CourseController::class, 'index']);
Route::get('/bootcamp/{course}', [CourseController::class, 'bootcamp']);

//Route Blog
Route::get('/blog', [BlogPostController::class, 'index']);
Route::get('/blog/{blogpost}', [BlogPostController::class, 'blog']);

//Login
// Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

//Register
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'register']);

//Dasboard
Route::get('/dashboard', [DashboardController::class, 'index']);
