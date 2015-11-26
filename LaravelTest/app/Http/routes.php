<?php

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::get('about','PagesController@about');
Route::get('contact','PagesController@contact');

Route::resource('articles', 'ArticlesController');


Route::get('foo',['middleware'=> ['auth', 'manager'] , function(){
    return 'This page is only viewable to the Manager';
}]);
