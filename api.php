<?php
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaraveltaskController;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// insart route
Route::post("/dataapi",[LaraveltaskController::class,'index']);
// select route
Route::get("/show",[LaraveltaskController::class,'showdata']);
// update route
Route::post("/react/{id}/update",[LaraveltaskController::class,'update']);
// Route::put("/react/{id}/update",[LaraveltaskController::class,'update']);
 
// delete route
Route::delete("/react/{id}/delete",[LaraveltaskController::class,'delete']);


