<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SignupController;
// use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\UserController;

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

// Route::get('/', [UserController::class, 'index']);
 Route::get('/', function () {
     return view('auth');
 });

//login
Route::get('/auth', [AuthController::class, 'auth']);
Route::get('/dashboard', [AuthController::class, 'dashboard']);
Route::post('/authLogin', [AuthController::class, 'authLogin']);
Route::get('/authLogout', [AuthController::class, 'authLogout']);
Route::post('/adminLogin', [AuthController::class, 'adminLogin']);
Route::get('/adminLogout', [AuthController::class, 'adminLogout']);


//signup
Route::get('/signup', [SignupController::class, 'signup']);
Route::post('/donesignup', [SignupController::class, 'donesignup']);

//admin
Route::get('/homeadmin', [JadwalController::class, 'jadwalRead']);
Route::post('/jadwalAdd', [JadwalController::class, 'jadwalAdd']);
Route::post('/jadwalEdit', [JadwalController::class, 'jadwalEdit']);
Route::post('/jadwalDelete', [JadwalController::class, 'jadwalDelete']);

Route::get('/beritaadmin', [BeritaController::class, 'artikelRead']);
Route::post('/artikelAdd', [BeritaController::class, 'artikelAdd']);
Route::post('/artikelEdit', [BeritaController::class, 'artikelEdit']);
Route::post('/artikelDelete', [BeritaController::class, 'artikelDelete']);

Route::get('/home', [PageController::class, 'home']);
Route::get('/kalender', [PageController::class, 'kalender']);
Route::get('/kalenderDetail/{id}', [PageController::class, 'kalenderDetail']);
Route::get('/artikel', [PageController::class, 'artikel']);

//navbar
Route::get('/home', [UserController::class, 'home']);
Route::get('/berita', [UserController::class, 'berita']);
Route::get('/jadwal', [UserController::class, 'jadwal']);
// Route::get('/kalender', [UserController::class, 'kalender']);
Route::get('/pokokajaran', [UserController::class, 'pojokajaran']);
Route::get('/profilGKJ', [UserController::class, 'profilgkj']);
Route::get('/profilKlasis', [UserController::class, 'profilklasis']);
Route::get('/profilmars', [UserController::class, 'profilmars']);
Route::get('/profilstrukturgereja', [UserController::class, 'profilstrukturgereja']);
Route::get('/tatagereja', [UserController::class, 'tatagereja']);
Route::get('/artikelpojok', [UserController::class, 'artikelpojok']);
Route::get('/kategorigereja', [UserController::class, 'kategorigereja']);
Route::get('/kategorilembaga', [UserController::class, 'kategorilembaga']);
Route::get('/kategorisinode', [UserController::class, 'kategorisinode']);
Route::get('/isiberitasinode', [UserController::class, 'isiberitasinode']);
Route::get('/profillembaga', [UserController::class, 'profillembaga']);
Route::get('/kategoriklasis', [UserController::class, 'kategoriklasis']);