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
Route::get('mail/send', 'MailController@send');

Auth::routes();
Route:: get('/user/verify/{token}', 'Auth/RegisterController@verifyUser');

//Route::get();


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

    Route::get('/newses', 'admin\NewsController@index')->name('admin::news.index');
    Route::get('/news_create', 'admin\NewsController@create')->name('admin::news.create');
    Route::post('/news_create', 'admin\NewsController@save')->name('admin::news.create');
    Route::get('/news_edit/{id}', 'admin\NewsController@edit')->name('admin::news.edit');
    Route::get('/news/delete/{id}', 'admin\NewsController@delete')->name('admin::news.delete');
    Route::post('/news_update', 'admin\NewsController@update')->name('admin::news.update');

    Route::get('/documents', 'admin\DocumentController@index')->name('admin::documents.index');
    Route::get('/document_create', 'admin\DocumentController@create')->name('admin::document.create');
    Route::post('/document_create', 'admin\DocumentController@save')->name('admin::document.create');
    Route::get('/document_edit/{id}', 'admin\DocumentController@edit')->name('admin::document.edit');
    Route::get('/document/delete/{id}', 'admin\DocumentController@delete')->name('admin::document.delete');
    Route::post('/document_update', 'admin\DocumentController@update')->name('admin::document.update');
    Route::post('/document_upload', 'admin\DocumentController@upload')->name('admin::document.upload');

    Route::get('/contents', 'admin\ContentController@index')->name('admin::contents.index');
    Route::get('/content_create', 'admin\ContentController@create')->name('admin::content.create');
    Route::post('/content_create', 'admin\ContentController@save')->name('admin::content.create');
    Route::get('/content_edit/{id}', 'admin\ContentController@edit')->name('admin::content.edit');
    Route::get('/content/delete/{id}', 'admin\ContentController@delete')->name('admin::content.delete');
    Route::post('/content_update', 'admin\ContentController@update')->name('admin::content.update');
    Route::post('/content_upload', 'admin\ContentController@upload')->name('admin::content.upload');

});
Route::get('/home', 'HomeController@index')->name('home');
