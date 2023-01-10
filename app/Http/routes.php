<?php

// Application routes...

Route::get( '/',                        ['as' => 'home',                            'uses' => 'HomeController@index']);
Route::get( 'welcome',                  ['as' => 'welcome',                         'uses' => 'HomeController@welcome']);

Route::get( 'about',                    ['as' => 'about',                           'uses' => 'HomeController@about']);
Route::get( 'work',                     ['as' => 'work',                            'uses' => 'HomeController@work']);

Route::group(['prefix' => 'services'], function() {

    Route::get('index',                     ['as' => 'services.index',                  'uses' => 'ServiceController@index']);
    Route::get('digital-marketing',         ['as' => 'services.digitalmarketing',       'uses' => 'ServiceController@digitalMarketing']);
    Route::get('social-media-management',   ['as' => 'services.socialmedia',            'uses' => 'ServiceController@socialMediaManagement']);
    Route::get('email-marketing',           ['as' => 'services.emailmarketing',         'uses' => 'ServiceController@emailMarketing']);
    Route::get('web-design-development',    ['as' => 'services.webdesign',              'uses' => 'ServiceController@webDesignDevelopment']);
    Route::get('content-creation',          ['as' => 'services.contentcreation',        'uses' => 'ServiceController@contentCreation']);
    Route::get('search-engine-marketing',   ['as' => 'services.seo',                    'uses' => 'ServiceController@searchEngineMarketing']);
    Route::get('influencer-marketing',      ['as' => 'services.influencermarketing',    'uses' => 'ServiceController@influencerMarketing']);

});

Route::get( 'portfolio',                ['as' => 'portfolio',                       'uses' => 'HomeController@portfolio']);

Route::get( 'portfolio',                ['as' => 'portfolio',                       'uses' => 'HomeController@portfolio']);

Route::get( 'influencer-enrollment',    ['as' => 'influencer-enrollment',           'uses' => 'HomeController@influencer']);
Route::post('influencer-enrollment',    ['as' => 'influencerPost',                  'uses' => 'HomeController@postInfluencer']);

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
