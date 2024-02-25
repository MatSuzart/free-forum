<?php

use App\Http\Controllers\PublicationController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PublicationController::class, 'index'])->name('index');
Route::post('upload', [PublicationController::class, 'upload'])->name('upload');
Route::post('delete/{id}', [PublicationController::class, 'delete'])->name('delete');
