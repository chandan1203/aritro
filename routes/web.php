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
Route::get('logout', 'Auth\LoginController@logout')->name('logout');
Auth::routes();

Route::get('/', 'HomeController@index')->name('index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/services', 'HomeController@services')->name('services');
Route::get('/export-import', 'HomeController@exportImport')->name('export-import');
Route::get('/why-us', 'HomeController@whyUs')->name('why-us');
Route::get('/skill', 'HomeController@skill')->name('skill');
Route::get('/clients', 'HomeController@clients')->name('clients');
Route::get('/blog', 'HomeController@blog')->name('blog');
Route::get('/blog-detail', 'HomeController@blogDetail')->name('blog-detail');
Route::get('/error-page', 'HomeController@errorPage')->name('error-page');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/projects', 'HomeController@projects')->name('projects');
Route::post('/contact-mail', 'MailController@contact')->name('hello');
Route::get('/clear', function () {
    //Artisan::call("storage:link");
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    Artisan::call('config:cache');
    Artisan::call('config:clear');

    return "Done"; //Return anything
});
