<?php


Route::namespace('Auth')->group(function(){

    Route::post('register' , 'RegisterController');

    Route::post('login' , 'LoginController');

    Route::post('logout' , 'LogoutController');

});

Route::middleware('auth:api')->group(function(){

    Route::post('create' , 'BeritaController@store');
    Route::patch('update/{berita}' , 'BeritaController@update');
    Route::delete('delete/{berita}' , 'BeritaController@destroy');

});
Route::get('berita', 'BeritaController@index');
Route::get('user' , 'UserController');



// use Illuminate\Http\Request;
// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
