<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/myPage', [App\Http\Controllers\MyPageController::class, 'myPage'])->name('myPage');
Route::get('/create_menu', [App\Http\Controllers\PracticeMenuController::class, 'create'])->name('create_menu');
Route::post('/store', [App\Http\Controllers\PracticeMenuController::class, 'store'])->name('store');
Route::get('/search', [App\Http\Controllers\SearchController::class, 'search'])->name('search');
Route::get('/edit/{id}', [App\Http\Controllers\PracticeMenuController::class, 'edit'])->name('edit');
Route::get('/menu_card/{id}', [App\Http\Controllers\MenuCardController::class, 'menu_card'])->name('menu_card');
Route::get('/favorite_menu_card/{id}', [App\Http\Controllers\MenuCardController::class, 'favorite_menu_card'])->name('favorite_menu_card');
Route::post('/favorite_delete/{id}', [App\Http\Controllers\MenuCardController::class, 'delete'])->name('favorite_delete');
Route::get('/menu_card_edit/{id}', [App\Http\Controllers\MenuCardEditController::class, 'menu_card_edit'])->name('menu_card_edit');
Route::post('/update/{id}', [App\Http\Controllers\PracticeMenuController::class, 'update'])->name('update');
Route::post('/delete/{id}', [App\Http\Controllers\PracticeMenuController::class, 'delete'])->name('delete');
Route::get('/store_card/{id}', [App\Http\Controllers\MenuCardController::class, 'store_card'])->name('store_card');
Route::post('/search_result', [App\Http\Controllers\SearchController::class, 'search_result'])->name('search_result');
Route::post('/create_today_menu', [App\Http\Controllers\CreateTodayMenuController::class, 'create_today_menu'])->name('create_today_menu');
Route::get('/sample', [App\Http\Controllers\GeneratePdfController::class, 'generate_pdf']);
Route::get('/profile_card_edit', [App\Http\Controllers\ProfileCardEditController::class, 'profile_card_edit'])->name('profile_card_edit');
Route::post('/update_profile/{id}', [App\Http\Controllers\ProfileCardEditController::class, 'update'])->name('update');

require __DIR__ . '/auth.php';
