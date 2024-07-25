<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/post/{post}',[PostController::class,'show'])->name(('post'));

Route::middleware('auth')->group(function (){
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/admin',[AdminController::class,'index'])->name(('admin.index'));
    Route::get('/admin/posts/create',[PostController::class,'create'])->name(('post.create'));
    Route::post('/admin/posts',[PostController::class,'store'])->name(('post.store'));

});
