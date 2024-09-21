<?php

use App\Http\Controllers\Admin\PropertyController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/property',[PropertyController::class,'index'])->name('admin.property');
Route::delete('/admin/property/{property}',[PropertyController::class,'destroy'])->name('admin.property.destroy');