<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\AdminActivityController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AdminPassswordController;
use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\AdminProgramController;
use App\Http\Controllers\AdminRegistrationController;
use App\Http\Controllers\AdminTestimonialController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardPasswordController;
use App\Http\Controllers\DashboardPostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProgramController;
use App\Models\Profile;
use App\Models\Registration;
use App\Models\Testimonial;
use App\Models\User;

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

// Halaman beranda
Route::get('/', function () {
    return view('index', [
        "title" => "Beranda",
        "profiles" => Profile::all()
    ]);
});

// Halaman informasi
Route::get('/home/posts', [PostController::class, 'index']);

// Halaman detail informasi
Route::get('/home/posts/{post:slug}', [PostController::class, 'show']);

// Halaman program unggulan
Route::get('/home/programs', [ProgramController::class, 'index']);

// Halaman detail program unggulan
Route::get('/home/programs/{program:slug}', [ProgramController::class, 'show']);

// Halaman aktivitas
Route::get('/home/activities', [ActivityController::class, 'index']);

// Halaman detail aktivitas
Route::get('/home/activities/{activity:slug}', [ActivityController::class, 'show']);

// Halaman profil
Route::get('/home/profiles', function () {
    return view('home/profiles/index', [
        "title" => "Profil",
        "profiles" => Profile::all(),
        "testimonials" => Testimonial::all(),
        "users" => User::all(),
        'image' => 'default.jpg',
        'foto' => 'default.png'
    ]);
});

// Halaman users (Guru)
Route::get('/home/users', function () {
    return view('home/users/index', [
        "title" => "Guru",
        "profiles" => Profile::all(),
        "testimonials" => Testimonial::all(),
        "users" => User::all(),
        'image' => 'default.png',
    ]);
});

// Halaman registrasi
Route::get('/home/registrations', function () {
    return view('home/registrations/index', [
        "title" => "Registrasi",
        "profiles" => Profile::all(),
        "registrations" => Registration::all(),
        'image' => 'default.jpg'
    ]);
});

// Halaman contact
Route::get('/home/contacts', function () {
    return view('home/contacts/index', [
        "title" => "Kontak",
        "profiles" => Profile::all()
    ]);
});

// Halaman kategori
Route::get('/home/categories', [CategoryController::class, 'index']);

// Halaman login
Route::get('/admin', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/admin', [LoginController::class, 'authenticate']);

// Halaman logout
Route::post('/home/logout', [LoginController::class, 'logout']);

// --------------------------------------------------------------------------------------------------

// Route untuk dashboard

// Halaman postingan saya
Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

// Halaman reset kata sandi
Route::get('/dashboard/passwords', [DashboardPasswordController::class, 'index'])->middleware('auth');
Route::post('/dashboard/passwords', [DashboardPasswordController::class, 'authenticate'])->name('change-password');
// --------------------------------------------------------------------------------------------------

// Route untuk admin
// Halaman kategori
Route::get('/dashboard/categories/checkSlug', [AdminCategoryController::class, 'checkSlug'])->middleware('admin');
// Route::resource('/dashboard/categories', AdminCategoryController::class)->middleware('admin');

// Untuk unit testing (hilangkan middleware)
Route::resource('/dashboard/categories', AdminCategoryController::class);

// Halaman profil sekolah
Route::resource('/dashboard/profiles', AdminProfileController::class)->middleware('admin');

// Halaman data guru
Route::resource('/dashboard/users', AdminUserController::class)->middleware('admin');
// Reset kata sandi
Route::put('/dashboard/users/reset/{user:id}', [AdminPassswordController::class, 'authenticate']);

// Halaman aktivitas sekolah
Route::get('/dashboard/activities/checkSlug', [AdminActivityController::class, 'checkSlug'])->middleware('admin');
Route::resource('/dashboard/activities', AdminActivityController::class)->middleware('admin');

// Halaman program unggulan
Route::get('/dashboard/programs/checkSlug', [AdminProgramController::class, 'checkSlug'])->middleware('admin');
Route::resource('/dashboard/programs', AdminProgramController::class)->middleware('admin');

// Halaman info registrasi
Route::get('/dashboard/registrations/checkSlug', [AdminRegistrationController::class, 'checkSlug'])->middleware('admin');
Route::resource('/dashboard/registrations', AdminRegistrationController::class)->middleware('admin');

// Halaman semua postingan
Route::get('/dashboard/allposts', [AdminPostController::class, 'index'])->middleware('admin');
Route::get('/dashboard/allposts/show/{post:slug}', [AdminPostController::class, 'show'])->middleware('admin');
Route::get('/dashboard/allposts/destroy/{post:slug}', [AdminPostController::class, 'destroy'])->middleware('admin');

// Halaman testimoni
Route::resource('/dashboard/testimonials', AdminTestimonialController::class)->middleware('admin');
