<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\StudentController;


//Route::get('/', function () {
//    return view('welcome');
//});

// login page

Route::get('/', function(){
    return view('user.login');
}) ->name('login');
Route::post('/login/verify',[\App\Http\Controllers\UserController::class,'verifyUser'])->name('login.verification');
Route::get('logout',[\App\Http\Controllers\UserController::class,'logout'])->name('logout');


// backend dashboard
Route::get('/backend/dashboard', function(){
    return view('backend.dashboard');
}) -> name('backend.dashboard')->middleware('auth');


// create setting

Route::get('/backend/setting/create', function(){
    return view('backend.setting.create');
})-> name('backend.setting.create');


Route::get('/backend/setting/list', function(){
    return view('backend.setting.list');
})-> name('backend.setting.list');

// list setting
Route::get('/backend/food/create', function(){
    return view('backend.food.create');
})-> name('backend.food.create');

// Route for loading student create from
Route::get('backend/student/create',[StudentController::class,'create'])->name('backend.student.create')->middleware('auth');
// Route for student data store
Route::post('backend/student/store',[StudentController::class,'store'])->name('backend.student.store')->middleware('auth');
//Route for student data Display
Route::get('backend/student/index',[StudentController::class,'index'])->name('backend.student.index')->middleware('auth');
// show
Route::get('backend/student/{id}',[StudentController::class,'show'])->name('backend.student.show')->middleware('auth');
// Delete
Route::delete('backend/student/{id}',[StudentController::class,'destroy'])->name('backend.student.destroy')->middleware('auth');

Route::get('/backend/food/list', function(){
    return view('backend.food.list');
})-> name('backend.food.list');

Route::get('/register', function(){
    return view('register');
});

