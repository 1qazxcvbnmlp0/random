<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// use \App\Http\Controllers\CompanyController; 
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


/*
|
|
|
|
|
Custome Routes List
|
|
|
|
|
*/


// // Route::apiResource('company', CompanyController::class );

// // ------------------------------------- Start Company Registeration routes-----------------------------------------

// // Route::get('registerCompany', function(){
// //     return view('auth\registerCompany');
// // })->name('registerCompany')->middleware('guest');

// Route::apiResource('setupCompanyProfile', CompanyController::class);

// // ------------------------------------- End Company Registeration routes-----------------------------------------


// // During login Selectes the type of user, i.e. the role using the following routes/ 
// // -----------------------------------Start Login Routes ----------------------------//

// Route::get('/home', 'HomeController@index')->name('home');

// // Route for admin
// Route::get('/home', ['middleware'=>['auth', 'admin'], function(){
//     return view('admin');
// }])->name('adminHome');

// // Route For recruiter
// Route::get('/companyHome', ['middleware'=>['auth', 'companyAgent'], function(){
//     return view('recruiter/job_index');
// }])->name('recruiterHome');

// // Route for applicant
// Route::get('/applicantHome', ['middleware'=>['auth'], function(){
//     return view('applicant');
// }])->name('applicantHome');

// //-----------------------------------End Login routes-----------------------------//


// //----------------------------------- Start Job routes-----------------------------//

// Route::resource('/job',CompanyCreateJob::class)->middleware(['auth', 'companyAgent']);

// //----------------------------------- End Job routes-----------------------------//


/*------------------ New company API Routes---------------------*/ 



Route::group(['prefix'=>'company'], function(){
    Route::apiResource('/info', \Api\Company\CompanyController::class);
});

Route::group(['prefix'=>'company/{company}'], function(){
    Route::apiResource('/jobs', \Api\Company\JobController::class);
});