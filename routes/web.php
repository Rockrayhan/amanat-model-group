<?php

use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CaseStudyController;
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



//=========== frontend routes =========

Route::get('/', function () {
    return view('frontend.home');
}) ;

Route::get('/about/management', function () {
    return view('frontend.management');
}) ;
Route::get('/contact', function () {
    return view('frontend.contact');
}) ;




//=========== admin panel routes =========

Route::get('/dashboard', [BlogController::class, 'dashboard'])->name('home')->middleware('admin');

Route::get('/api-list', function () {
    return view('api-list');
})->name('api-lists');

// blogs
Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
Route::get('/blogs/create', [BlogController::class, 'create'])->name('blogs.create');
Route::post('/blogs', [BlogController::class, 'store'])->name('blogs.store');
Route::get('/blogs/edit/{id}', [BlogController::class, 'edit'])->name('blogs.edit');
Route::post('/blogs/update/{id}', [BlogController::class, 'update'])->name('blogs.update');
Route::get('/blogs/delete/{id}', [BlogController::class, 'destroy'])->name('blogs.delete');


// case-studies
Route::get('/case-study', [CaseStudyController::class, 'index'])->name('casestudy.index');
Route::get('/admin/case-study/create', [CaseStudyController::class, 'create'])->name('casestudy.create');
Route::post('/admin/case-study/store', [CaseStudyController::class, 'store'])->name('casestudy.store');
Route::get('/admin/case-study/edit/{id}', [CaseStudyController::class, 'edit'])->name('casestudy.edit');
Route::post('/admin/case-study/update/{id}', [CaseStudyController::class, 'update'])->name('casestudy.update');
Route::get('/admin/case-study/delete/{id}', [CaseStudyController::class, 'destroy'])->name('casestudy.delete');

// admin login/logout
Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');
Route::get('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

Route::get('/admin/change-password', [AdminAuthController::class, 'showChangePasswordForm'])->name('admin.change.password.form');
Route::post('/admin/change-password', [AdminAuthController::class, 'changePassword'])->name('admin.change.password');
