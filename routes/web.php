<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Post;

use App\Http\Controllers\PostController;

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

Route::get('/', function (){
    return view('home');
})->name('home');
Route::get('/contactus', function (){
    return view('contactus');
})->name('contactus');
Route::get('/aboutus', function (){
    return view('aboutus');
})->name('aboutus');

Route::get('post/create', function (){
    DB::table('posts')->insert([
        'title' => 'Raiym site',
        'body' => 'Zhez'
    ]);
});

Route::get('post', [PostController::class, 'index']);
Route::get('post/create', function() {
    return view('post.create');
});