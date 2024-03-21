<?php

use Illuminate\Support\Facades\Route;

Route::get('appointment',[App\Http\Controllers\Bookcontroller::class,'index'])->name('appointment');
Route::get('appointment/create',[App\Http\Controllers\Bookcontroller::class,'create']);
Route::post('appointment/create',[App\Http\Controllers\Bookcontroller::class,'store']);
Route::delete('/appointment/delete/{id}', [App\Http\Controllers\Bookcontroller::class, 'delete'])->name('appointment.delete');
Route::get('/appointment/{id}/edit', [App\Http\Controllers\Bookcontroller::class, 'edit'])->name('appointment.edit');
Route::put('/appointment/update/{id}', [App\Http\Controllers\Bookcontroller::class, 'update'])->name('appointment.update');

Route::get('/', function () {
    return view('welcome');
});
