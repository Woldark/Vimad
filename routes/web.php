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

Route::get('/dashboard', function () {
    return view('Admin.layout.admin');
});


Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'Admin\MainController@index')->name('admin::home');

    Route::get('/categories', 'Admin\CategoryController@index')->name('admin::categories.index');
    Route::get('/category/{id}', 'Admin\CategoryController@show')->name('admin::category.show');
    Route::get('/category_create', 'Admin\CategoryController@create')->name('admin::category.create');
    Route::post('/category_create', 'Admin\CategoryController@save')->name('admin::category.create');
    Route::get('/category_edit/{id}', 'Admin\CategoryController@edit')->name('admin::category.edit');
    Route::get('/category/delete/{id}', 'Admin\CategoryController@delete')->name('admin::category.delete');
    Route::post('/category_update', 'Admin\CategoryController@update')->name('admin::category.update');

    Route::get('/fields', 'Admin\FieldController@index')->name('admin::fields.index');
    Route::get('/field_create', 'Admin\FieldController@create')->name('admin::field.create');
    Route::post('/field_create', 'Admin\FieldController@save')->name('admin::field.create');
    Route::get('/field_edit/{id}', 'Admin\FieldController@edit')->name('admin::field.edit');
    Route::get('/field/delete/{id}', 'Admin\FieldController@delete')->name('admin::field.delete');
    Route::post('/field_update', 'Admin\FieldController@update')->name('admin::field.update');


    Route::get('/jobs', 'Admin\JobController@index')->name('admin::jobs.index');
    Route::get('/job_create', 'Admin\JobController@create')->name('admin::job.create');
    Route::post('/job_create', 'Admin\JobController@save')->name('admin::job.create');
    Route::post('/job_create', 'Admin\JobController@save')->name('admin::job.create');
    Route::get('/job_edit/{id}', 'Admin\JobController@edit')->name('admin::job.edit');
    Route::get('/job/delete/{id}', 'Admin\JobController@delete')->name('admin::job.delete');
    Route::post('/job_update', 'Admin\JobController@update')->name('admin::job.update');

    Route::get('/tags', 'Admin\TagController@index')->name('admin::tags.index');
    Route::get('/tag_create', 'Admin\TagController@create')->name('admin::tag.create');
    Route::post('/tag_create', 'Admin\TagController@save')->name('admin::tag.create');
    Route::get('/tag_edit/{id}', 'Admin\TagController@edit')->name('admin::tag.edit');
    Route::get('/tag/delete/{id}', 'Admin\TagController@delete')->name('admin::tag.delete');
    Route::post('/tag_update', 'Admin\TagController@update')->name('admin::tag.update');
});
