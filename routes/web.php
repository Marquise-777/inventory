<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\SupplierController;
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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

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

    Route::get('/supplier', [SupplierController::class, 'index'])->name('SupList');
    Route::get('/addsupplier', [SupplierController::class, 'create']);
    Route::post('/addsupplier', [SupplierController::class, 'store']);
    Route::delete('/deletesupplier/{id}', [SupplierController::class, 'destroy']);

    Route::get('plans', [PlanController::class, 'index'])->name('pricing');
    Route::get('plans/{plan}', [PlanController::class, 'show'])->name("plans.show");
    Route::post('subscription', [PlanController::class, 'subscription'])->name("subscription.create");

    Route::get('sale', [SalesController::class, 'create'])->name('viewsale');
    Route::post('sale', [SalesController::class, 'store'])->name('addsale');
    Route::get('customers', [SalesController::class, 'index'])->name('viewsale');
    Route::get('purchase/{id}', [SalesController::class, 'show'])->name('viewsale');
    Route::get('invoice/{id}', [SalesController::class, 'edit'])->name('testinvoice');

    Route::get('/about', function () {
        return view('about');
    });
});


require __DIR__ . '/auth.php';
