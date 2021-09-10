<?php

use Illuminate\Support\Facades\Route;

use App\Constants\API\ErrorCodes as EC;
use App\Constants\API\Messages as Msg;
use App\Http\Controllers\API\UserController as UserCtrl, App\Http\Controllers\API\MiscController as MiscCtrl;
use App\Http\Controllers\UserController as ClientCtrl;
use App\Http\Controllers\RegisterController as UserRegister;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::prefix('v1')->group(function () {

//    Route::middleware('validate.ip')->group(function () {
        Route::prefix('user')->group(function () {
            Route::group(['middleware' => ['validate.token']], function () {
                Route::post('register', [UserCtrl::class, 'register']);
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
