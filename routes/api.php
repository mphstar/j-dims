<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PariwisataController;
use App\Http\Controllers\Api\SettingController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Pariwisata API
Route::get('/pariwisata', [PariwisataController::class, 'index']);
Route::get('/pariwisata/{slug}', [PariwisataController::class, 'show']);

// Setting API
Route::get('/setting', [SettingController::class, 'index']);
Route::match(['post', 'put', 'patch'], '/setting', [SettingController::class, 'update'])->middleware('auth:sanctum');
