<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\MedicamentoController;
use App\Http\Controllers\Admin\FabricanteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::redirect('/', '/admin/medicamentos');

Route::prefix('admin')->name('admin.')->group(function(){

    Route::resource('medicamentos', MedicamentoController::class);
    Route::resource('fabricantes', FabricanteController::class)->except(['show']);
});

