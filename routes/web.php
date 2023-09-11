<?php

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
use App\Http\Controllers\UserController;


Route::post('/registergo', [UserController::class, 'registerUser']);
Route::get('/getallusers', [UserController::class, 'showForm']);
Route::get('/getuser', [UserController::class, 'getUser']);
Route::get('/', function () {
    return view('welcome',);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/livewire/dashboard', function () {
        return view('dashboard');
    })->name('dashboard3');


Route::get('/registergo', [UserController::class, 'registerUser'])->name('registerUser');


//  kyc
Route::get('/registerkyc', [UserController::class, 'kycProfileOne'])->name('kycProfileOne');
Route::post('/registerkyc2', [UserController::class, 'kycProfileTwo'])->name('kycProfileTwo');
Route::post('/registerkyc3', [UserController::class, 'kycProfileThree'])->name('kycProfileThree');
Route::post('/registerkyc4', [UserController::class, 'kycProfileFour'])->name('kycProfileFour');
Route::post('/registerkyc5', [UserController::class, 'kycProfileFive'])->name('kycProfileFive');
// kycProfileSix
Route::post('/registerkyc6', [UserController::class, 'kycProfileSix'])->name('kycProfileSix');
// kycBiomatrics
Route::post('/kycBiomatrics', [UserController::class, 'kycBiomatrics'])->name('kycBiomatrics');
// photoes
Route::post('/kycphotoes', [UserController::class, 'kycphotoes'])->name('kycphotoes');

Route::post('/registergopost', [UserController::class, 'registerUser'])->name('registergopost');
Route::post('/registergonow2', [UserController::class, 'registerUserNow2'])->name('registergonow2');

Route::get('/getallusers', [UserController::class, 'showForm']);
Route::get('/getuser/{user_id}', [UserController::class, 'getUser'])->name('getuser');

Route::get('/deleteuser/{user_id}', [UserController::class, 'deleteUser'])->name('deleteuser');

    Route::get('/', [UserController::class, 'showForm'])->name('dashboard');
// profiles
Route::get('/profiles', [UserController::class, 'showForm'])->name('profiles');

});
