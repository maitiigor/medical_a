<?php

use Illuminate\Support\Facades\Route;

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

//get route for health worker page
Route::get('/register/health_worker', [\App\Http\Controllers\Auth\RegisterController::class,'showHealthWorkerRegisterForm']);
Route::get('/login/health_worker', [\App\Http\Controllers\Auth\LoginController::class,'showHealthWorkerLoginForm']);

//post route for health worker registration
Route::post('/register/health_worker', [\App\Http\Controllers\Auth\RegisterController::class,'createHealthWorker'])->name('health_worker.register.submit');
Route::post('/login/health_worker', [\App\Http\Controllers\Auth\LoginController::class,'healthWorkerLogin'])->name('health_worker.login.submit');
Route::view('/health_worker', 'health_worker');

// get route for patience login and registration
Route::get('/login/patience', [\App\Http\Controllers\Auth\LoginController::class,'showPatienceLoginForm']);
Route::get('/register/patience', [\App\Http\Controllers\Auth\RegisterController::class,'showPatienceRegisterForm'])->name('patience.register');

//post route for patience registration and login
Route::post('/login/patience', [\App\Http\Controllers\Auth\LoginController::class,'patienceLogin'])->name('patience.login.submit');
Route::post('/register/patience', [\App\Http\Controllers\Auth\RegisterController::class,'createPatience'])->name('patience.register.submit');


Route::middleware(['auth:health_worker'])->group(function (){

});

// authenticated health worker route
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/health_worker', [App\Http\Controllers\HomeController::class, 'healthWorkerIndex'])->name('health.work.home');
// route for loading charts

Route::get('/chart',[App\Http\Controllers\ChartController::class,'index']);

//route to get patience table for in health worker dashboard


//Route to filter Patience record
Route::get('/patience_table',[App\Http\Controllers\FilterController::class,'index']);
Route::post('/filter',[App\Http\Controllers\FilterController::class,'filter']);
// Route for Patience encounter
Route::get('/patience_encounter/{id}',[App\Http\Controllers\HomeController::class,'showPatienceEncounter']);
Route::get('/patience',[App\Http\Controllers\PatiencePageController::class,'index'])->middleware('auth:patience');
Route::Post('/patience_encounter/{id}',[App\Http\Controllers\HomeController::class,'submitPatienceEncounter']);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route that sends doctors notification of new Patience file transfered
Route::get('/notifications', [App\Http\Controllers\NotificationController::class, 'healthWorkerNotification'])->name('home');

Route::get('chat',[App\Http\Controllers\ChatController::class,'index']);
Route::get('get_doctors',[App\Http\Controllers\ChatController::class,'getDoctors']);
Route::post('/chat',[App\Http\Controllers\ChatController::class,'submitMessage']);
Route::post('/logout-patience',[App\Http\Controllers\Auth\LoginController::class,'logoutPatience']);
Route::post('/logout-health_worker',[App\Http\Controllers\Auth\LoginController::class,'logoutHealthWorker']);