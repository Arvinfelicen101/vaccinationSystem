<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\PatientController;

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

Route::middleware(['auth', 'verified'])->group(function() {
    Route::get('/patientProfile/create', [PatientController::Class, 'create'])->name('patientProfile.create');
    Route::post('/patientProfile', [PatientController::Class, 'store'])->name('patientProfile.store');
    Route::get('/patientProfile', [PatientController::Class, 'index'])->name('patientProfile.index');
    Route::put('/patientProfile/{patientInfo}', [PatientController::Class, 'update'])->name('patientProfile.update');
    Route::delete('/patientProfile/{patientInfo}', [PatientController::Class, 'destroy'])->name('patientProfile.destroy');
    Route::get('/patientProfile/{patientInfo}/edit', [PatientController::Class, 'edit'])->name('patientProfile.edit');
});



Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
    
require __DIR__.'/auth.php';
