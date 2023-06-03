<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TpProveedorController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
*/

Route::get('/tp-proveedores', [TpProveedorController::class, 'index']);
Route::post('/tp-proveedores', [TpProveedorController::class, 'store']);
//Route::get('/tp-proveedores/{id}', [ADM_TpProveedorController::class, 'show']);
Route::put('/tp-proveedores/{tpProveedor}', [TpProveedorController::class, 'update']);
Route::delete('/tp-proveedores/{tpProveedor}', [TpProveedorController::class, 'destroy']);
