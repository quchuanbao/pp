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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Route::middleware(['permission:admin'])->group(['namespace' => 'Admin'], function() {
//    //管理员
//    Route::get('/admin/home', 'AdminsController@home');
//});


Route::group(['namespace' => 'Admin'], function() {
    Route::get('/admin/admin', 'LoginController@showLoginForm')->name('loginadmin');
    Route::post('/admin/login', 'LoginController@login');
    Route::any('/admin/logout', 'LoginController@logout')->name('logoutadmin');

    //管理员
    Route::get('/admin/home', 'AdminsController@home')->middleware('permission:admin');
    Route::get('/admin/admins', 'AdminsController@index')->name('admins');
    Route::get('/admin/admins/edit/{id?}', 'AdminsController@showEditForm');
    Route::get('/admin/admins/del/{id?}', 'AdminsController@del');
    Route::any('/admin/admins/store', 'AdminsController@store');


    //角色
    Route::get('/admin/role', 'RoleController@index')->name('role');
    Route::get('/admin/role/edit/{id?}', 'RoleController@showEditForm');
    Route::get('/admin/role/del/{id?}', 'RoleController@del');
    Route::any('/admin/role/store', 'RoleController@store');

    //权限
    Route::get('/admin/permission', 'PermissionController@index')->name('permission');
    Route::get('/admin/permission/edit/{id?}', 'PermissionController@showEditForm');
    Route::get('/admin/permission/del/{id?}', 'PermissionController@del');
    Route::any('/admin/permission/store', 'PermissionController@store');











    Route::get('/admin/register', 'RegisterController@showRegistrationForm')->name('adminregister');
    Route::post('/admin/register', 'RegisterController@register');





    Route::get('/admin/newsclasses', 'NewsClassesController@index')->name('newsclasses');
    Route::get('/admin/newsclasses/edit/{id?}', 'NewsClassesController@showEditForm');
    Route::get('/admin/newsclasses/del/{id?}', 'NewsClassesController@del');
    Route::any('/admin/newsclasses/store', 'NewsClassesController@store');

    Route::any('/admin/news', 'NewsController@index')->name('news');
    Route::get('/admin/news/edit/{id?}', 'NewsController@showEditForm');
    Route::get('/admin/news/del/{id?}', 'NewsController@del');
    Route::any('/admin/news/store', 'NewsController@store');
    Route::any('/admin/news/uploadimg', 'NewsController@uploadimg');




    Route::get('/admin/homebigpics', 'HomeBigpicsController@index')->name('homebigpics');
    Route::get('/admin/homebigpics/edit/{id?}', 'HomeBigpicsController@showEditForm');
    Route::get('/admin/homebigpics/del/{id?}', 'HomeBigpicsController@del');
    Route::any('/admin/homebigpics/store', 'HomeBigpicsController@store');

    Route::get('/admin/homesmallpics', 'HomeSmallpicsController@index')->name('homesmallpics');
    Route::get('/admin/homesmallpics/edit/{id?}', 'HomeSmallpicsController@showEditForm');
    Route::get('/admin/homesmallpics/del/{id?}', 'HomeSmallpicsController@del');
    Route::any('/admin/homesmallpics/store', 'HomeSmallpicsController@store');


    Route::get('/admin/menus', 'MenusController@index')->name('menus');
    Route::get('/admin/menus/edit/{id?}', 'MenusController@showEditForm');
    Route::get('/admin/menus/del/{id?}', 'MenusController@del');
    Route::any('/admin/menus/store', 'MenusController@store');

    Route::get('/admin/links', 'LinksController@index')->name('links');
    Route::get('/admin/links/edit/{id?}', 'LinksController@showEditForm');
    Route::get('/admin/links/del/{id?}', 'LinksController@del');
    Route::any('/admin/links/store', 'LinksController@store');



    Route::get('/admin/faqs', 'FaqsController@index')->name('faqs');
    Route::get('/admin/faqs/edit/{id?}', 'FaqsController@showEditForm');
    Route::get('/admin/faqs/del/{id?}', 'FaqsController@del');
    Route::any('/admin/faqs/store', 'FaqsController@store');


    Route::any('/admin/trips', 'TripsController@index')->name('trips');
    Route::get('/admin/trips/edit/{id?}', 'TripsController@showEditForm');
    Route::get('/admin/trips/del/{id?}', 'TripsController@del');
    Route::any('/admin/trips/store', 'TripsController@store');


    Route::any('/admin/orders', 'OrdersController@index')->name('orders');
    Route::get('/admin/orders/edit/{id?}', 'OrdersController@showEditForm');
    Route::get('/admin/orders/status/{id?}/{status?}', 'OrdersController@status');
    Route::any('/admin/orders/store', 'OrdersController@store');



    Route::get('/admin/users', 'UsersController@index')->name('users');
    Route::get('/admin/users/edit/{id?}', 'UsersController@showEditForm');
    Route::get('/admin/users/del/{id?}', 'UsersController@del');
    Route::any('/admin/users/store', 'UsersController@store');

});
