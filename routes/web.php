 <?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/costs', function () {
    $costs = DB::table('costs')->get();

    return view('costs.index', compact('costs'));
});

Route::get('/cost/{id}', function ($id) {
    $costs = DB::table('costs')->find($id);

    return view('costs.show', compact('costs'));
});