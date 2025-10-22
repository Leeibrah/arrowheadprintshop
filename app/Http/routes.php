<?php

// Application routes...

// Logging in and out
Route::get( '/auth/login',              ['as' => 'login',                               'uses' => 'Auth\AuthController@getLogin']);
Route::post('/auth/login',              ['as' => 'login',                               'uses' => 'Auth\AuthController@postLogin']);
Route::get( '/auth/logout',             ['as' => 'logout',                              'uses' => 'Auth\AuthController@getLogout']);

// get('/auth/login', 'Auth\AuthController@getLogin');
// post('/auth/login', 'Auth\AuthController@postLogin');
// get('/auth/logout', 'Auth\AuthController@getLogout');

// home route
// Route::get( '/',                        ['as' => 'home',                            'uses' => 'HomeController@index']);
// Route::get('home', [HomeController::class, 'index'])->name('home');

// pages
// Route::get('about', [HomeController::class, 'about'])->name('about');
// Route::get('/about', [HomeController::class, 'about']); 
// Route::get('contact', [HomeController::class, 'contact'])->name('contact'); 
// Route::post('contacts', ['as' => 'postContacts', 'uses' => 'HomeController@postContacts']);
// Route::post("contacts", "HomeController@store")->name("contact.store");

// Route::get( 'contact',                 ['as' => 'contact',                        'uses' => 'HomeController@contact']);


// Route::get('terms', Terms::class)->name('terms');
// Route::get('privacy', Privacy::class)->name('privacy');
// Route::get('testimonials', Testimonials::class)->name('testimonials');

// Route::group(['prefix' => ''], function() {
// // Route::group(['namespace' => 'App\Http\Controllers', 'as' => 'services.'], function () {
//     Route::get('/', 'ServicesController@index')->name('index');
//     Route::get('services/architectural-signs', 'ServicesController@architecturalSigns')->name('services.architectural-signs');
//     Route::get('services/business-stationary', 'ServicesController@businessStationary')->name('services.business-stationary');
//     Route::get('services/exterior-signs', 'ServicesController@exteriorSigns')->name('services.exterior-signs');
//     Route::get('services/industrial-signs', 'ServicesController@industrialSigns')->name('services.industrial-signs');
//     Route::get('services/interior-signs', 'ServicesController@interiorSigns')->name('services.interior-signs');
//     Route::get('services/internal-decoration', 'ServicesController@internalDecoration')->name('services.internal-decoration');
//     Route::get('services/letters-logos', 'ServicesController@lettersLogos')->name('services.letters-logos');
//     Route::get('services/point-of-sale', 'ServicesController@pointOfSale')->name('services.point-of-sale');
//     Route::get('services/shop-front-signs', 'ServicesController@shopFrontSigns')->name('services.shop-front-signs');
//     Route::get('services/vehicle-graphics', 'ServicesController@vehicleGraphics')->name('services.vehicle-graphics');

// });

Route::get( '/',    ['as' => 'home',    'uses' => 'HomeController@index']);
Route::get( 'home', ['as' => 'home',    'uses' => 'HomeController@index']);

Route::get( 'about', ['as' => 'about',  'uses' => 'HomeController@about']);
Route::get( 'gallery',  ['as' => 'gallery',   'uses' => 'HomeController@gallery']);
// Route::get( 'all',                     ['as' => 'all',                            'uses' => 'HomeController@all']);

Route::group(['prefix' => 'services'], function() {

    // Route::get('index',                     ['as' => 'services.index',                  'uses' => 'ServiceController@index']);
    // Route::get('/', 'ServicesController@index']);
    Route::get('architectural-signs', ['as' => 'services.architectural-signs',       'uses' => 'ServicesController@architecturalSigns']);
    Route::get('business-stationary', ['as' => 'services.business-stationary',       'uses' => 'ServicesController@businessStationary']);
    Route::get('exterior-signs', ['as' => 'services.exterior-signs',       'uses' => 'ServicesController@exteriorSigns']);
    Route::get('industrial-signs', ['as' => 'services.industrial-signs',       'uses' => 'ServicesController@industrialSigns']);
    Route::get('interior-signs', ['as' => 'services.interior-signs',       'uses' => 'ServicesController@interiorSigns']);
    Route::get('internal-decoration', ['as' => 'services.internal-decoration',       'uses' => 'ServicesController@internalDecoration']);
    Route::get('letters-logos', ['as' => 'services.letters-logos',       'uses' => 'ServicesController@lettersLogos']);
    Route::get('point-of-sale', ['as' => 'services.point-of-sale',       'uses' => 'ServicesController@pointOfSale']);
    Route::get('shop-front-signs', ['as' => 'services.shop-front-signs',       'uses' => 'ServicesController@shopFrontSigns']);
    Route::get('vehicle-graphics',         ['as' => 'services.vehicle-graphics',       'uses' => 'ServicesController@vehicleGraphics']);
    

});

// Route::get( 'portfolio',                ['as' => 'portfolio',                       'uses' => 'HomeController@portfolio']);

// Route::get( 'portfolio',                ['as' => 'portfolio',                       'uses' => 'HomeController@portfolio']);

// Route::get( 'influencer-enrollment',    ['as' => 'influencer-enrollment',           'uses' => 'HomeController@influencer']);
// Route::post('influencer-enrollment',    ['as' => 'influencerPost',                  'uses' => 'HomeController@postInfluencer']);

Route::get( 'contacts',                 ['as' => 'contacts',                        'uses' => 'HomeController@contacts']);
Route::post('contacts',                 ['as' => 'contactsPost',                    'uses' => 'HomeController@postContacts']);

// Route::get('notification',              ['as' => 'notification',                    'uses' => 'HomeController@notification']);


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

