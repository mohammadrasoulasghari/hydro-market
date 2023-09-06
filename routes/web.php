<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProfileController;
use App\Models\Brand;
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

Route::get('/',[BrandController::class,'index'], )->name('brands.index');
//create brands
Route::get('/create/brand',[BrandController::class,'create'], )->name('brands.create');
Route::post('/brands',[BrandController::class,'store'], )->name('brands.store');
//edit brands
Route::get('/edit/{brands}/brand',[BrandController::class,'edit'], )->name('brands.edit');
Route::post('/edit/{brands}',[BrandController::class,'update'], )->name('brands.update');

Route::get('brands/show',[BrandController::class,'brandList']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
