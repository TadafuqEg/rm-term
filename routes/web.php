<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WebsiteController;

/*
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

////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////dashboard//////////////////////////////////////
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [WebsiteController::class, 'index'])->name('home');
Route::get('/market_share', [WebsiteController::class, 'market_share'])->name('market_share');
Route::get('/executive_summary', [WebsiteController::class, 'executive_summary'])->name('executive_summary');
Route::get('/market_analysis', [WebsiteController::class, 'market_analysis'])->name('market_analysis');
Route::get('/competitor_analysis', [WebsiteController::class, 'competitor_analysis'])->name('competitor_analysis');
Route::get('/growth_strategies', [WebsiteController::class, 'growth_strategies'])->name('growth_strategies');
Route::get('/about', [WebsiteController::class, 'about'])->name('about');
