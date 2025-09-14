<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostDashboardController;

// ini adalah route halaman awal atau root (bagian paling atas dari url)
Route::get('/', function () {
    // ini dia akan (return) mencari di folder views dengan nama welcome.blade.php
    return view('home', ['title' => 'Home Page']);
});

// route blog
Route::get('/posts', function () {
    // membuat array nya disini
    // untuk melihat tampilan terbaru array posts di view posts
    // ini menggunakan with biar tidak lazy loading dan menjadi eager loading
    // eager loading berarti loading nya semangat terus dan tidak diawal saja

    // $posts = Post::with(['author', 'category'])->latest()->get();

    // ini cara boros query

    $posts =  Post::latest()->filter(request(['search', 'category', 'author']))->paginate(6)->
    withQueryString();

    
    return view('posts', ['title' => 'Blog', 'posts' => $posts]);
});

// membuat rute baru untuk menangkap semuanya by id
// atau menangkap URL dengan bentuk wildcard
Route::get('/posts/{post:slug}', function(Post $post){

    // untuk mencari model post berdasarkan id nya
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});



// route about
Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

// route contact
Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Us']);
});

Route::get('/hello', function () {
    // ini aku cuman iseng aja nampilin rute hello doang terus keluar hello semuanya
    return 'hello semuanya';
});

// membuat dashboard baru
Route::get('/dashboard', [PostDashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

// Tambah Post baru
Route::post('/dashboard', [PostDashboardController::class, 'store'])->middleware(['auth', 'verified'])->name('dashboard');

// route untuk create post dan ini harus diatas route show biar gak ketangkep duluan
Route::get('/dashboard/create', [PostDashboardController::class, 'create'])->middleware(['auth', 'verified']);

//show dashboard post by slug
Route::get('/dashboard/{post:slug}', [PostDashboardController::class, 'show'])->middleware(['auth', 'verified']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
