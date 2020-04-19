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

use App\User;

Route::get('/', 'WelcomeController@welcome')->name('welcome');
Route::get('/nosotros', 'WelcomeController@about')->name('about');
Route::get('/contacto', 'WelcomeController@contact')->name('contact');
Route::get('/cursos', 'WelcomeController@courses')->name('courses');

if (User::where("role", "=", "admin")->exists()) {
    Auth::routes([
        'register' => false
    ]);
} else {
    Auth::routes();
}

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::get('/blog', 'BlogsController@index')->name('blog');
Route::get('/blog/create', 'BlogsController@create')->name('blog.create');
Route::post('/blog/store', 'BlogsController@store')->name('blog.store');
