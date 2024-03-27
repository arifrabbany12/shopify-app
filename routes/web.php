<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\shopifyController;
use App\Http\Controllers\faqController;



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

// Route::get('/', function () {
//     return response("Welcome to Shopify App Development Course",200);
// })->name('home');



Route::get("/shop", [shopifyController::class, 'getDatails'])->name('shop');
Route::get('/hi/{name?}', [shopifyController::class, 'sayHi'])->name('hi');
// Route::get('/groups', [faqappController::class, 'getWelcome'])
//     ->name('groups');

Route::get('/grp',[faqController::class,'groupIndex'] )->name('grp');

