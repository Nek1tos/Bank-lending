<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\Admin\LoanController as AdminLoanController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index'])->name('main');
Route::get('/about', [MainController::class, 'about'])->name('about');
Route::get('/loans', [LoanController::class, 'index'])->name('loans.index');
Route::get('/loans/{id}', [LoanController::class, 'show'])->name('loans.show');

Route::middleware('auth')->group(function () {
    Route::resource('admin/loans', AdminLoanController::class)->names([
        'index' => 'admin.loans.index',
        'create' => 'admin.loans.create',
        'store' => 'admin.loans.store',
        'show' => 'admin.loans.show',
        'edit' => 'admin.loans.edit',
        'update' => 'admin.loans.update',
        'destroy' => 'admin.loans.destroy',
    ]);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
