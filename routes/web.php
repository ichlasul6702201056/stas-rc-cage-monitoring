<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\viewHandler;

Route::controller(viewHandler::class)->group(function() {
    Route::get('/', 'main');
    Route::get('/main', 'main');
    Route::get('/live', 'live');
    Route::get('/table', 'table');
    Route::get('/about', 'about');
});

