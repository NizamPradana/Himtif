<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BphController;
use App\Http\Controllers\DivisiController;
use App\Http\Controllers\AnggotaDivisiController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProkerController;
use App\Http\Controllers\DetailProkerController;
use App\Http\Controllers\SiteSettingController;


Route::middleware(['auth'])->group(function (){
    
    // Route Hme
    Route::get('/dashboard', [HomeController::class, 'index']); 
    
    // Route BPH
    Route::get('/bph', [BphController::class, 'index']);
    Route::post('/bph/store', [BphController::class, 'store']);
    Route::post('/bph/update/{id}', [BphController::class, 'update']);
    Route::get('/bph/destroy/{id}', [BphController::class, 'destroy']);
    
    // Route Divisi
    Route::get('/divisi', [DivisiController::class, 'index']);
    Route::post('/divisi/store', [DivisiController::class, 'store']);
    Route::post('/divisi/update/{id}', [DivisiController::class, 'update']);
    Route::get('/divisi/destroy/{id}', [DivisiController::class, 'destroy']);
    
    // Route Anggota Divisi
    Route::get('/anggota/{id}', [AnggotaDivisiController::class, 'index']);
    Route::post('/anggota/store/', [AnggotaDivisiController::class, 'store']);
    Route::post('/anggota/update/{id}', [AnggotaDivisiController::class, 'update']);
    Route::get('/anggota/destroy/{id}/{id_divisi}', [AnggotaDivisiController::class, 'destroy']);
    
    // Route Proker
    Route::get('/proker', [ProkerController::class, 'index']);
    Route::post('/proker/store', [ProkerController::class, 'store']);
    Route::post('/proker/update/{id}', [ProkerController::class, 'update']);
    Route::get('/proker/destroy/{id}', [ProkerController::class, 'destroy']);
    
    // Route Detail Proker
    Route::get('/detail/{id}/{id_divisi}', [DetailProkerController::class, 'index']);
    Route::post('/detail/store/{id}', [DetailProkerController::class, 'store']);
    Route::put('/detail/update/{id}', [DetailProkerController::class, 'update']);
    // Route::get('/detail/destroy/{id}', [DetailProkerController::class, 'destroy']);
    
    // Route Site Setting
    Route::get('/site', [SiteSettingController::class, 'index']);
    // Route::post('/site', [SiteSettingController::class, 'store']);
    Route::put('/site', [SiteSettingController::class, 'update']);

    //Route auth
    Route::post('/logout', [AuthController::class, 'logout']);

});    

// auth route
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
