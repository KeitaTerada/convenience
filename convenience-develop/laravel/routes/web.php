<?php

use App\Http\Controllers\GuzzleController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

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

//TOPページ
Route::get('/', function () {
    return view('convenience');
});


//ガチャ結果
Route::get('/result', [
    App\Http\Controllers\IndexController::class,
    'gacha'
]);

//スクレイピング
Route::get('/scraping',[GuzzleController::class,'getContents']);