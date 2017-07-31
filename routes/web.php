 <?php

Route::get('/', function () {
    return view('welcome');
});


Route::get('/calender', 'CalenderController@index');

Route::get('/costs', 'CostsController@index');
Route::get('/costs/{cost}', 'CostsController@show');

Route::get('/posts', 'PostsController@index');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/create', 'PostsController@create');
Route::get('/posts/{post}', 'PostsController@show');

Route::post('/posts/{post}/comments', 'CommentsController@store');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('env', function() {
    Mail::raw('Hi, welcome user!', function ($message) {
        $message->to('linfangye@gmail.com');
    });
});