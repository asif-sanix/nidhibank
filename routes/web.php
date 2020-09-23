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

    // Coomon routes

    Route::get('common/member/list', 'CommonController@getMemberList')->name('member.list');
    Route::get('common/member/{id}', 'CommonController@getMemberSingle')->name('member.single');
    Route::get('common/scheme/{id}', 'CommonController@schemeDetails')->name('scheme.single');
    Route::get('common/agent/list', 'CommonController@getAgentList')->name('agent.list');







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


    Route::match(['get','patch'],'saving-account-scheme', 'SavingAccountSchemeController@index')->name('saving-account-scheme.index')->middleware('can:browse_saving_account_scheme');
    Route::get('saving-account-scheme/create', 'SavingAccountSchemeController@create')->name('saving-account-scheme.create')->middleware('can:add_saving_account_scheme');
    Route::get('saving-account-scheme/{scheme}', 'SavingAccountSchemeController@show')->name('saving-account-scheme.show')->middleware('can:read_saving_account_scheme');
    Route::get('saving-account-scheme/{scheme}/edit', 'SavingAccountSchemeController@edit')->name('saving-account-scheme.edit')->middleware('can:edit_saving_account_scheme');
    Route::post('saving-account-scheme', 'SavingAccountSchemeController@store')->name('saving-account-scheme.store')->middleware('can:add_saving_account_scheme');
    Route::put('saving-account-scheme/{scheme}', 'SavingAccountSchemeController@update')->name('saving-account-scheme.update')->middleware('can:edit_saving_account_scheme');
    Route::delete('saving-account-scheme/{scheme}', 'SavingAccountSchemeController@destroy')->name('saving-account-scheme.destroy')->middleware('can:delete_saving_account_scheme');


    Route::match(['get','patch'],'saving-account', 'SavingAccountController@index')->name('saving-account.index')->middleware('can:browse_saving_account');
    Route::get('saving-account/create', 'SavingAccountController@create')->name('saving-account.create')->middleware('can:add_saving_account');
    Route::get('saving-account/{saving_account}', 'SavingAccountController@show')->name('saving-account.show')->middleware('can:read_saving_account');
    Route::get('saving-account/{saving-account}/edit', 'SavingAccountController@edit')->name('saving-account.edit')->middleware('can:edit_saving_account');
    Route::post('saving-account', 'SavingAccountController@store')->name('saving-account.store')->middleware('can:add_saving_account');
    Route::put('saving-account/{saving-account}', 'SavingAccountController@update')->name('saving-account.update')->middleware('can:edit_saving_account');
    Route::delete('saving-account/{saving-account}', 'SavingAccountController@destroy')->name('saving-account.destroy')->middleware('can:delete_saving_account');



    ///Accounts Details

    Route::match(['get','patch'],'saving-account-application', 'SavingAccountApplicationController@index')->name('saving-account-application.index')->middleware('can:browse_saving_account_application');
    Route::get('saving-account-application/create', 'SavingAccountapplicationController@create')->name('saving-account-application.create')->middleware('can:add_saving_account_application');
    Route::get('saving-account-application/{application}', 'SavingAccountapplicationController@show')->name('saving-account-application.show')->middleware('can:read_saving_account_application');
    Route::get('saving-account-application/{application}/edit', 'SavingAccountapplicationController@edit')->name('saving-account-application.edit')->middleware('can:edit_saving_account_application');
    Route::post('saving-account-application', 'SavingAccountapplicationController@store')->name('saving-account-application.store')->middleware('can:add_saving_account_application');
    Route::put('saving-account-application/{application}', 'SavingAccountapplicationController@update')->name('saving-account-application.update')->middleware('can:edit_saving_account_application');
    Route::delete('saving-account-application/{application}', 'SavingAccountapplicationController@destroy')->name('saving-account-application.destroy')->middleware('can:delete_saving_account_application');
    Route::put('saving-account-application/change-status/status', 'SavingAccountapplicationController@changeStatus')->name('saving-account-application.changeStatus')->middleware('can:status_saving_account_application');



    Route::match(['get','patch'],'agent', 'AgentController@index')->name('agent.index')->middleware('can:browse_agent');
    Route::get('agent/create', 'AgentController@create')->name('agent.create')->middleware('can:add_agent');
    Route::get('agent/{agent}', 'AgentController@show')->name('agent.show')->middleware('can:read_agent');
    Route::get('agent/{agent}/edit', 'AgentController@edit')->name('agent.edit')->middleware('can:edit_agent');
    Route::post('agent', 'AgentController@store')->name('agent.store')->middleware('can:add_agent');
    Route::put('agent/{agent}', 'AgentController@update')->name('agent.update')->middleware('can:edit_agent');
    Route::delete('agent/{agent}', 'AgentController@destroy')->name('agent.destroy')->middleware('can:delete_agent');



    Route::match(['get','patch'],'agent-ranking', 'AgentRankingController@index')->name('agent-ranking.index')->middleware('can:browse_agent_ranking');
    Route::get('agent-ranking/create', 'AgentRankingController@create')->name('agent-ranking.create')->middleware('can:add_agent_ranking');
    Route::get('agent-ranking/{agent_rankings}', 'AgentRankingController@show')->name('agent-ranking.show')->middleware('can:read_agent_ranking');
    Route::get('agent-ranking/{agent_rankings}/edit', 'AgentRankingController@edit')->name('agent-ranking.edit')->middleware('can:edit_agent_ranking');
    Route::post('agent-ranking', 'AgentRankingController@store')->name('agent-ranking.store')->middleware('can:add_agent_ranking');
    Route::put('agent-ranking/{agent_rankings}', 'AgentRankingController@update')->name('agent-ranking.update')->middleware('can:edit_agent_ranking');
    Route::delete('agent-ranking/{agent_rankings}', 'AgentRankingController@destroy')->name('agent-ranking.destroy')->middleware('can:delete_agent_ranking');



    Route::match(['get','patch'],'recurring-deposit-application', 'RecurringDepositApplicationController@index')->name('recurring-deposit-application.index')->middleware('can:browse_recurring_deposit_application');
    Route::get('recurring-deposit-application/create', 'RecurringDepositApplicationController@create')->name('recurring-deposit-application.create')->middleware('can:add_recurring_deposit_application');
    Route::get('recurring-deposit-application/{application}', 'RecurringDepositApplicationController@show')->name('recurring-deposit-application.show')->middleware('can:read_recurring_deposit_application');
    Route::get('recurring-deposit-application/{application}/edit', 'RecurringDepositApplicationController@edit')->name('recurring-deposit-application.edit')->middleware('can:edit_recurring_deposit_application');
    Route::post('recurring-deposit-application', 'RecurringDepositApplicationController@store')->name('recurring-deposit-application.store')->middleware('can:add_recurring_deposit_application');
    Route::put('recurring-deposit-application/{application}', 'RecurringDepositApplicationController@update')->name('recurring-deposit-application.update')->middleware('can:edit_recurring_deposit_application');
    Route::delete('recurring-deposit-application/{application}', 'RecurringDepositApplicationController@destroy')->name('recurring-deposit-application.destroy')->middleware('can:delete_recurring_deposit_application');
    Route::put('recurring-deposit-application/change-status/status', 'RecurringDepositApplicationController@changeStatus')->name('recurring-deposit-application.changeStatus')->middleware('can:status_recurring_deposit_application');


    Route::match(['get','patch'],'recurring-deposit-scheme', 'RecurringDepositSchemeController@index')->name('recurring-deposit-scheme.index')->middleware('can:browse_recurring_deposit_scheme');
    Route::get('recurring-deposit-scheme/create', 'RecurringDepositSchemeController@create')->name('recurring-deposit-scheme.create')->middleware('can:add_recurring_deposit_scheme');
    Route::get('recurring-deposit-scheme/{scheme}', 'RecurringDepositSchemeController@show')->name('recurring-deposit-scheme.show')->middleware('can:read_recurring_deposit_scheme');
    Route::get('recurring-deposit-scheme/{scheme}/edit', 'RecurringDepositSchemeController@edit')->name('recurring-deposit-scheme.edit')->middleware('can:edit_recurring_deposit_scheme');
    Route::post('recurring-deposit-scheme', 'RecurringDepositSchemeController@store')->name('recurring-deposit-scheme.store')->middleware('can:add_recurring_deposit_scheme');
    Route::put('recurring-deposit-scheme/{scheme}', 'RecurringDepositSchemeController@update')->name('recurring-deposit-scheme.update')->middleware('can:edit_recurring_deposit_scheme');
    Route::delete('recurring-deposit-scheme/{scheme}', 'RecurringDepositSchemeController@destroy')->name('saving-account-scheme.destroy')->middleware('can:delete_recurring_deposit_scheme');


    Route::match(['get','patch'],'recurring-deposit-account', 'RecurringDepositAccountController@index')->name('recurring-deposit-account.index')->middleware('can:browse_recurring_deposit_account');
    Route::get('recurring-deposit-account/create', 'RecurringDepositAccountController@create')->name('recurring-deposit-account.create')->middleware('can:add_recurring_deposit_account');
    Route::get('recurring-deposit-account/{recurring_deposit_account}', 'RecurringDepositAccountController@show')->name('recurring-deposit-account.show')->middleware('can:read_recurring_deposit_account');
    Route::get('recurring-deposit-account/{recurring-deposit-account}/edit', 'RecurringDepositAccountController@edit')->name('recurring-deposit-account.edit')->middleware('can:edit_recurring_deposit_account');
    Route::post('recurring-deposit-account', 'RecurringDepositAccountController@store')->name('recurring-deposit-account.store')->middleware('can:add_recurring_deposit_account');
    Route::put('recurring-deposit-account/{recurring-deposit-account}', 'RecurringDepositAccountController@update')->name('recurring-deposit-account.update')->middleware('can:edit_recurring_deposit_account');
    Route::delete('recurring-deposit-account/{recurring-deposit-account}', 'RecurringDepositAccountController@destroy')->name('recurring-deposit-account.destroy')->middleware('can:delete_recurring_deposit_account');







    Route::match(['get','patch'],'fd-scheme', 'FdSchemeController@index')->name('fd-scheme.index')->middleware('can:browse_saving_account_scheme');
    Route::get('fd-scheme/create', 'FdSchemeController@create')->name('fd-scheme.create')->middleware('can:add_fd_scheme');
    Route::get('fd-scheme/{scheme}', 'FdSchemeController@show')->name('fd-scheme.show')->middleware('can:read_fd_scheme');
    Route::get('fd-scheme/{scheme}/edit', 'FdSchemeController@edit')->name('fd-scheme.edit')->middleware('can:edit_fd_scheme');
    Route::post('fd-scheme', 'FdSchemeController@store')->name('fd-scheme.store')->middleware('can:add_fd_scheme');
    Route::put('fd-scheme/{scheme}', 'FdSchemeController@update')->name('fd-scheme.update')->middleware('can:edit_fd_scheme');
    Route::delete('fd-scheme/{scheme}', 'FdSchemeController@destroy')->name('fd-scheme.destroy')->middleware('can:delete_fd_scheme');


    Route::match(['get','patch'],'fd-account', 'FdAccountController@index')->name('fd-account.index')->middleware('can:browse_fd_account');
    Route::get('fd-account/create', 'FdAccountController@create')->name('fd-account.create')->middleware('can:add_fd_account');
    Route::get('fd-account/{saving_account}', 'FdAccountController@show')->name('fd-account.show')->middleware('can:read_fd_account');
    Route::get('fd-account/{fd-account}/edit', 'FdAccountController@edit')->name('fd-account.edit')->middleware('can:edit_fd_account');
    Route::post('fd-account', 'FdAccountController@store')->name('fd-account.store')->middleware('can:add_fd_account');
    Route::put('fd-account/{fd-account}', 'FdAccountController@update')->name('fd-account.update')->middleware('can:edit_fd_account');
    Route::delete('fd-account/{fd-account}', 'FdAccountController@destroy')->name('saving-account.destroy')->middleware('can:delete_fd_account');



    //Accounts Details

    Route::match(['get','patch'],'fd-application', 'FdAccountApplicationController@index')->name('fd-application.index')->middleware('can:browse_fd_account_application');
    Route::get('fd-application/create', 'FdAccountapplicationController@create')->name('fd-application.create')->middleware('can:add_fd_account_application');
    Route::get('fd-application/{application}', 'FdAccountapplicationController@show')->name('fd-application.show')->middleware('can:read_fd_account_application');
    Route::get('fd-application/{application}/edit', 'FdAccountapplicationController@edit')->name('fd-application.edit')->middleware('can:edit_fd_account_application');
    Route::post('fd-application', 'FdAccountapplicationController@store')->name('fd-application.store')->middleware('can:add_fd_account_application');
    Route::put('fd-application/{application}', 'FdAccountapplicationController@update')->name('fd-application.update')->middleware('can:edit_fd_account_application');
    Route::delete('fd-application/{application}', 'FdAccountapplicationController@destroy')->name('fd-application.destroy')->middleware('can:delete_fd_account_application');
    Route::put('fd-application/change-status/status', 'FdAccountapplicationController@changeStatus')->name('fd-application.changeStatus')->middleware('can:status_fd_account_application');





    Route::match(['get','patch'],'mis-scheme', 'MisSchemeController@index')->name('mis-scheme.index')->middleware('can:browse_saving_account_scheme');
    Route::get('mis-scheme/create', 'MisSchemeController@create')->name('mis-scheme.create')->middleware('can:add_mis_scheme');
    Route::get('mis-scheme/{scheme}', 'MisSchemeController@show')->name('mis-scheme.show')->middleware('can:read_mis_scheme');
    Route::get('mis-scheme/{scheme}/edit', 'MisSchemeController@edit')->name('mis-scheme.edit')->middleware('can:edit_mis_scheme');
    Route::post('mis-scheme', 'MisSchemeController@store')->name('mis-scheme.store')->middleware('can:add_mis_scheme');
    Route::put('mis-scheme/{scheme}', 'MisSchemeController@update')->name('mis-scheme.update')->middleware('can:edit_mis_scheme');
    Route::delete('mis-scheme/{scheme}', 'MisSchemeController@destroy')->name('mis-scheme.destroy')->middleware('can:delete_mis_scheme');


    Route::match(['get','patch'],'mis-account', 'MisAccountController@index')->name('mis-account.index')->middleware('can:browse_mis_account');
    Route::get('mis-account/create', 'MisAccountController@create')->name('mis-account.create')->middleware('can:add_mis_account');
    Route::get('mis-account/{saving_account}', 'MisAccountController@show')->name('mis-account.show')->middleware('can:read_mis_account');
    Route::get('mis-account/{mis-account}/edit', 'MisAccountController@edit')->name('mis-account.edit')->middleware('can:edit_mis_account');
    Route::post('mis-account', 'MisAccountController@store')->name('mis-account.store')->middleware('can:add_mis_account');
    Route::put('mis-account/{mis-account}', 'MisAccountController@update')->name('mis-account.update')->middleware('can:edit_mis_account');
    Route::delete('mis-account/{mis-account}', 'MisAccountController@destroy')->name('saving-account.destroy')->middleware('can:delete_mis_account');



    //Accounts Details

    Route::match(['get','patch'],'mis-application', 'MisAccountApplicationController@index')->name('mis-application.index')->middleware('can:browse_mis_account_application');
    Route::get('mis-application/create', 'MisAccountapplicationController@create')->name('mis-application.create')->middleware('can:add_mis_account_application');
    Route::get('mis-application/{application}', 'MisAccountapplicationController@show')->name('mis-application.show')->middleware('can:read_mis_account_application');
    Route::get('mis-application/{application}/edit', 'MisAccountapplicationController@edit')->name('mis-application.edit')->middleware('can:edit_mis_account_application');
    Route::post('mis-application', 'MisAccountapplicationController@store')->name('mis-application.store')->middleware('can:add_mis_account_application');
    Route::put('mis-application/{application}', 'MisAccountapplicationController@update')->name('mis-application.update')->middleware('can:edit_mis_account_application');
    Route::delete('mis-application/{application}', 'MisAccountapplicationController@destroy')->name('mis-application.destroy')->middleware('can:delete_mis_account_application');
    Route::put('mis-application/change-status/status', 'MisAccountapplicationController@changeStatus')->name('mis-application.changeStatus')->middleware('can:status_mis_account_application');


    
});


Route::get('/home', 'HomeController@index')->name('home');
