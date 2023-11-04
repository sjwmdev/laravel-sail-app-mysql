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

Route::group(['namespace' => 'App\Http\Controllers\Auth'], function () {

    // Guest Middleware Routes
    Route::middleware('guest')->group(function () {
        // Register Routes
        Route::get('/register', 'RegisterController@show')->name('register.show-form');
        Route::post('/register', 'RegisterController@register')->name('register.perform');

        // Login Routes
        Route::get('/login', 'LoginController@show')->name('login.show-form');
        Route::post('/login', 'LoginController@login')->name('login.perform');

        Route::get('/auth/google', 'GoogleAuthController@redirectToGoogle')->name('auth.google.redirect');
        Route::get('/auth/google/callback', 'GoogleAuthController@handleGoogleCallback');
    });

    // Auth Middleware Route
    Route::middleware('auth')->group(function () {

        // Verification Routes
        Route::get('/email/verify', 'VerificationController@show')->name('verification.notice');
        Route::get('/email/verify/{id}/{hash}', 'VerificationController@verify')->name('verification.verify')->middleware(['signed']);
        Route::post('/email/resend','VerificationController@resend')->name('verification.resend');
    });
});

Route::group(['namespace' => 'App\Http\Controllers\Dashboard'], function () {

    // Auth Middleware Route
    Route::middleware('auth')->group(function () {

        // Logout Route
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');

        Route::middleware('verified')->group(function () {

            // Permission Middleware Routes
            Route::middleware('permission')->group(function () {

                // Dashboard Route
                Route::get('/dashboard', 'DashboardController@index')->name('dashboard.home');

                // User Profile Routes
                Route::prefix('profile')->name('profile.')->group(function () {
                    Route::get('/', 'ProfileController@show')->name('show');
                    Route::get('/change-password', 'ProfileController@showChangePassword')->name('show-change-password');
                    Route::patch('/{user}', 'ProfileController@update')->name('update');
                    Route::patch('/change-password/{user}', 'ProfileController@changePassword')->name('change-password');
                });

                // Users Routes
                Route::resource('users', 'UsersController');
                Route::delete('users/force-delete/{user}', 'UsersController@forceDelete')->name('users.forceDelete');

                // Posts Routes
                Route::resource('posts', 'PostsController');
                Route::delete('posts/force-delete/{post}', 'PostsController@forceDelete')->name('posts.forceDelete');

                // Roles and Permissions Routes (using resourceful routing)
                Route::resource('roles', 'RolesController');
                Route::resource('permissions', 'PermissionsController');

                // Logs Routes
                Route::prefix('logs')->name('logs.')->group(function () {
                    Route::get('/', 'LogsController@index')->name('index');
                    Route::get('/show/{log}', 'LogsController@show')->name('show');
                    Route::get('/user-details/{id}', 'LogsController@getUserDetails')->name('user-details');
                    Route::get('/filter', 'LogsController@filter')->name('filter');
                    Route::get('/logs-by-role/{role}', 'LogsController@filter')->name('logsByRole');
                    Route::get('/logs-by-action/{action}', 'LogsController@filter')->name('logsByAction');
                    Route::get('/logs-by-date-range{daterange}', 'LogsController@filter')->name('logsByDateRange');
                    Route::post('/handle-filter', 'LogsController@handleFilter')->name('handleFilter');
                    Route::delete('/soft-delete/{id}', 'LogsController@destroy')->name('destroy');
                    Route::delete('/force-delete/{id}', 'LogsController@forceDelete')->name('forceDelete');
                });

                // Notification Routes
                Route::prefix('notifications')->name('notifications.')->group(function () {
                    Route::get('/', 'NotificationsController@index')->name('index');
                    Route::get('/get-unread', 'NotificationsController@getUnreadNotifications')->name('get-unread');
                    Route::get('/show/{notification}', 'NotificationsController@show')->name('show');
                    Route::post('/mark-as-read/{notification}', 'NotificationsController@markAsRead')->name('mark-as-read');
                    Route::get('/mark-all-as-read',
                        'NotificationsController@markAllAsRead'
                    )->name('mark-all-as-read');
                    Route::delete('/delete/{notification}', 'NotificationsController@destroy')->name('destroy');
                    Route::delete('/delete-all', 'NotificationsController@deleteAll')->name('delete-all');
                });
            });
        });
    });
});
