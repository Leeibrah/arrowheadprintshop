<?php

// Application routes...

Route::get( '/',                        ['as' => 'home',                            'uses' => 'HomeController@index']);
// Route::get( 'home',                  ['as' => 'home',                            'uses' => 'HomeController@index']);
Route::get( 'welcome',                  ['as' => 'welcome',                         'uses' => 'HomeController@welcome']);

Route::get( 'about',                    ['as' => 'about',                           'uses' => 'HomeController@about']);
Route::get( 'app',                      ['as' => 'app',                             'uses' => 'HomeController@app']);
Route::get( 'how-it-works',             ['as' => 'how-it-works',                    'uses' => 'HomeController@howitworks']);
Route::get( 'terms',                    ['as' => 'terms',                           'uses' => 'HomeController@termsandconditions']);
Route::get( 'privacy',                  ['as' => 'privacy',                         'uses' => 'HomeController@privacypolicy']);

Route::get( 'employer-enrollment',      ['as' => 'employer-enrollment',             'uses' => 'HomeController@employerEnrollment']);
Route::post('employer-enrollment',      ['as' => 'employer-enrollment-post',        'uses' => 'HomeController@postEmployerEnrollment']);

Route::get( 'employee-enrollment',      ['as' => 'employee-enrollment',             'uses' => 'EmployeeController@enrollment']);
Route::post('employee-enrollment',      ['as' => 'employee-enrollment-post',        'uses' => 'EmployeeController@postEnrollment']);


Route::get( 'contacts',                 ['as' => 'contacts',                        'uses' => 'HomeController@contacts']);
Route::post('contacts',                 ['as' => 'contactsPost',                    'uses' => 'HomeController@postContacts']);

Route::get('accept/{token}', 'InviteController@accept')->name('accept');


Route::get('mail', 'HomeController@mail');

Route::group(['prefix' => 'blog'], function() {

    Route::get('/',                         ['as' => 'blog',                'uses' => 'BlogController@index']);
    Route::get('{slug}', 'BlogController@showPost');
    // get('blog/{slug}', 'BlogController@showPost');

});

// Route::get( 'consulting',                   ['as' => 'consulting',              'uses' => 'HomeController@consulting']);
    
// Route::get( 'contacts',                     ['as' => 'contacts',                'uses' => 'HomeController@contacts']);
    
// Route::get( 'terms',                        ['as' => 'terms',                   'uses' => 'HomeController@termsandconditions']);
// Route::get( 'privacy',                      ['as' => 'privacy',                 'uses' => 'HomeController@privacypolicy']);

// Route::get('mail', 'HomeController@mail');

// Route::get( 'sitemap',                      ['as' => 'sitemap',                 'uses' => 'HomeController@generateSitemap']);

// Blog pages
// get('/blog', function () {
//     return redirect('/blog');
// });
get('blog1', 'BlogController@indexp');
get('blog1/{slug}', 'BlogController@showPost');
$router->get('contact', 'ContactController@showForm');
Route::post('contact', 'ContactController@sendContactInfo');
get('rss', 'BlogController@rss');
get('sitemap.xml', 'BlogController@siteMap');

// Admin area
get('admin', function () {
    return redirect('/admin/post');
});
$router->group([
    'namespace' => 'Admin',
    'middleware' => 'auth',
], function () {
    resource('admin/post', 'PostController', ['except' => 'show']);
    resource('admin/tag', 'TagController', ['except' => 'show']);

    resource('admin/employee', 'EmployeeController', ['except' => 'show']);
    resource('admin/employer', 'EmployerController', ['except' => 'show']);

    get('admin/upload', 'UploadController@index');
    post('admin/upload/file', 'UploadController@uploadFile');
    delete('admin/upload/file', 'UploadController@deleteFile');
    post('admin/upload/folder', 'UploadController@createFolder');
    delete('admin/upload/folder', 'UploadController@deleteFolder');
});

// Logging in and out
get('/auth/login', 'Auth\AuthController@getLogin');
post('/auth/login', 'Auth\AuthController@postLogin');
get('/auth/logout', 'Auth\AuthController@getLogout');

get('/cemanet', 'HomeController@cemanet');
