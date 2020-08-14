<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now manage somsething great!
|
*/
Route::redirect('/', '/ge');
Route::group(['prefix' =>'{language}', 'where' => ['language' => '[a-zA-Z]{2}']], function(){

// Front

    Route::get('/', 'Front\PagesController@getIndex')->name('pages.index');
    Route::get('/services', 'Front\Pagescontroller@getServices')->name('pages.services');
    Route::get('services/{id}', 'Front\PagesController@getSingle')->name('services.single');

    Route::get('/about', 'Front\Pagescontroller@getAbout')->name('pages.about');
    Route::get('/blog', 'Front\Pagescontroller@getBlog')->name('pages.blog');
    Route::get('blog/{slug}', 'Front\PagesController@getSingle')->name('blog.single')->where('slug', '[\w\d\-\_]+');
    Route::get('/search', 'Front\PagesController@search')->name('search');


    
    

});
Auth::routes();

// $this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
// $this->post('login', 'Auth\LoginController@login');
// $this->post('logout', 'Auth\LoginController@logout')->name('logout');

// // Registration Routes...
// $this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
// $this->post('register', 'Auth\RegisterController@register');

// // Password Reset Routes...
// $this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
// $this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
// $this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
// $this->post('password/reset', 'Auth\ResetPasswordController@reset');


Route::group(['prefix' => 'admin'], function(){

// Admin 
    Route::get('/dashboard', 'Admin\AdminController@index')->name('admin.dashboard');
    Route::get('/login', 'Admin\AdminLoginController@showLogin')->name('admin.login');
    Route::post('/login', 'Admin\AdminLoginController@login')->name('admin.login.submit');
    
// Resource Routes
    Route::resource('posts', 'Admin\PostsController');
    Route::resource('categories', 'Admin\CategoriesController');
    Route::resource('tags', 'Admin\TagsController');
    Route::resource('faq', 'Admin\FaqController');
    Route::resource('services', 'Admin\ServicesController');
    Route::resource('contact-info', 'Admin\ContactInfoController');
    Route::resource('about', 'Admin\AboutController');
    Route::resource('slider', 'Admin\SliderController');

});



