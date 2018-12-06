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
    return view('admin.layout.admin');
});

Auth::routes();


Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'admin\MainController@index')->name('admin::home');

    Route::get('/categories', 'admin\CategoryController@index')->name('admin::categories.index');
    Route::get('/category/{id}', 'admin\CategoryController@show')->name('admin::category.show');
    Route::get('/category_create', 'admin\CategoryController@create')->name('admin::category.create');
    Route::post('/category_create', 'admin\CategoryController@save')->name('admin::category.create');
    Route::get('/category_edit/{id}', 'admin\CategoryController@edit')->name('admin::category.edit');
    Route::get('/category/delete/{id}', 'admin\CategoryController@delete')->name('admin::category.delete');
    Route::post('/category_update', 'admin\CategoryController@update')->name('admin::category.update');

    Route::get('/fields', 'admin\FieldController@index')->name('admin::fields.index');
    Route::get('/field_create', 'admin\FieldController@create')->name('admin::field.create');
    Route::post('/field_create', 'admin\FieldController@save')->name('admin::field.create');
    Route::get('/field_edit/{id}', 'admin\FieldController@edit')->name('admin::field.edit');
    Route::get('/field/delete/{id}', 'admin\FieldController@delete')->name('admin::field.delete');
    Route::post('/field_update', 'admin\FieldController@update')->name('admin::field.update');


    Route::get('/jobs', 'admin\JobController@index')->name('admin::jobs.index');
    Route::get('/job_create', 'admin\JobController@create')->name('admin::job.create');
    Route::post('/job_create', 'admin\JobController@save')->name('admin::job.create');
    Route::get('/job_edit/{id}', 'admin\JobController@edit')->name('admin::job.edit');
    Route::get('/job/delete/{id}', 'admin\JobController@delete')->name('admin::job.delete');
    Route::post('/job_update', 'admin\JobController@update')->name('admin::job.update');

    Route::get('/tags', 'admin\TagController@index')->name('admin::tags.index');
    Route::get('/tag_create', 'admin\TagController@create')->name('admin::tag.create');
    Route::post('/tag_create', 'admin\TagController@save')->name('admin::tag.create');
    Route::get('/tag_edit/{id}', 'admin\TagController@edit')->name('admin::tag.edit');
    Route::get('/tag/delete/{id}', 'admin\TagController@delete')->name('admin::tag.delete');
    Route::post('/tag_update', 'admin\TagController@update')->name('admin::tag.update');
});
