<?php

use Illuminate\Support\Facades\Route;

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

// Desktop routes
Route::view('/activeAccount', 'desktop.activeAccount');
Route::view('/author', 'desktop.author');
Route::view('/changePassword', 'desktop.changePassword');
Route::view('/changePassword2', 'desktop.changePassword2');
Route::view('/contactUs', 'desktop.contactUs');
Route::view('/editProfile', 'desktop.editProfile');
Route::view('/errorPage', 'desktop.errorPage');
Route::view('/fixPage', 'desktop.fixPage');
Route::view('/forgetPassword', 'desktop.forgetPassword');
Route::view('/newPassword', 'desktop.newPassword');
Route::view('/privacy', 'desktop.privacy');

// Mobile routes
Route::view('/mobile/author', 'mobile.author');
Route::view('/mobile/teams', 'mobile.sport.teams');
Route::view('/mobile/search', 'mobile.search');
Route::view('/mobile/error', 'mobile.error');
Route::view('/mobile/fix', 'mobile.fix');
Route::view('/mobile/login', 'mobile.login');
Route::view('/mobile/signup', 'mobile.signup');
Route::view('/mobile/forget-password', 'mobile.forget-password');
Route::view('/mobile/forget-password2', 'mobile.forget-password2');
Route::view('/mobile/forget-password3', 'mobile.forget-password3');
Route::view('/mobile/activate-account', 'mobile.activate-account');
Route::view('/mobile/edit-profile', 'mobile.edit-profile');
Route::view('/mobile/s24latestvideos', 'mobile.sport.s24latestvideos');

// Public routes.
Route::get('/', 'AkhbaarController@index')->name('akhbaar.index');

// Sport24 routes
Route::get('/sport24', 'SportController@index')->name('sport.index');
Route::get('/matches', 'SportController@currentMatches')->name('sport.currentMatches');
Route::get('/mobile/matches', 'SportController@mobileCurrentMatches')->name('mobile.sport.matches');
Route::view('/mobile/clubs', 'mobile.sport.clubs');
Route::get('/clubs/{club}', 'SportController@club')->name('mobile.sport.clubs.news');

// Akhbaar24 routes.
Route::get('/items/{id}', 'ItemController@show')->name('items.show');
Route::get('/{site}/categories/{slug}', 'CategoryController@show')->name('categories.show');
Route::get('/tags/{tag}', 'TagController@show')->name('tags.show');
Route::get('/search/{slug}', 'SearchController@show')->name('search.show');
Route::get('/editors/{id}', 'EditorController@show')->name('editors.show');

// Auth routes.
Route::post('/login', 'Auth\AuthenticationController@login')->name('login');
Route::post('/register', 'Auth\AuthenticationController@register')->name('register');

// Protected routes.
Route::get('/logout', 'Auth\AuthenticationController@logout')->name('logout');
Route::get('/profile', 'ProfileController@index')->name('profile');
