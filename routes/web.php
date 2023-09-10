<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Log;

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

Route::get('/', [BrandController::class, 'index'])->name('brands.index');

Route::get('/edit/{brands}/brand', [BrandController::class, 'edit'],)->name('brands.edit');
Route::post('/edit/{brands}', [BrandController::class, 'update'],)->name('brands.update');

Route::get('/delete/{brands}', [BrandController::class, 'delete'],)->name('brands.delete');

Route::get('brands/show', [BrandController::class, 'brandList']);
Route::get('b', function () {
    
    return view('panel-admin.add-detail');
});


Route::get('show/{brand}', [BrandController::class, 'brandDescription'])->name('brand.detail');
Route::get('add-detail/{brand}', [BrandController::class, 'addDetail'])->name('add.detail');
Route::post('create-detail/{brand}', [BrandController::class, 'storeDetail'])->name('detail.store');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('panel-admin', [BrandController::class, 'panel'])->name('panel.show');
    Route::get('create', [BrandController::class, 'showcreate'])->name('brands.create');
    Route::post('/brands', [BrandController::class, 'store'])->name('brands.store');
});

require __DIR__ . '/auth.php';



