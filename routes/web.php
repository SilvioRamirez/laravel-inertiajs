<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\EmpleadosController;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    
    Route::get('/dashboard', function () { return Inertia::render('Dashboard');})->name('dashboard');


    /* El prefix se utiliza para luego escribir menos en las rutas que se definan dentro*/
    Route::prefix('empleados')->name('empleados.')->group(function(){

        Route::get('/', [EmpleadosController::class, 'index'])->name('index');
        Route::get('/create', [EmpleadosController::class, 'create'])->name('create');
        Route::post('/', [EmpleadosController::class, 'store'])->name('store');
        Route::get('{empleados}/edit', [EmpleadosController::class, 'edit'])->name('edit');
    
        Route::get('/empleados', [EmpleadosController::class, 'datatables'])->name('datatables');
    });

});
