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

Route::get('/', function () {
    return view('welcome');
});



/*
===============
    Admin
===============
*/


Route::group(['namespace' => 'Admin','middleware' => 'admin.guest','prefix'=>'admin'], function() {
    Route::get('/', function() {
    return redirect()->route('admin.login.form');
});

    Route::get('login', 'Auth\LoginController@showLoginForm')->name('admin.login.form');
    Route::post('login', 'Auth\LoginController@login')->name('admin.login.post');

    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');

    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('admin.password.reset');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('admin.password.request');

    Route::get('new-password/{id}', 'Auth\ResetPasswordController@newPasswordForm')->name('admin.password.newPassword');

    Route::post('password/set-password/{id}', 'Auth\ResetPasswordController@setPassword')->name('admin.password.setPassword');

});




Route::group(['namespace' => 'Admin','middleware' => 'admin','as' => 'admin.','prefix'=>'admin'], function() { 


    Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');
    Route::post('logout', 'Auth\LoginController@logout')->name('logout.post');

    Route::get('dashboard', 'DashboardController@index')->name('dashboard.index')->middleware('can:browse_dashboard');


    Route::get('bread', 'BreadController@index')->name('bread.index')->middleware('can:browse_bread');
    Route::get('bread/create', 'BreadController@create')->name('bread.create')->middleware('can:add_bread');
    Route::get('bread/{slug}/edit', 'BreadController@edit')->name('bread.edit')->middleware('can:edit_bread');
    Route::put('bread/{bread}/update', 'BreadController@update')->name('bread.update')->middleware('can:edit_bread');
    Route::delete('bread/{slug}/delete', 'BreadController@destroy')->name('bread.destroy')->middleware('can:delete_bread');
    Route::post('bread', 'BreadController@store')->name('bread.store')->middleware('can:add_bread');


    Route::get('role', 'RoleController@index')->name('role.index')->middleware('can:browse_role');
    Route::get('role/create', 'RoleController@create')->name('role.create')->middleware('can:add_role');
    Route::get('role/{role}/edit', 'RoleController@edit')->name('role.edit')->middleware('can:edit_role');
    Route::post('role', 'RoleController@store')->name('role.store')->middleware('can:add_role');
    Route::put('role/{role}', 'RoleController@update')->name('role.update')->middleware('can:edit_role');


    Route::get('menu', 'MenuController@index')->name('menu.index')->middleware('can:browse_menu');
    Route::get('menu/create', 'MenuController@create')->name('menu.create')->middleware('can:add_menu');
    Route::get('menu/{menu}/edit', 'MenuController@edit')->name('menu.edit')->middleware('can:edit_menu');
    Route::post('menu', 'MenuController@store')->name('menu.store')->middleware('can:add_menu');
    Route::put('menu/{menu}', 'MenuController@update')->name('menu.update')->middleware('can:edit_menu');
    Route::delete('menu/{menu}', 'MenuController@destroy')->name('menu.destroy')->middleware('can:delete_menu');


     //Admin

    Route::match(['get','patch'],'admin', 'AdminController@index')->name('admin.index')->middleware('can:browse_admin');
    Route::get('admin/create', 'AdminController@create')->name('admin.create')->middleware('can:add_admin');
    Route::get('admin/{admin}', 'AdminController@show')->name('admin.show')->middleware('can:read_admin');
    Route::get('admin/{admin}/edit', 'AdminController@edit')->name('admin.edit')->middleware('can:edit_admin');
    Route::post('admin', 'AdminController@store')->name('admin.store')->middleware('can:add_admin');
    Route::put('admin/{admin}', 'AdminController@update')->name('admin.update')->middleware('can:edit_admin');
    Route::delete('admin/{admin}', 'AdminController@destroy')->name('admin.destroy')->middleware('can:delete_admin');


    Route::get('setting', 'MenuController@index')->name('setting.index')->middleware('can:browse_setting');
    Route::get('site-setting', 'SiteSettingController@index')->name('site-setting.index')->middleware('can:browse_site_setting');

    Route::post('logo', 'SiteSettingController@logo')->name('site-setting.logo')->middleware('can:logo_site_setting');
});