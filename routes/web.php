<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Models\profile;

Route::get('/', function () {
    return view('landing_page');
});


//landing page routes 




Route::post('login/view', [ProfileController::class, 'login_view'])->name('login.view');
Route::get('login/view', [ProfileController::class, 'login_view'])->name('login.view');
Route::post('signup/view', [ProfileController::class, 'signup_view'])->name('signup.view');
Route::get('signup/view', [ProfileController::class, 'signup_view'])->name('signup.view');

//auth routes



Route::post('/user/store', [ProfileController::class, 'store'])->name('create.user');
Route::post('/user/auth', [ProfileController::class, 'auth'])->name('auth.user');
Route::get('/user/auth', [ProfileController::class, 'auth'])->name('auth.user');
Route::get('/user/logout', [ProfileController::class, 'logout'])->name('logout');



//dashboard routes
Route::post('/dashboard/job/create', [ProfileController::class, 'store_job'])->name('create.job');
Route::get('/dashboard/job/create', [ProfileController::class, 'store_job'])->name('create.job');




//temporary dashboard routes
// Route::post('/signup/view', function () {
//     return view('dashboard.employeer_dashboard');
// })->name('signup.view');

// Route::post('/loginin/view', function () {
//     return view('dashboard.employee_dashboard');
// })->name('login.view');