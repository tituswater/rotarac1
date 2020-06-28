<?php

use Illuminate\Support\Facades\Route;

//use App\Providers\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::post('user/change_club', 'UserController@updateUserClub');
Route::post('user/update/profile', 'UserController@UpdateUserProfile');
Route::post('change_password', 'UserController@updateUserPassword');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('user/change_avatar', 'UserController@changeAvatar');
Route::post('save_avatar', 'UserController@changeUserAvatar');
Route::get('adrr/list', 'AdrrController@ListAdrr');
Route::get('district/officers/list', 'OfficerController@ListDistrictOfficer');
Route::get('past/district/list', 'OfficerController@ListPastDistrictOfficer');

Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');
Route::POST('usersUpdate', 'UserController@updateUser');
Route::get('/', 'PageController@welcome');
Route::get('/about', 'PageController@about');
Route::resource('zones', 'ZoneController');
Route::resource('states', 'StateController');
Route::resource('clubs', 'ClubController')/* ->middleware(['auth', 'password.confirm'])*/
;

Route::resource('members', 'MemberController');
Route::resource('offices', 'OfficeController');
Route::resource('officers', 'OfficerController');
Route::resource('presidents', 'PresidentController');
Route::resource('adrrs', 'AdrrController');
Route::resource('users', 'UserController');

