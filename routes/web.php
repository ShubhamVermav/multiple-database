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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('index');
});

// Route::view('p','html');
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;

// Public auth routes
Route::get('/login', [LoginController::class, 'showLoginForm']);
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout']);


// Protected routes with role-based access
Route::middleware(['auth', 'role:1,2'])->group(function () {
    Route::get('/user/view', [UserController::class, 'index']);
    Route::get('/users/create', [UserController::class, 'create']);
    Route::post('/users/store', [UserController::class, 'store']);
   // Route::view('subadd','subadmin_add');
   
    Route::get('/mainusers/edit/{mainuser}', [UserController::class, 'edit']);
    Route::put('/mainusers/update/{id}', [UserController::class, 'update']);
    Route::delete('/mainusers/delete/{id}', [UserController::class, 'destroy']);


});

