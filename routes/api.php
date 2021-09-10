<?php

use Illuminate\Support\Facades\Route;

use App\Constants\API\ErrorCodes as EC;
use App\Constants\API\Messages as Msg;
use App\Http\Controllers\API\UserController as UserCtrl, App\Http\Controllers\API\MiscController as MiscCtrl;
use App\Http\Controllers\UserController as ClientCtrl;
use App\Http\Controllers\RegisterController as UserRegister;
use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\API\LoginController;
use App\Http\Controllers\API\ProfileController;
use App\Http\Controllers\API\AgentController;
use App\Http\Controllers\API\ParentController;






Route::post('user-register', [RegisterController::class, 'create']);
Route::post('login', [LoginController::class, 'create'])->name('login');

//Route::group(['prefix' => 'auth'], function () {
//    Route::post('login', [LoginController::class, 'create'])->name('login');
//
////    Route::post('signup', 'AuthController@signup');
//
//    Route::group(['middleware' => 'auth:api'], function() {
//        Route::get('country/view', [ProfileController::class, 'ViewCountry']);
//
//        Route::get('logout', 'AuthController@logout');
//        Route::get('user', 'AuthController@user');
//    });
//});



//Route::middleware('auth:api')->group(function () {
Route::post('user/profile/create', [ProfileController::class, 'create']);
Route::get('country/view', [ProfileController::class, 'ViewCountry']);
Route::any('city/view', [ProfileController::class, 'ViewCity']);
Route::any('matcher/view', [ProfileController::class, 'ViewMatcher']);
Route::any('user/search/data', [ProfileController::class, 'searchUserdata']);

Route::any('advance/search/data', [ProfileController::class, 'searchAdvancedata']);

Route::post('agent/profile/create', [AgentController::class, 'create']);
Route::any('agent/view', [AgentController::class, 'ViewAgent']);
Route::any('agent/search/data', [AgentController::class, 'searchAgentdata']);



Route::post('parent/profile/create', [ParentController::class, 'index']);
Route::post('parent/profile/request', [ParentController::class, 'create']);

//});



//Route::middleware(['verify.Usession'])->group(function () {

//    Route::post('matcherprofile/create', [ProfileController::class, 'create']);


//});


Route::prefix('v1')->group(function () {

//    Route::middleware('validate.ip')->group(function () {
        Route::prefix('user')->group(function () {
            Route::group(['middleware' => ['validate.token']], function () {
                Route::post('register', [UserCtrl::class, 'register']);
                Route::post('matcherprofile/create', [ProfileController::class, 'create']);
            });
            Route::post('login', [UserCtrl::class, 'login']);
        });
//        Route::group(['middleware' => ['validate.token']],function (){
//            Route::any('user_register',[UserRegister::class,'register'])->name('userRegister');
//        });

        Route::prefix('misc')->group(function () {
            Route::group(['middleware' => ['validate.token']], function () {
                Route::post('create-page', [MiscCtrl::class, 'createPage']);
                Route::get('get-pages', [MiscCtrl::class, 'viewPages']);
                Route::post('update-page', [MiscCtrl::class, 'updatePage']);
                Route::post('delete-page', [MiscCtrl::class, 'deletePage']);

                Route::post('create-service', [MiscCtrl::class, 'createService']);
                Route::get('get-services', [MiscCtrl::class, 'viewServices']);
                Route::post('update-service', [MiscCtrl::class, 'updateService']);
                Route::post('delete-service', [MiscCtrl::class, 'deleteService']);

                Route::post('create-cms', [MiscCtrl::class, 'createCMS']);
                Route::get('get-cms', [MiscCtrl::class, 'viewCMS']);
                Route::post('update-cms', [MiscCtrl::class, 'updateCMS']);

            });
        });

//    });

});
