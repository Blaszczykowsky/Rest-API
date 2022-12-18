<?php

use App\Http\Controllers\Api\PeopleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('blaszczykowski/305348/people', [PeopleController::class, 'index']);
Route::post('blaszczykowski/305348/people', [PeopleController::class, 'create']);
Route::get('blaszczykowski/305348/people/{people}', [PeopleController::class, 'read']);
Route::put('blaszczykowski/305348/people/{people}', [PeopleController::class, 'update']);
Route::delete('blaszczykowski/305348/people/{people}', [PeopleController::class, 'delete']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});