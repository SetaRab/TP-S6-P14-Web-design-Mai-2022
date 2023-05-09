<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('Admin', function () {
    return view('LogAdmin');
});

Route::get('AccueilAdmin', function () {
    return view('AccueilAdmin');
});

Route::get('ajoutarticle', function () {
    return view('AjoutArticle');
});

Route::post('loginAdmin',[AdminController::class,'login']);
Route::post('loginClt',[ClientController::class,'login']);
Route::post('addArticle',[ArticleController::class,'addArticle']);
Route::post('addArticle',[ArticleController::class,'listArticle'])-> name('LogAdmin');
