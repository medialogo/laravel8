<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\NkrenrakuResource;
use App\Models\NkRenraku;
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

Route::middleware('auth:api')->get('user', function (Request $request) {
    return $request->user();
});

Route::get('/nkrenraku/{id}', function ($id) {
    return new NkrenrakuResource(NkRenraku::where('id', '>', $id)->get());
  })->name('getNewRenraku')->middleware('auth.basic');


Route::get('/nkrenraku', function () {
  return new NkrenrakuResource(NkRenraku::all());
})->middleware('auth.basic');

