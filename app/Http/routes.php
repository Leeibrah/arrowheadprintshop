<?php

// Application routes...

Route::get( '/',                        ['as' => 'home',                            'uses' => 'HomeController@index']);
Route::get( 'welcome',                  ['as' => 'welcome',                         'uses' => 'HomeController@welcome']);

Route::get( 'about',                    ['as' => 'about',                           'uses' => 'HomeController@about']);
// Route::get( 'team',                     ['as' => 'team',                            'uses' => 'HomeController@team']);

Route::group(['prefix' => 'services'], function() {

    Route::get('index',                 ['as' => 'services.index',                  'uses' => 'ServiceController@index']);
    Route::get('accounting',            ['as' => 'services.accounting',             'uses' => 'ServiceController@accounting']);
    Route::get('email-marketing',       ['as' => 'services.emailmarketing',         'uses' => 'ServiceController@emailMarketing']);
    Route::get('forensic-investigation',['as' => 'services.forensicinvestigation',  'uses' => 'ServiceController@forensicInvestigation']);
    Route::get('tax',                   ['as' => 'services.tax',                    'uses' => 'ServiceController@tax']);
    Route::get('business-advisory',     ['as' => 'services.businessadvisory',       'uses' => 'ServiceController@businessAdvisory']);
    Route::get('audit-assurance',       ['as' => 'services.auditassurance',         'uses' => 'ServiceController@auditAssurance']);

});

Route::get( 'contacts',                 ['as' => 'contacts',                        'uses' => 'HomeController@contacts']);
Route::post('contacts',                 ['as' => 'contactsPost',                    'uses' => 'HomeController@postContacts']);

Route::get('notification',              ['as' => 'notification',                    'uses' => 'HomeController@notification']);


Route::get('mail', 'HomeController@mail');

Route::group(['prefix' => 'blog'], function() {

    Route::get('/',                         ['as' => 'blog',                'uses' => 'BlogController@index']);
    Route::get('{slug}', 'BlogController@showPost');
    // get('blog/{slug}', 'BlogController@showPost');

});

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
