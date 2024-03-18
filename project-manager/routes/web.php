<?php
use App\Http\Controllers\ProgettoController;
use App\Http\Controllers\AttivitaController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
 
Route::resource('/progetto', ProgettoController::class);
Route::get('/progetto', [ProgettoController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('progetto');
    Route::post('/progetto', [ProgettoController::class, 'store'])->name('progetto.store');

Route::resource('/attivita', AttivitaController::class)->middleware(['auth', 'verified']);

Route::get('/progetto/{progetto}/edit', [ProgettoController::class, 'edit'])->name('progetto.edit');
Route::put('/progetto/{progetto}', [ProgettoController::class, 'update'])->name('progetto.update');

Route::delete('/progetto/{progetto}', [ProgettoController::class, 'destroy'])->name('progetto.destroy');



Route::get('/attivita/create/{progetto_id}', [AttivitaController::class, 'create'])->name('attivita.create');
Route::post('/attivita/store', [AttivitaController::class, 'store'])->name('attivita.store');
Route::get('/activities/{attivita}/edit', [AttivitaController::class, 'edit'])->name('attivita.edit');

require __DIR__.'/auth.php';
