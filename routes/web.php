<?php

use App\Http\Controllers\Admin\PropertyController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/property',[PropertyController::class,'index'])->name('admin.property');
Route::delete('/admin/property/{property}',[PropertyController::class,'destroy'])->name('admin.property.destroy');
Route::get('/admin/property/{property}',[PropertyController::class,'edit'])->name('admin.property.edit');
Route::put('/admin/property/{property}', [PropertyController::class, 'update'])->name('admin.property.update');