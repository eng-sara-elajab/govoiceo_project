<?php

use Illuminate\Support\Facades\Route;
use App\Service;

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

Route::get('/test', function(){
    return view('test');
});

Route::get('/', 'HomeController@index');

Route::get('/login_first', 'HomeController@login_first');

Route::get('/courses', 'HomeController@courses');

Route::get('/request_service', 'HomeController@request_service');
Route::post('/submit_request', 'UserController@submit_request');

Route::get('/contact', 'HomeController@get_contact');
Route::post('/contact', 'HomeController@contact');

Route::get('/about', 'HomeController@about');

Route::get('/one_course/{id}', 'HomeController@one_course');

Route::get('/subscribe/{id}', 'UserController@subscribe');
Route::post('/submit_subscription/{id}', 'UserController@submit_subscription');

Route::get('/edit_service/{id}', 'UserController@edit_service')->name('edit_service');
Route::put('/update_service/{id}', 'UserController@update_service')->name('update_service');

// Auth::routes();

// ////////////////////////////////////////////////Admin//////////////////////////////////////////////

Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');

    Route::get('/home', 'AdminController@index')->name('admin.home');

    Route::get('/messages', 'AdminController@messages')->name('messages');
    Route::get('/message_content/{id}', 'AdminController@message_content')->name('message_content');

    Route::get('/new_course', 'AdminController@new_course')->name('new_course');
    Route::post('/new_course', 'AdminController@store_course')->name('store_course');
    Route::get('/admin_courses', 'AdminController@admin_courses');
    Route::get('/edit_course/{id}', 'AdminController@edit_course')->name('edit_course');
    Route::put('/update_course/{id}', 'AdminController@update_course')->name('update_course');

    Route::get('/course_soft_delete/{id}', 'AdminController@course_soft_delete')->name('course_soft_delete');
    Route::get('/course_restore/{id}', 'AdminController@course_restore')->name('course_restore');

    Route::get('/new_admin', 'AdminController@new_admin')->name('new_admin');
    Route::post('/new_admin', 'AdminController@store_admin')->name('store_admin');
    Route::get('/admins', 'AdminController@admins');
    Route::get('/edit_admin/{id}', 'AdminController@edit_admin')->name('edit_admin');
    Route::put('/update_admin/{id}', 'AdminController@update_admin')->name('update_admin');

    Route::get('/soft_delete/{id}', 'AdminController@soft_delete')->name('soft_delete');
    Route::get('/restore/{id}', 'AdminController@restore')->name('restore');

    Route::get('/profile', 'AdminController@profile');
    Route::put('/profile', 'AdminController@update_profile')->name('update_profile');
    
    Route::get('/user_service_requests', 'AdminController@user_service_requests')->name('user_service_requests');
    Route::get('/one_request/{id}', 'AdminController@one_request')->name('one_request');
    Route::get('/approve_request/{id}', 'AdminController@approve_request')->name('approve_request');
    Route::get('/reject_request/{id}', 'AdminController@reject_request')->name('reject_request');
    Route::put('/reject_message/{id}', 'AdminController@reject_message')->name('reject_message');
    Route::get('/delete_service/{id}', 'AdminController@delete_service')->name('delete_service');
    
    Route::get('/courses_invoices', 'AdminController@courses_invoices')->name('courses_invoices');
    Route::get('/vew_one_invoice/{id}', 'AdminController@vew_one_invoice')->name('invoice.view');
    Route::get('/delete_invoice/{id}', 'AdminController@delete_invoice')->name('delete_invoice');
    Route::get('/edit_invoice/{id}', 'AdminController@edit_invoice')->name('edit_invoice');
    Route::put('/update_invoice/{id}', 'AdminController@update_invoice')->name('update_invoice');
    // Route::get('/unsubscribe/{id}', 'AdminController@unsubscribe')->name('unsubscribe');
    
    Route::get('/website_data', 'AdminController@website_data')->name('website_data');
    Route::put('/update_website_data', 'AdminController@update_website_data')->name('update_website_data');
    
    Route::get('/users', 'AdminController@users')->name('users');
    
    Route::get('/request_service_requirements', 'AdminController@request_service_requirements');
    Route::put('submit_request_service_requirements', 'AdminController@submit_request_service_requirements')->name('submit_request_service_requirements');
    Route::get('/reset_service_requirements', 'AdminController@reset_service_requirements')->name('reset_service_requirements');

});

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

Route::get('/logout', 'Auth\AdminLoginController@logout');

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    return 'Application cache cleared';
 });
 
 Route::get('/config-clear', function() {
    $exitCode = Artisan::call('config:clear');
    return 'Config cache cleared';
 });
 
  Route::get('/config-cache', function() {
    $exitCode = Artisan::call('config:cache');
    return 'Config cache cleared';
 });