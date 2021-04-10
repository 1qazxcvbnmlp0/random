<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserProfileController;
// use App\Http\Controllers\CompanyController; 

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



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


// ------------------------------------- Start Company Registeration routes-----------------------------------------

Route::get('registerCompany', function(){
    return view('auth\registerCompany');
})->name('registerCompany')->middleware('guest');

Route::resource('setupCompanyProfile', CompanyController::class);

// ------------------------------------- End Company Registeration routes-----------------------------------------


// // During login Selectes the type of user, i.e. the role using the following routes/ 
// // -----------------------------------Start Login Routes ----------------------------//

Route::get('/home', 'HomeController@index')->name('home');

// Route for admin
Route::get('/home', ['middleware'=>['auth', 'admin'], function(){
    return view('admin');
}])->name('adminHome');

// Route For recruiter
Route::get('/companyHome', ['middleware'=>['auth', 'companyAgent'], function(){
    return view('recruiter/job_index');
}])->name('recruiterHome');

// Route for applicant
Route::get('/applicantHome', ['middleware'=>['auth'], function(){
    return view('applicant');
}])->name('applicantHome');

// //-----------------------------------End Login routes-----------------------------//


// //----------------------------------- Start Job routes-----------------------------//

Route::resource('/job',CompanyCreateJob::class)->middleware(['auth', 'companyAgent']);

// //----------------------------------- End Job routes-----------------------------//

//Email Verification Starts here

/*
Route::get('/email/verify', function () {
    return view('auth.verify');
})->middleware('auth')->name('verification.notice');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

*/

//Email Verification Ends here

//Password Reset Starts Here

/*

Route::get('/forgot-password', function () {
    return view('auth.passwords.email');
})->middleware('guest')->name('password.request');

Route::post('/forgot-password', function (Request $request) {
    $request->validate(['email' => 'required|email']);

    $status = Password::sendResetLink(
        $request->only('email')
    );

    return $status === Password::RESET_LINK_SENT
                ? back()->with(['status' => __($status)])
                : back()->withErrors(['email' => __($status)]);
})->middleware('guest')->name('password.email');

*/
// Password Reset Ends here