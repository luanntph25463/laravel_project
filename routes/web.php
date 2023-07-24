<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\StudentController;
// use App\Http\Controllers\ProfileController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });
// Route::middleware('auth')->prefix('student')->group(function () {
//     Route::get('student/',[StudentController::class,'index'])->name('student.list');
//     Route::match(['get', 'post'], '/add',[StudentController::class,'store'])->name('student_add');
//     Route::match(['get', 'post'], '/edit/{id}',[StudentController::class,'edit'])->name('student_edit');
//     Route::get('/student/delete/{id}',[StudentController::class,'delete'])->name('student_delete');
//     });

    Route::match(['GET','POST'],'/login',[LoginController::class,'login'])->name('login');

    Route::middleware(['auth'])->group(function (){
        //tất cả những route nào cần được check đăng nhập mới vào được thì vứt vào trong này
        Route::get('student/',[StudentController::class,'index'])->name('student.list');
        Route::match(['get', 'post'], '/add',[StudentController::class,'store'])->name('student_add');
        Route::match(['get', 'post'], '/edit/{id}',[StudentController::class,'edit'])->name('student_edit');
        Route::get('/student/delete/{id}',[StudentController::class,'delete'])->name('student_delete');
    });



require __DIR__.'/auth.php';
