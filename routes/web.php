<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

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

Route::get('/', [MovieController::class, 'index']);
Route::get('/movies', [MovieController::class, 'index']);
Route::get('/movies/{movie}', [MovieController::class, 'show']);
Route::any('/{any}', function () {
    return redirect('/movies');
});

// Route::get('/movies', MovieController::class, 'index');
// Route::get('/movies/{id}', MovieController::class, 'show');

// Route::middleware(['auth:sanctum', 'verified', 'role:admin'])->group(function () {
//     Route::get('/dashboard', function (){
//         return view('welcome');
//     })->name('dashboard');

    
// });
