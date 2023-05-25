<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
// use App\Http\Controllers\dashboard\UserController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\user\AwardController;
use App\Http\Controllers\user\EventControlelr;
use App\Http\Controllers\user\sellerController;
use App\Http\Controllers\user\SocialController;
use App\Http\Controllers\user\ProfileController;
use App\Http\Controllers\dashboard\UserController;
use App\Http\Controllers\user\EducationController;
use App\Http\Controllers\dashboard\indexController;
use App\Http\Controllers\user\ExperienceController;
use App\Http\Controllers\user\ChangePasswordController;
use App\Http\Controllers\dashboard\CategorListController;

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
Route::group(['middleware' => 'prevent-back-history'], function () {
    
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/', [HomeController::class, 'index'])->name('main');
    // checkout,orders
    Route::get('/seller/order/complete/{id}', [sellerController::class, 'inv_complete'])->name("order.complete");
    Route::get('/seller/oder/cancel/{id}', [sellerController::class, 'inv_cancel'])->name("order.cancel");
    Route::post('search', [HomeController::class, 'search'])->name('search');
    Route::get('search', [HomeController::class, 'search'])->name('search');
    Route::get('/seller_detail/{id}', [sellerController::class, 'seller_detail'])->name("seller.seller_detail");

    //Events
    Route::group(array('as' => 'event.', 'prefix' => 'event'), function () {
        Route::get('service/{id}/', [EventControlelr::class, 'service'])->name("service");
        Route::get('service_detail/{service_id}/{user_id}', [EventControlelr::class, 'service_detail'])->name("service_detail");
    });

    Auth::routes();
/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
    Route::middleware(['auth', 'user-access:seller'])->group(function () {
        Route::group(array('as' => 'profile.', 'prefix' => 'profile'), function () {
            Route::get('/', [ProfileController::class, 'index'])->name("index");
            Route::get('create/', [ProfileController::class, 'create'])->name("create");
            Route::post('create/', [ProfileController::class, 'store'])->name("create");
            Route::get('update/{id}/', [ProfileController::class, 'update'])->name("update");
            Route::post('update/{id}/', [ProfileController::class, 'updatedb'])->name("update");
        });

// user and seller education
        Route::group(array('as' => 'education.', 'prefix' => 'education'), function () {
            Route::get('/', [EducationController::class, 'index'])->name("index");
            Route::get('/create', [EducationController::class, 'create'])->name("create");
            Route::post('/create', [EducationController::class, 'store'])->name("create");
            Route::get('delete/{id}/', [EducationController::class, 'delete'])->name("delete");
            Route::get('update/{id}/', [EducationController::class, 'update'])->name("update");
            Route::post('update/{id}/', [EducationController::class, 'updatedb'])->name("update");
        });

// seller Award
        Route::group(array('as' => 'award.', 'prefix' => 'award'), function () {
            Route::get('/', [AwardController::class, 'index'])->name("index");
            Route::post('/create', [AwardController::class, 'store'])->name("create");
            Route::get('/create', [AwardController::class, 'create'])->name("create");
            Route::get('delete/{id}/', [AwardController::class, 'delete'])->name("delete");
            Route::get('update/{id}/', [AwardController::class, 'update'])->name("update");
            Route::post('update/{id}/', [AwardController::class, 'updatedb'])->name("update");

        });

// seller experience
        Route::group(array('as' => 'experience.', 'prefix' => 'experience'), function () {
            Route::get('/', [ExperienceController::class, 'index'])->name("index");
            Route::get('/create', [ExperienceController::class, 'create'])->name("create");
            Route::post('/create', [ExperienceController::class, 'store'])->name("create");
            Route::get('delete/{id}/', [ExperienceController::class, 'delete'])->name("delete");
            Route::get('update/{id}/', [ExperienceController::class, 'update'])->name("update");
            Route::post('update/{id}/', [ExperienceController::class, 'updatedb'])->name("update");
        });
// seller Change_password
        Route::group(array('as' => 'change_password.', 'prefix' => 'change_password'), function () {
            Route::get('/', [ChangePasswordController::class, 'create'])->name("create");
            Route::post('/', [ChangePasswordController::class, 'store'])->name("create");
        });

//user and seller social media links
        Route::group(array('as' => 'social.', 'prefix' => 'social'), function () {
            Route::get('/', [SocialController::class, 'index'])->name("index");
            // Route::get('/create', [SocialController::class, 'store'])->name("create");
            Route::post('/create', [SocialController::class, 'store'])->name("create");
            Route::get('delete/{id}/', [SocialController::class, 'delete'])->name("delete");
            Route::get('update/{id}/', [SocialController::class, 'update'])->name("update");
            Route::post('update', [SocialController::class, 'updatedb'])->name("update");
        });

// seller dashboards
        Route::get('/user/seller/', [sellerController::class, 'index'])->name("seller.index");
        Route::get('/seller/invoice', [sellerController::class, 'invoice_list'])->name("seller.invoice");
        Route::get('/seller/orders/completed', [sellerController::class, 'invoice_complete_list'])->name("orders.complete.list");
        Route::get('/seller/orders/canceled', [sellerController::class, 'invoice_cancel_list'])->name("orders.canceled.list");
        Route::get('/seller/review', [sellerController::class, 'review'])->name("review.index");
        Route::get('review/reply/{id}', [sellerController::class, 'review_update'])->name("review.update");
        Route::post('review/reply/{id}', [sellerController::class, 'review_updatedb'])->name("review.update");
// services
        Route::group(array('as' => 'event.', 'prefix' => 'event'), function () {
            Route::get('/', [EventControlelr::class, 'index'])->name("index");
            // Route::get('service/{id}/', [EventControlelr::class, 'service'])->name("service");
            Route::get('create/', [EventControlelr::class, 'create'])->name("create");
            Route::post('create/', [EventControlelr::class, 'store'])->name("create");
            Route::get('update/{id}/', [EventControlelr::class, 'update'])->name("update");
            Route::post('update/{id}/', [EventControlelr::class, 'updatedb'])->name("update");
            Route::get('delete/{id}/', [EventControlelr::class, 'delete'])->name("delete");
            Route::get('info/{id}/', [EventControlelr::class, 'info'])->name("info");
            Route::get('status/{id}/', [EventControlelr::class, 'status'])->name("status");
            Route::get('deleteImage/{id}/', [EventControlelr::class, 'deleteImage'])->name("deleteImage");
            Route::get('deleteTag/{id}/{name}/', [EventControlelr::class, 'deleteTag'])->name("deleteTag");

        });

    });

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
    Route::middleware(['auth', 'user-access:admin'])->group(function () {
        Route::get('/dashboard', [indexController::class, 'index'])->name('dashboard');
        Route::get('/dashboard/services', [indexController::class, 'services'])->name('dashboard.services');
// dashbboard User
        Route::group(array('as' => 'user.', 'prefix' => 'user'), function () {
            Route::get('/', [UserController::class, 'index'])->name("index");
            Route::get('/create', [UserController::class, 'create'])->name("create");
            Route::post('/create', [UserController::class, 'store'])->name("create");
            Route::get('delete/{id}/', [UserController::class, 'delete'])->name("delete");
            Route::get('update/{id}/', [UserController::class, 'update'])->name("update");
            Route::post('update/{id}/', [UserController::class, 'updatedb'])->name("update");
            Route::get('userprofile/', [UserController::class, 'user'])->name("userprofile");
        });

// CategoryLIst
        Route::group(array('as' => 'categorylist.', 'prefix' => 'categorylist'), function () {
            Route::get('/', [CategorListController::class, 'index'])->name("index");
            Route::get('/create', [CategorListController::class, 'create'])->name("create");
            Route::post('/create', [CategorListController::class, 'store'])->name("create");
            Route::get('update/{id}/', [CategorListController::class, 'update'])->name("update");
            Route::post('update/{id}/', [CategorListController::class, 'updatedb'])->name("update");
            Route::get('delete/{id}/', [CategorListController::class, 'delete'])->name("delete");
            Route::get('/find', [CategorListController::class, 'delete'])->name("find");

        });
  Route::group(array('as' => 'order.', 'prefix' => 'order'), function () {

            Route::get('/orders', [indexController::class, 'invoice_list'])->name("invoice");
            Route::get('/orders/completed', [indexController::class, 'invoice_complete_list'])->name("admin.complete.list");
            Route::get('/orders/canceled', [indexController::class, 'invoice_cancel_list'])->name("admin.canceled.list");
        });

    });

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
    Route::middleware(['auth', 'user-access:user'])->group(function () {
        // checkout
        Route::get('checkout/{id}', [HomeController::class, 'checkout'])->name('checkout');

        Route::post('checkout/{id}', [HomeController::class, 'checkout_store'])->name('checkout');
        Route::get('OrderList', [HomeController::class, 'orderlist'])->name('orderlist');

// reviews
        Route::get('review/{order_id}/{user_id}', [ReviewController::class, 'create'])->name('review.create');
        Route::post('review/{order_id}/{user_id}', [ReviewController::class, 'store'])->name('review.create');

    });
});