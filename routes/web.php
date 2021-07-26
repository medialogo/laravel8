<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Resources\NkrenrakuResource;
use App\Models\NkRenraku;

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

Route::get('renraku', 'NkRenrakuController@index')->middleware(['auth'])->name('renraku');
Route::get('/renraku/new', 'NkRenrakuController@getNew')->middleware(['auth']);

Route::get('/mailable/{id}', function ($id) {
  $renraku = App\Models\NkRenraku::find($id);

  return new App\Mail\NkKakunin($renraku);
});


Route::post('/tokens/create', function (Request $request) {
  $token = $request->user()->createToken($request->token_name);
  return ['token' => $token->plainTextToken];
});

require __DIR__.'/auth.php';
