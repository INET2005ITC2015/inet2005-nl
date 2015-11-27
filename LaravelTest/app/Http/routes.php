<?php

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::get('/', array('as' => 'home', 'uses' => 'HomeController@index'));

Route::get('about','PagesController@about');
Route::get('contact','PagesController@contact');

Route::resource('articles', 'ArticlesController');

Route::get('tags/{tags}','TagsController@show');

Route::get('foo',['middleware'=> ['auth', 'manager'] , function(){
    return 'This page is only viewable to the Manager';
}]);
