<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing_page');
});


//lading page routes 

Route::post('/loginin/view', function () {
    return view('profile.login_page');
})->name('login.view');
// Route::post('/signup/view', function () {
//     return view('profile.signup_page');
// })->name('signup.view');


//temporary dashboard routes
Route::post('/signup/view', function () {
    return view('dashboard.employeer_dashboard');
})->name('signup.view');