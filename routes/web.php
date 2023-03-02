<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\EmpleadosController;
use App\Http\Controllers\UsersController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

/*
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    
    Route::get('/dashboard', function () { return Inertia::render('Dashboard');})->name('dashboard');

    Route::prefix('empleados')->name('empleados.')->group(function(){
        Route::get('/', [EmpleadosController::class, 'index'])->name('index');
        Route::get('/create', [EmpleadosController::class, 'create'])->name('create');
        Route::post('/', [EmpleadosController::class, 'store'])->name('store');
        Route::get('{empleados}/edit', [EmpleadosController::class, 'edit'])->name('edit');
        Route::put('{empleados}', [EmpleadosController::class, 'update'])->name('update');
        Route::put('{empleados}/delete', [EmpleadosController::class, 'destroy'])->name('destroy');
    });
}); */

/* Rutas con Middleware */

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {

    /* Route::get('/', [DashboardController::class, 'index'])->name('dashboard'); */
    Route::get('/dashboard', function () { return Inertia::render('Dashboard');})->name('dashboard');

    Route::prefix('admin')->name('admin.')->middleware(['role:admin'])->group(function(){
        Route::prefix('empleados')->name('empleados.')->group(function (){
            Route::get('/', [EmpleadosController::class, 'index'])->name('index');
            Route::get('/create', [EmpleadosController::class, 'create'])->name('create');
            Route::post('/', [EmpleadosController::class, 'store'])->name('store');
            Route::get('{empleados}/edit', [EmpleadosController::class, 'edit'])->name('edit');
            Route::put('{empleados}', [EmpleadosController::class, 'update'])->name('update');
            Route::put('{empleados}/delete', [EmpleadosController::class, 'destroy'])->name('destroy');
        });
    
        Route::prefix('users')->name('users.')->middleware(['can:ver:users'])->group(function (){
            Route::get('/', [UsersController::class, 'index'])->name('index');
            Route::get('/create', [UsersController::class, 'create'])->name('create');
            Route::post('/', [UsersController::class, 'store'])->name('store');
            Route::get('{users}/edit', [UsersController::class, 'edit'])->name('edit');
            Route::put('{users}', [UsersController::class, 'update'])->name('update');
            Route::put('{users}/delete', [UsersController::class, 'destroy'])->name('destroy');
        });

    });

    

    Route::prefix('roles')->name('roles.')->middleware(['can:ver:roles'])->group(function (){
        Route::get('/', [EmpleadosController::class, 'index'])->name('dashboard');
    });

    Route::prefix('permissions')->name('permissions.')->middleware(['can:ver:permissions'])->group(function (){
        Route::get('/', [EmpleadosController::class, 'index'])->name('dashboard');
    });

});