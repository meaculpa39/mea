<?php

use App\Http\Controllers;
use App\Http\Controllers\Admin\main\AdminController;
use App\Http\Controllers\Main\IndexController;
use Illuminate\Support\Facades\Route;

Route::name('main.')->group(function() {
    Route::get('/', IndexController::class);
});

Route::prefix('admin')->group(function (){
    Route::name('main')->group(function() {
        Route::get('/', AdminController::class);
    });
    Route::prefix('categories')->group(function() {
        Route::get('/', Controllers\Admin\Category\CategoryController::class)->name( 'admin.category.index');
        Route::get('/create', Controllers\Admin\Category\CreateController::class)->name( 'admin.category.create');
        Route::post('/', Controllers\Admin\Category\StoreController::class)->name( 'admin.category.store');
        Route::get('/{category}', Controllers\Admin\Category\ShowController::class)->name( 'admin.category.show');
        Route::get('/{category}/edit', Controllers\Admin\Category\EditController::class)->name( 'admin.category.edit');
        Route::patch('/{category}', Controllers\Admin\Category\UpdateController::class)->name( 'admin.category.update');
    });
});
Auth::routes();
