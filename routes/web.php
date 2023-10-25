<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarStageController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\SpecificationCategoryController;



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
    return view('auth.login');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

//car_satge route

Route::prefix('car_stage')->group(function () {

Route::get('create',[CarStageController::class,'create'])->name('car_stage.create');
Route::post('store',[CarStageController::class,'store'])->name('car_stage.store');
Route::get('view',[CarStageController::class,'view'])->name('car_stage.view');
Route::get('{id}/edit',[CarStageController::class,'edit'])->name('car_stage.edit');
Route::put('{id}/update',[CarStageController::class,'update'])->name('car_stage.update');
Route::get('{id}/delete',[CarStageController::class,'destroy'])->name('car_stage.delete');
});

//specification category Route

Route::prefix('spec_cat')->group(function () {
    Route::get('create', [SpecificationCategoryController::class,'create'])->name('spec_cat.create');
    Route::post('store',[SpecificationCategoryController::class,'store'])->name('spec_cat.store');
    Route::get('view',[SpecificationCategoryController::class,'view'])->name('spec_cat.view');
    Route::get('{id}/edit',[SpecificationCategoryController::class,'edit'])->name('spec_cat.edit');
    Route::put('{id}/update',[SpecificationCategoryController::class,'update'])->name('spec_cat.update');
    Route::get('{id}/delete', [SpecificationCategoryController::class,'delete'])->name('spec_cat.delete');
    Route::post('status',[SpecificationCategoryController::class,'toggleStatus'])->name('spec_cat.status');
});

//brand route

Route::prefix('brand')->group(function () {
Route::get('create',[BrandController::class,'create'])->name('brand.create');
Route::post('store',[BrandController::class,'store'])->name('brand.store');
Route::get('view',[BrandController::class,'view'])->name('brand.view');
Route::post('status',[BrandController::class,'toggleStatus'])->name('brand.status');
Route::get('{id}/edit',[BrandController::class,'edit'])->name('brand.edit');
Route::put('{id}/update',[BrandController::class,'update'])->name('brand.update');
Route::get('{id}/delete',[BrandController::class,'destroy'])->name('brand.delete');

});



});

require __DIR__.'/auth.php';
