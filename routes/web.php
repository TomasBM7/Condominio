<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HouseController;
use Illuminate\Support\Facades\Route;
// importar un modelo para poder utilizarlo

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



Route::middleware('auth')->group(function () {

    Route::view('/dashboard', 'dashboard')->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/condominio', function(){
        return view('condominio.index');
    })->name('condominio.index');

    Route::get('/house', [HouseController::class, 'index'])->name('house');
    Route::get('/house/{house}', [HouseController::class, 'show'])->name('house.show');

    Route::post('/condominio', function(){
        return 'procesando';
    });//->name('condominio.index');
});

require __DIR__.'/auth.php';
