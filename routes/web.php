<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

Route::prefix('customer')->name('customer.')->group(function(){
    Route::get('/' , [CustomerController::class, 'index'])->name('index');
    Route::get('/create' , [CustomerController::class, 'create'])->name('create');
    Route::post('/store' , [CustomerController::class, 'store'])->name('store');
    Route::get('/destroy' , [CustomerController::class, 'destroy'])->name('destroy');
});

Route::get('/', function () {
    return view('index');
})->middleware(['auth']);

require __DIR__.'/auth.php';
