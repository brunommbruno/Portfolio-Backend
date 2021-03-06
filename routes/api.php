<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\Projects;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/projects", [Projects::class, "index"]);
Route::post("/projects", [Projects::class, "store"]);
Route::put("/projects/{project}", [Projects::class, "update"]);
Route::delete("/projects/{project}", [Projects::class, "destroy"]);