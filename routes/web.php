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

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');
Route::post('password/update', 'Auth\ResetPasswordController@reset')->name('password.update');

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

// BO info
Route::resource('boinfo', 'BoInfoController');
Route::post('uploadXML', 'BoInfoController@uploadXML')->name('uploadXML');

// Advokatfirma
Route::resource('firma', 'AdvokatFirmaController');

// Åpne data - Enhetsregisteret: API-dokumentasjon
Route::get('brregapi/hent/{org_nr}', 'BrregController@hent')->name('hent_enhet');
Route::get('proffapi/hent/{org_nr}', 'ProffController@hent')->name('hent_enhet_info');
