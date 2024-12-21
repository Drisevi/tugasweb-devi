<?php

use App\Http\Controllers\BiodataController;
use Illuminate\Support\Facades\Route;

Route::resource('biodatas', BiodataController::class);
