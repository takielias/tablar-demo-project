<?php

use App\Http\Controllers\LayoutViewController;
use App\Http\Controllers\TablarkitController;
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

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/layout/{name}', [LayoutViewController::class, 'layout'])->name('layout-view');

Route::group(['prefix' => 'tablar-kit', 'middleware' => ['auth']], function () {
    Route::get('/input', [TablarkitController::class, 'input'])->name('tablar-kit.input');
    Route::get('/button', [TablarkitController::class, 'button'])->name('tablar-kit.button');
    Route::get('/card', [TablarkitController::class, 'card'])->name('tablar-kit.card');
    Route::get('/dropdown', [TablarkitController::class, 'dropdown'])->name('tablar-kit.dropdown');
    Route::get('/item-search', [TablarkitController::class, 'itemSearch'])->name('tablar-kit.item.search');
    Route::get('/target-list-1', [TablarkitController::class, 'getTargetList'])->name('get.product.target.list.1');
    Route::get('/target-list-2', [TablarkitController::class, 'getTargetList'])->name('get.product.target.list.2');
    Route::get('/datepicker', [TablarkitController::class, 'datepicker'])->name('tablar-kit.datepicker');
    Route::get('/file-upload', [TablarkitController::class, 'fileupload'])->name('tablar-kit.file.upload');
    Route::get('/datatable', [TablarkitController::class, 'datatable'])->name('tablar-kit.datatable');
    Route::get('/editor', [TablarkitController::class, 'editor'])->name('tablar-kit.editor');
});
