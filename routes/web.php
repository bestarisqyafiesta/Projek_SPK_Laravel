<?php

use App\Http\Controllers\AlternativeController;
use App\Http\Controllers\CriteriaRatingController;
use App\Http\Controllers\CriteriaWeightController;
use App\Http\Controllers\DecisionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RankController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\AlternatifController;
use App\Http\Controllers\NormalizationController;


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

Route::get('/pegawai', [EmployeeController::class, 'index'])->name('pegawai');

Route::get('/tambahpegawai', [EmployeeController::class, 'tambahpegawai'])->name('tambahpegawai');

Route::get('/insertdata', [EmployeeController::class, 'insertdata'])->name('insertdata');

Route::get('/tampilkandata/{id}', [EmployeeController::class, 'tampilkandata'])->name('tampilkandata');

Route::get('/updatedata/{id}', [EmployeeController::class, 'updatedata'])->name('updatedata');

Route::get('/delete/{id}', [EmployeeController::class, 'delete'])->name('delete');

Route::get('/login', [LoginController::class, 'login'])->name('login');

Route::get('/loginproses', [LoginController::class, 'loginproses'])->name('loginproses');

Route::get('/register', [LoginController::class, 'register'])->name('register');

Route::get('/registeruser', [LoginController::class, 'registeruser'])->name('registeruser');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/kriteria', [KriteriaController::class, 'kriteria'])->name('kriteria');

Route::get('/tambahkriteria', [KriteriaController::class, 'tambahkriteria'])->name('tambahkriteria');

Route::get('/insertkriteria', [KriteriaController::class, 'insertkriteria'])->name('insertkriteria');

Route::get('/tampilkankriteria/{id}', [KriteriaController::class, 'tampilkankriteria'])->name('tampilkankriteria');

Route::get('/updatekriteria/{id}', [KriteriaController::class, 'updatekriteria'])->name('updatekriteria');

Route::get('/alternatif', [AlternatifController::class, 'alternatif'])->name('alternatif');

Route::get('/tambahalternatif', [AlternatifController::class, 'tambahalternatif'])->name('tambahalternatif');

Route::get('/insertalternatif', [AlternatifController::class, 'insertalternatif'])->name('insertalternatif');

Route::get('/tampilkanalternatif/{id}', [AlternatifController::class, 'tampilkanalternatif'])->name('tampilkanalternatif');

Route::get('/updatealternatif/{id}', [AlternatifController::class, 'updatealternatif'])->name('updatealternatif');

Route::get('/', [HomeController::class, 'index']);

Route::resources([
'alternatives' => AlternativeController::class,
'criteriaratings' => CriteriaRatingController::class,
'criteriaweights' => CriteriaWeightController::class
]);

Route::get('home', [HomeController::class, 'index']);

Route::get('decision', [DecisionController::class, 'index']);

Route::get('normalization', [NormalizationController::class, 'index']);

Route::get('rank', [RankController::class, 'index']);
