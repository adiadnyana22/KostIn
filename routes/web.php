<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\KostOwner\KostOwnerController;
use App\Http\Controllers\User\UserController;
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
})->name('welcome');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/kampus', function () {
    return view('kampus');
})->name('kampus');

Route::get('/search', function () {
    return view('search');
})->name('search');

Route::get('/area', function () {
    return view('area');
})->name('area');

Route::get('/detail', function () {
    return view('detail');
})->name('detail');

Route::group(['middleware' => ['user']], function () {
    Route::prefix('user/')->name('user/')->group(function () {
        Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
        Route::post('/updateAccount', [UserController::class, 'storeUpdateAccount'])->name('updateAccount');
    });
});

Route::group(['middleware' => ['kostOwner']], function () {
    Route::prefix('kostOwner/')->name('kostOwner/')->group(function () {
        Route::get('/dashboard', function () {
            return view('kostOwner.dashboard');
        })->name('dashboard');
        Route::get('/updateAccount', [UserController::class, 'dashboard'])->name('updateAccount');
        Route::post('/updateAccount', [UserController::class, 'storeUpdateAccount'])->name('updateAccount');
        Route::get('/manageKost', [KostOwnerController::class, 'createManageKost'])->name('manageKost');
        Route::post('/manageKost', [KostOwnerController::class, 'createManageKost'])->name('manageKost');
        Route::get('/tambahKost', [KostOwnerController::class, 'createTambahKost'])->name('tambahKost');
        Route::post('/tambahKost', [KostOwnerController::class, 'storeTambahKost'])->name('tambahKost');
        Route::get('/editKost/{id}', [KostOwnerController::class, 'createEditKost'])->name('editKost');
        Route::post('/storeEditKost', [KostOwnerController::class, 'storeEditKost'])->name('storeEditKost');
    });
});

Route::group(['middleware' => ['admin']], function () {
    Route::prefix('admin/')->name('admin/')->group(function () {
        Route::get('dashboard', [AdminController::class, 'index'])->name('dashboard');
    });
});


require __DIR__ . '/auth.php';
