<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminPageController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\AdController;






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



Route::get('/category/{slug}', [MainController::class, 'categoryPosts'])->name('categoryPosts');


Route::get('/', [MainController::class, 'index'])->name('index');

Route::get('/post/{slug}', [MainController::class, 'postDetail'])->name('postDetail');


Route::get('/contact', [MainController::class, 'contact'])->name('contact');

Route::post('/sendMail', [MainController::class, 'sendMail'])->name('sendMail');

Route::post('ckeditor/upload', [MainController::class,'upload'])->name('ckeditor.upload');

Route::get('/search', [MainController::class, 'search'])->name('search');



Route::get('/lang/{lang}', function($lang){
    session(['lang' => $lang]);
    return back();
});




//admin page 

Route::get('/admin', [AdminPageController::class, 'dashboard'])->name('dashboard');

Route::get('/admin/dashboard', [DashboardController::class, 'adminDashboard'])->name('adminDashboard');

//admin resourse 

Route::prefix('admin')->name('admin.')->group(function(){
    Route::resource('categories', CategoriesController::class );
    Route::resource('posts', PostController::class );
    Route::resource('tags', TagController::class );
    Route::resource('ads', AdController::class );

});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
