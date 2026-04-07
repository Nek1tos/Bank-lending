<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\Admin\LoanController as AdminLoanController;

Route::get('/', [MainController::class, 'index'])->name('main');
Route::get('/about', [MainController::class, 'about'])->name('about');
Route::get('/loans', [LoanController::class, 'index'])->name('loans.index');
Route::get('/loans/{id}', [LoanController::class, 'show'])->name('loans.show');

Route::resource('admin/loans', AdminLoanController::class)->names([
    'index' => 'admin.loans.index',
    'create' => 'admin.loans.create',
    'store' => 'admin.loans.store',
    'show' => 'admin.loans.show',
    'edit' => 'admin.loans.edit',
    'update' => 'admin.loans.update',
    'destroy' => 'admin.loans.destroy',
]);