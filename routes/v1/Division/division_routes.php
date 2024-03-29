<?php

use App\Http\Controllers\Division\DivisionMasterController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes For ALL Division Related Routes
|--------------------------------------------------------------------------
*/


Route::group(["middleware" => "auth:sanctum"], function () {
    Route::apiResource('division', DivisionMasterController::class);
});
