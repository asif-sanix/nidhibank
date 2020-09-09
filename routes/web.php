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


    Route::get('company-profile', 'CompanyProfileController@index')->name('company-profile.index')->middleware('can:browse_company_profile');
    Route::post('company-profile', 'CompanyProfileController@store')->name('company-profile.update')->middleware('can:edit_company_profile');
    Route::get('company-profile/edit', 'CompanyProfileController@edit')->name('company-profile.edit')->middleware('can:edit_company_profile');

    Route::get('password', 'ProfileController@changePasswordForm')->name('change-password');
    Route::put('password', 'ProfileController@updatePassword');
    Route::get('profile', 'ProfileController@edit')->name('profile.update');
    Route::put('profile/{admin}', 'ProfileController@update')->name('myprofile.update');



    Route::match(['get','patch'],'paid-up-authorised-capital', 'PaidUpAuthorisedCapitalController@index')->name('paid-up-authorised-capital.index')->middleware('can:browse_paid_up_authorised_capital');
    Route::get('paid-up-authorised-capital/create', 'PaidUpAuthorisedCapitalController@create')->name('paid-up-authorised-capital.create')->middleware('can:add_paid_up_authorised_capital');
    Route::get('paid-up-authorised-capital/{id}', 'PaidUpAuthorisedCapitalController@show')->name('paid-up-authorised-capital.show')->middleware('can:read_paid_up_authorised_capital');
    Route::get('paid-up-authorised-capital/{id}/edit', 'PaidUpAuthorisedCapitalController@edit')->name('paid-up-authorised-capital.edit')->middleware('can:edit_paid_up_authorised_capital');
    Route::post('paid-up-authorised-capital', 'PaidUpAuthorisedCapitalController@store')->name('paid-up-authorised-capital.store')->middleware('can:add_paid_up_authorised_capital');
    Route::put('paid-up-authorised-capital/{id}', 'PaidUpAuthorisedCapitalController@update')->name('paid-up-authorised-capital.update')->middleware('can:edit_paid_up_authorised_capital');
    Route::delete('paid-up-authorised-capital/{id}', 'PaidUpAuthorisedCapitalController@destroy')->name('paid-up-authorised-capital.destroy')->middleware('can:delete_paid_up_authorised_capital');
    
    Route::match(['get','patch'],'member-group', 'MemberGroupController@index')->name('member-group.index')->middleware('can:browse_member_group');
    Route::get('member-group/create', 'MemberGroupController@create')->name('member-group.create')->middleware('can:add_member_group');
    Route::get('member-group/{member}', 'MemberGroupController@show')->name('member-group.show')->middleware('can:read_member_group');
    Route::get('member-group/{member}/edit', 'MemberGroupController@edit')->name('member-group.edit')->middleware('can:edit_member_group');
    Route::post('member-group', 'MemberGroupController@store')->name('member-group.store')->middleware('can:add_member_group');
    Route::put('member-group/{member}', 'MemberGroupController@update')->name('member-group.update')->middleware('can:edit_member_group');
    Route::delete('member-group/{member}', 'MemberGroupController@destroy')->name('member-group.destroy')->middleware('can:delete_member_group');


    Route::match(['get','patch'],'member', 'MemberController@index')->name('member.index')->middleware('can:browse_member');
    Route::get('member/create', 'MemberController@create')->name('member.create')->middleware('can:add_member');
    Route::get('member/{member}', 'MemberController@show')->name('member.show')->middleware('can:read_member');
    Route::get('member/{member}/edit', 'MemberController@edit')->name('member.edit')->middleware('can:edit_member');
    Route::post('member', 'MemberController@store')->name('member.store')->middleware('can:add_member');
    Route::put('member/{member}', 'MemberController@update')->name('member.update')->middleware('can:edit_member');
    Route::delete('member/{member}', 'MemberController@destroy')->name('member.destroy')->middleware('can:delete_member');
    
    Route::match(['get','patch'],'account-series', 'AccountSeriesController@index')->name('account-series.index')->middleware('can:browse_account_series');
    Route::get('account-series/create', 'AccountSeriesController@create')->name('account-series.create')->middleware('can:add_account_series');
    Route::get('account-series/{member}', 'AccountSeriesController@show')->name('account-series.show')->middleware('can:read_account_series');
    Route::get('account-series/{member}/edit', 'AccountSeriesController@edit')->name('account-series.edit')->middleware('can:edit_account_series');
    Route::post('account-series', 'AccountSeriesController@store')->name('account-series.store')->middleware('can:add_account_series');
    Route::put('account-series/{member}', 'AccountSeriesController@update')->name('account-series.update')->middleware('can:edit_account_series');
    Route::delete('account-series/{member}', 'AccountSeriesController@destroy')->name('account-series.destroy')->middleware('can:delete_account_series');


    Route::match(['get','patch'],'director-promoter', 'DirectorPromoterController@index')->name('director-promoter.index')->middleware('can:browse_director_promoter');
    Route::get('director-promoter/create', 'DirectorPromoterController@create')->name('director-promoter.create')->middleware('can:add_director_promoter');
    Route::get('director-promoter/{id}', 'DirectorPromoterController@show')->name('director-promoter.show')->middleware('can:read_director_promoter');
    Route::get('director-promoter/{id}/edit', 'DirectorPromoterController@edit')->name('director-promoter.edit')->middleware('can:edit_director_promoter');
    Route::post('director-promoter', 'DirectorPromoterController@store')->name('director-promoter.store')->middleware('can:add_director_promoter');
    Route::put('director-promoter/{id}', 'DirectorPromoterController@update')->name('director-promoter.update')->middleware('can:edit_director_promoter');
    Route::delete('director-promoter/{id}', 'DirectorPromoterController@destroy')->name('director-promoter.destroy')->middleware('can:delete_director_promoter');


    Route::match(['get','patch'],'form', 'FormController@index')->name('form.index')->middleware('can:browse_form');
    Route::get('form/create', 'FormController@create')->name('form.create')->middleware('can:add_form');
    Route::get('form/{form}', 'FormController@show')->name('form.show')->middleware('can:read_form');
    Route::get('form/{form}/edit', 'FormController@edit')->name('form.edit')->middleware('can:edit_form');
    Route::post('form', 'FormController@store')->name('form.store')->middleware('can:add_form');
    Route::put('form/{form}', 'FormController@update')->name('form.update')->middleware('can:edit_form');
    Route::delete('form/{form}', 'FormController@destroy')->name('form.destroy')->middleware('can:delete_form');


    Route::match(['get','patch'],'un-encumbered-deposit', 'UnEncumberedDepositController@index')->name('un-encumbered-deposit.index')->middleware('can:browse_un_encumbered_deposit');
    Route::get('un-encumbered-deposit/create', 'UnEncumberedDepositController@create')->name('un-encumbered-deposit.create')->middleware('can:add_un_encumbered_deposit');
    Route::get('un-encumbered-deposit/{id}', 'UnEncumberedDepositController@show')->name('un-encumbered-deposit.show')->middleware('can:read_un_encumbered_deposit');
    Route::get('un-encumbered-deposit/{id}/edit', 'UnEncumberedDepositController@edit')->name('un-encumbered-deposit.edit')->middleware('can:edit_un_encumbered_deposit');
    Route::post('un-encumbered-deposit', 'UnEncumberedDepositController@store')->name('un-encumbered-deposit.store')->middleware('can:add_un_encumbered_deposit');
    Route::put('un-encumbered-deposit/{id}', 'UnEncumberedDepositController@update')->name('un-encumbered-deposit.update')->middleware('can:edit_un_encumbered_deposit');
    Route::delete('un-encumbered-deposit/{id}', 'UnEncumberedDepositController@destroy')->name('un-encumbered-deposit.destroy')->middleware('can:delete_un_encumbered_deposit');



    
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
