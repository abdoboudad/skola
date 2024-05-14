<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('platform.index');
});


Route::group(['prefix'=>'admin'],function(){
    Route::get('/',function(){
        return view('admin.pages.index');
    })->name('admin');
    // Route::get('courses/addvideo', [CourseController::class,'show'])->name('add_video');
    Route::resource('courses', CourseController::class);
    Route::post('video/store/{id}', [VideoController::class,'store'])->name('video.store');
});
Route::get('tutorials', [CourseController::class,'tutorial'])->name('tutorial');
Route::get('tutorial/{id}', [CourseController::class,'tutorial_show'])->name('tutorial_show');
Route::get('watch/{id}/{vid}', [VideoController::class,'watch'])->name('video.watch');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
