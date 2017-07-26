 <?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/calender', 'CalenderController@index');
Route::get('/costs', 'CostsController@index');
Route::get('/costs/{cost}', 'CostsController@show');