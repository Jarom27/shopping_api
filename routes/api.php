<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ItemController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('categories',[CategoryController::class,"showAllCategories"]);
Route::get('items', [ItemController::class,"showAllItems"]);
Route::get('items/{category}',[ItemController::class,"showItemsByCategory"]);
Route::post("item/add",[ItemController::class,"addItem"]);
