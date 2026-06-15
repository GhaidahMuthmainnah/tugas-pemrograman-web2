<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KostController;

Route::redirect('/', '/kost');
Route::resource('kost', KostController::class);
