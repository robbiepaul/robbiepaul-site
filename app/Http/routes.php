<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'PagesController@index');
Route::get('about', 'PagesController@about');
Route::get('skills', 'PagesController@skills');
Route::get('projects', 'PagesController@projects');
Route::get('contact', 'PagesController@contact');
Route::post('contact', 'PagesController@postContact');
Route::post('newsletter', 'PagesController@postNewsletter');

Route::get('/blog/{slug}', '\App\Http\Controllers\BlogController@getPost');
Route::controller('/blog', '\App\Http\Controllers\BlogController');
if (\Request::is('panel/Blog/*'))
{
    \Config::set('panel.controllers', '\App\Http\Controllers\panel');
}
Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/convert', function(){
    CloudConvert::file(public_path('robots.txt'))
        ->callback(url('/callback'))
        ->convert('pdf');

});

Route::get('/callback', function(){
    CloudConvert::useProcess($_REQUEST['url'])
        ->save(public_path('robots.pdf'));
});

Route::resource('post', 'PostController');

