<?php

Route::get('home', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function() {

            Route::resource('users', 'UsersController');
            Route::resource('articles', 'ArticlesController');
            Route::resource('pages', 'PagesController');
            Route::resource('contentareas', 'ContentAreasController');
            Route::resource('csstemplates', 'CSSTemplatesController');

});
