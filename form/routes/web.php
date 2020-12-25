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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/register', function () {
//     return view('user.register');
// });


Route::get("index","FormController@index");

Route::post("/register","FormController@create");

Route::post("/user/store","FormController@store");

 Route::delete("/delete/{id}","FormController@delete");
 Route::get("/edit/{id}","FormController@edit");
 Route::put("/update/{id}","FormController@update");


Route::get('/register', function () {
    return view('user.register');
});

Route::get('/edit', function () {
    return view('user.edit');
});


// Route::get('/delete',function(){
//     $post = form::find(3);
//     $post ->delete();
// });



// Route::get('/delete',function(){
//      form::destroy(3);
    
// });


