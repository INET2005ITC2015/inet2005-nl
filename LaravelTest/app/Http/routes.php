<?php

Route::get('/home', 'HomeController@index');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::get('logout','Auth\AuthController@getLogout');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function() {

    Route::group(['middleware' => 'auth'],
        function(){
            Route::resource('users', 'UsersController');
            Route::resource('articles', 'ArticlesController');
            Route::get('articles/{id}/archive', 'ArticlesController@archive');
            Route::resource('pages', 'PagesController');
            Route::resource('contentareas', 'ContentAreasController');
            Route::resource('csstemplates', 'CSSTemplatesController');
        });
});

Route::get('/site', 'SiteController@index');
Route::get('/site/{pgName}','SiteController@show');
Route::resource('/site', 'SiteController');
//Route::get('home', 'SiteController@index');
//Route::get('site', 'SiteController@index');





