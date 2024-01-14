<?php

use Illuminate\Http\Request;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
use App\Http\Controllers\PeopleController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('bembel/313017/people', [PeopleController::class, 'index']); 
Route::get('bembel/313017/people/{people}', [PeopleController::class, 'read']); 
Route::post('bembel/313017/people', [PeopleController::class, 'create']); 
Route::put('bembel/313017/people/{people}', [PeopleController::class, 'update']); 
Route::delete('bembel/313017/people/{people}', [PeopleController::class, 'delete']);

