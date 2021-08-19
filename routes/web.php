<?php

use App\Http\Controllers\CurrencyConverterController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CurrencyConverterController::class, 'index']);
Route::post('/convert', [CurrencyConverterController::class, 'convert']);
