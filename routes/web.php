<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\ProfileController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/items', [ItemsController::class, 'index'])->name('itemsShow');
    Route::get('/add', [ItemsController::class, 'create'])->name('itemsAdd');
    Route::get('/display/{id}', [ItemsController::class, 'display']);
    Route::post('items', [ItemsController::class, 'store']);
    Route::get('/items/{id}', [ItemsController::class, 'show']);
    Route::put('/items/{id}', [ItemsController::class, 'update']);
    Route::delete('/items/{id}', [ItemsController::class, 'destroy']);

    Route::get('/category', [CategoryController::class, 'index'])->name('CatList');
    Route::get('/addcat', [CategoryController::class, 'create']);
    Route::post('/addCategory', [CategoryController::class, 'store']);
    Route::delete('/deletecat/{id}', [CategoryController::class, 'destroy']);
});


require __DIR__ . '/auth.php';
