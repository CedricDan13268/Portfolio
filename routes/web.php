<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about' , function(){
return ('this is product page');
});

Route::get('/portfolio' , function(){
    return view('portfolio');

    });

Route::get('/product' , function(){
    return view('product', ['name'=> 'Julian Marcos Duhig Jr.']);
    });


Route::get('name/{name}' , function($name){
    return ('My name is '. $name);
});
Route::get('/user/{id}' , function($name = 'guest'){
        return 'user'. $name;
});
Route::get('/profile' , function(){
    return 'i am route access via name';
    })->name('profile');
