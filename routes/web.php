<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\LaporanInfrastrukturController;

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

Route::get('/', function () {
    return view('index');
});
Route::get('/profilperangkatdaerah/profil', [FrontController::class, 'profil']);
Route::get('/laporaninfrastruktur/index', [LaporanInfrastrukturController::class, 'index']);
Route::post('/profilperangkatdaerah/profil/create', [FrontController::class, 'store']);