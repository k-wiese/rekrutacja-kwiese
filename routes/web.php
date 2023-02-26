<?php

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


Route::get('/', \App\Http\Livewire\CalendarComponent::class)->name('calendar');
Route::get('/excel', \App\Http\Livewire\ExcelComponent::class)->name('excel');
Route::get('/form', \App\Http\Livewire\FormComponent::class)->name('form');
Route::get('/debug', \App\Http\Livewire\DebugComponent::class)->name('debug');
Route::get('/project', \App\Http\Livewire\ProjectComponent::class)->name('project');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
