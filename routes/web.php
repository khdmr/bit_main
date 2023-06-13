<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\DashboardBlogPost;
use App\Http\Controllers\DashboardBootcamp;
use App\Http\Controllers\DashboardCategoryBootcamp;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardMaterial;
use App\Http\Controllers\DashboardModul;
use App\Http\Controllers\DashboardPaymentTransaction;
use App\Http\Controllers\DashboardUser;
use App\Http\Controllers\PaymentController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::middleware(['auth', 'isAdmin'])->group(function () {
    //Dasboard
    Route::get('/dashboard', [DashboardController::class, 'index']);

    //Dashboard Blog Post
    Route::resource('/dashboard/blogposts', DashboardBlogPost::class);

    //Dashboard Konfirmasi Pembayaran
    Route::resource('/dashboard/payment', DashboardPaymentTransaction::class);

    //Dashboard Bootcamp Category
    Route::resource('/dashboard/bootcampcategory', DashboardCategoryBootcamp::class);

    //Dashboard Bootcamp
    Route::resource('/dashboard/bootcamp', DashboardBootcamp::class);

    //Dashboard Modul
    Route::resource('/dashboard/modul', DashboardModul::class);

    //Dashboard Material
    Route::resource('/dashboard/material', DashboardMaterial::class);

    //Dashboard User
    Route::resource('/dashboard/user', DashboardUser::class);
});

//Route Landing Page
Route::get('/', [HomeController::class, 'index']);

//Route Bootcamp
Route::get('/bootcamp', [CourseController::class, 'index']);
Route::get('/bootcamp/{course}', [CourseController::class, 'bootcamp']);
Route::get('/bootcamp/{course}/modul/{material}', [CourseController::class, 'isibootcamp']);

//Route Blog
Route::get('/blog', [BlogPostController::class, 'index']);
Route::get('/blog/{blogpost}', [BlogPostController::class, 'blog']);

//Login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');

//Register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'register'])->middleware('guest');

//Pembayaran
Route::get('/bootcamp/{course}/pembayaran', [PaymentController::class, 'index'])->middleware('auth');
Route::post('/bootcamp/{course}/pembayaran', [PaymentController::class, 'save'])->middleware('auth');
