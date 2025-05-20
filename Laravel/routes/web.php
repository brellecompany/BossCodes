<?php

use App\Http\Controllers\NovoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

Route::get('/', function () {
    return view('pagina1');
});

Route::get('/teste', [TestController::class, 'teste'])->name('teste');

Route::post('/pagina2', function () {
    return view('pagina2');
});

Route::resource('Novo', NovoController::class);