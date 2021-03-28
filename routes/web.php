<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomePageController;
use App\Http\Controllers\GalleryPageController;
use App\Http\Controllers\ContactPageController;

use App\Http\Controllers\WindowsPageController;
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

Route::get('/', [HomePageController::class, 'index'])->name('home_page');
Route::get('/gallery', [GalleryPageController::class, 'index'])->name('gallery_page');
Route::get('/contact', [ContactPageController::class, 'index'])->name('contact_page');

Route::get('/windows', [WindowsPageController::class, 'index'])->name('windows_page');
Route::get('/windows/alumiinium', [WindowsPageController::class, 'index_alumiinium'])->name('windows_alumiinium_page');
Route::get('/windows/puit-alumiinium', [WindowsPageController::class, 'index_puit_alumiinium'])->name('windows_puit_alumiinium_page');
Route::get('/windows/puit-aknad', [WindowsPageController::class, 'index_puit_aknad'])->name('windows_puit_aknad_page');
Route::get('/windows/pvc-aknad', [WindowsPageController::class, 'index_pvc_aknad'])->name('windows_pvc_aknad_page');
