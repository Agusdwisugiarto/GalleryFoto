<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\ExploreController;

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
Route::middleware('guest')->group(function(){

    //view sebelum login               
Route::get('/index', [ViewController::class, 'index']);
Route::get('/sign_in', [ViewController::class, 'sign_in'])->name('login');
Route::get('/sign_up', [ViewController::class, 'sign_up']);

                      //procces
Route::post('/login', [UserController::class, 'login']); 
Route::post('/register', [UserController::class, 'register']);
});


Route::middleware('auth')->group(function(){
    //Tampilan setelah login               
    Route::get('/index2', [ViewController::class, 'index_2']);
    Route::get('/like', [ViewController::class, 'like']);
    Route::get('/logout', [UserController::class, 'logout']);
    Route::get('/upload', [ViewController::class, 'upload']);
    Route::get('/detail/{id}', [UserController::class, 'detail']);
    Route::post('/upload_foto', [UserController::class, 'upload_foto']);
    Route::get('/profil', [ViewController::class, 'profil']);
    Route::get('/updateprofil', [ViewController::class, 'update']);
    Route::get('/ubahpass', [ViewController::class, 'ubahpass']);
    Route::get('/buatalbum', [ViewController::class, 'buatalbum']);
    Route::post('/buat_album', [UserController::class, 'buat_album']);
    Route::get('/album/{id}', [ViewController::class, 'album']);
    Route::post('/change-password', [UserController::class, 'ubahpassword']);
    Route::get('/search', [UserController::class, 'search']);
    Route::post('/ubahprofil', [UserController::class, 'editprofile']);
    Route::post('/addkomentar', [UserController::class, 'komen']);
    Route::get('/deleteFoto/{id}', [UserController::class, 'deleteFoto']);
    Route::get('/deleteAlbum/{id}', [UserController::class, 'deleteAlbum']);
    Route::get('/editpostingan/{id}', [ViewController::class, 'edit']);
    Route::post('/updatepostingan/{id}', [UserController::class, 'updatepos']);
    Route::get('/profillain/{id}', [ViewController::class, 'profilother']);
    Route::post('/likefoto', [UserController::class, 'likefoto']);
});





//detail
//uploadfoto
//profile
//like
//update profile
//lupapassword
