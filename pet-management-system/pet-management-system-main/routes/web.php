<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\OwnController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\LikeController;


Route::get('/', function () {
    $pets = App\Models\Pet::all();
    return view('pets.index', compact('pets'));
});

Route::resource('pets', PetController::class);
Route::resource('owners', OwnerController::class);
Route::resource('owns', OwnController::class);
Route::resource('foods', FoodController::class);
Route::resource('purchases', PurchaseController::class);
Route::resource('likes', LikeController::class);
