<?php
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::redirect('/', 'dashboard');
Route::get('/welcome', function() {
  return view('welcome');
});
Route::get('/dummy', function() {
  return view('dummy');
});

Route::get('dashboard', 'DashboardController@index')->middleware(['auth'])->name('dashboard');
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');


Route::get('bankbook', 'BankbookController@index')->middleware(['auth'])->name('bankbook');
Route::get('kaiin', 'KaiinController@index')->middleware(['auth'])->name('kaiin');

require __DIR__.'/auth.php';
