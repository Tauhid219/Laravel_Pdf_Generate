<?php

use App\Http\Controllers\PdfController;
use App\Http\Controllers\ProductController;
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

Route::get('generate-pdf', [PdfController::class, 'generatePDF'])->name('generatepdf');
Route::get('showproduct', [PdfController::class, 'showproduct'])->name('showproduct');
Route::get('showdata', [PdfController::class, 'showdata'])->name('showdata');

Route::resource('product', ProductController::class)->names('pr');
