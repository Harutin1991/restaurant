<?php

use Illuminate\Support\Facades\Route;
use App\Admin\Admin;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductTabsController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CatalogController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\AboutUsController;



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

/* Route::get('/', function () {
    return view('welcome');
}); */

Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('site');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/blog', [App\Http\Controllers\HomeController::class, 'blog'])->name('blog');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::get('/elements', [App\Http\Controllers\HomeController::class, 'elements'])->name('elements');
Route::get('/food_menu', [App\Http\Controllers\HomeController::class, 'foodMenu'])->name('food_menu');
Route::get('/menu', [App\Http\Controllers\HomeController::class, 'menu'])->name('menu');
Route::get('/single_blog', [App\Http\Controllers\HomeController::class, 'singleBlog'])->name('single_blog');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::resource('/', AdminController::class);

    Route::resource('/contact-us', ContactUsController::class);
    Route::resource('/categories', CategoryController::class);
    Route::resource('/product-tabs', ProductTabsController::class);
    Route::resource('/about-us', AboutUsController::class);

    Route::GET('/overview', 'AboutUsController@overview');
    Route::GET('/overview/{id}/edit', 'AboutUsController@overviewEdit');
    Route::PUT('/overview/{id}', 'AboutUsController@overviewStore');

    Route::GET('/integrated', 'AboutUsController@integrated');
    Route::GET('/integrated/{id}/edit', 'AboutUsController@integratedEdit');
    Route::PUT('/integrated/{id}', 'AboutUsController@integratedStore');

    Route::GET('/mission-vision', 'AboutUsController@integrated');
    Route::GET('/mission-vision/{id}/edit', 'AboutUsController@missionVisionEdit');
    Route::PUT('/mission-vision/{id}', 'AboutUsController@missionVisionStore');

    Route::GET('/history', 'AboutUsController@history');
    Route::GET('/history/{id}/edit', 'AboutUsController@historyEdit');
    Route::PUT('/history/{id}', 'AboutUsController@historyStore');

    Route::GET('/around-world', 'AboutUsController@aroundWorld');
    Route::GET('/around-world/{id}/edit', 'AboutUsController@aroundWorldEdit');
    Route::PUT('/around-world/{id}', 'AboutUsController@aroundWorldStore');

    Route::GET('/health-safety', 'AboutUsController@healthSafety');
    Route::GET('/health-safety/{id}/edit', 'AboutUsController@healthSafetyEdit');
    Route::PUT('/health-safety/{id}', 'AboutUsController@healthSafetyStore');

    Route::GET('/people', 'AboutUsController@people');
    Route::GET('/people/{id}/edit', 'AboutUsController@peopleEdit');
    Route::PUT('/people/{id}', 'AboutUsController@peopleStore');

    Route::GET('/career', 'ContactUsController@career');
    Route::GET('/career/{id}/edit', 'ContactUsController@careerEdit');
    Route::PUT('/career/{id}', 'ContactUsController@careerStore');

    //Route::POST('/about-us/overview', 'AboutUsController@overview');
    Route::GET('/integrated', 'AboutUsController@integrated');
    Route::GET('/mission-vision', 'AboutUsController@missionVision');
    Route::GET('/history', 'AboutUsController@history');
    Route::GET('/around-world', 'AboutUsController@aroundWorld');
    Route::GET('/health-safety', 'AboutUsController@healthSafety');
    Route::GET('/people', 'AboutUsController@people');

    //Route::GET('/career', 'AboutUsController@career');

    Route::resource('/mail-settings', 'MailSettingsController');
    Route::resource('/slider', SliderController::class);
    Route::resource('/why-tahweel', 'WhyTahweelController');
    Route::POST('/why-tahweel/update-ordering', 'WhyTahweelController@updateOrdering');
    Route::POST('/slider/update-ordering', [SliderController::class, 'updateOrdering']);
    Route::POST('/product-tabs/update-ordering', [ProductTabsController::class,'updateOrdering']);
    Route::get('/subscriber', 'SubscriberController@index');
    Route::DELETE('/subscriber/{id}', 'SubscriberController@destroy');

    Route::get('/job-application', [JobApplicationController::class, 'index']);
    Route::get('/job-application/show/{id}', [JobApplicationController::class, 'show']);
    Route::DELETE('/job-application/{id}', [JobApplicationController::class, 'destroy']);

    Route::resource('/social', SocialController::class);
    Route::resource('/vacancies', VacancyController::class);
    Route::resource('/catalog', CatalogController::class);

    Route::resource('/media-center', 'MediaCenterController');
    Route::DELETE('/media-center/{media_id}/destroy-image/{image_id}', 'MediaCenterController@destroyImage');
    Route::POST('/media-center/update-ordering', 'MediaCenterController@updateOrdering');

    //Route::resource('/press-releases', 'PressReleaseController');
    //Route::DELETE('/press-releases/{media_id}/destroy-image/{image_id}', 'NewsletterController@destroyImage');

    Route::prefix('products')->group(function () {
        Route::resource('/', ProductController::class);
        Route::GET('/details', [ProductController::class,'details']);
        Route::DELETE('/{product_id}/destroy-image/{image_id}', [ProductController::class,'destroyImage']);
        Route::GET('/{id}/specification', [ProductController::class,'specification']);
        Route::POST('/{id}/specification', [ProductController::class,'specificationStore']);
        Route::GET('/{id}/edit', [ProductController::class,'edit']);
        Route::POST('/{id}/delete', [ProductController::class,'destroyProduct']);
        Route::PUT('/{id}', [ProductController::class,'update']);

        Route::POST('/ajax-delete', [ProductController::class,'ajaxDelete']);
        Route::POST('/ajax-edit', [ProductController::class,'ajaxEdit']);
        Route::POST('/ajax-get', [ProductController::class,'ajaxGet']);
        Route::GET('/{id}/featured', [ProductController::class,'featured']);
        Route::POST('/{id}/featured-store', [ProductController::class,'featuredStore']);
        Route::POST('/update-ordering', [ProductController::class,'updateOrdering']);
    });

});
