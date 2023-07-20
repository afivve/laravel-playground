<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropinsiController;
use App\Http\Controllers\KabupatenController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

route::controller(PropinsiController::class)->group(function () {
    route::get('propinsi', 'index');
    route::get('propinsi/create', 'create');
    route::post('propinsi', 'store');

    route::get('propinsi/edit/{id}', 'edit');
    route::put('propinsi/update/{id}', 'update');
    route::delete('propinsi/delete/{id}', 'destroy');
});
