<?php

use App\Http\Controllers\MiscController;
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TenantController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CMSController;
use App\Http\Controllers\ComplainTypeController;
use App\Http\Controllers\ComplainController  as aComplain;
use App\Http\Controllers\ProfileLogController as ProfileLog;
use App\Http\Controllers\PagesController as aPages;
use App\Http\Controllers\RegisterController as UserRegister;
use App\Http\Controllers\Frontend\RegisterController as WebRegister;
use App\Http\Controllers\Frontend\Logincontroller;
use App\Http\Controllers\Frontend\ProfileController;
use App\Http\Controllers\Frontend\AgentProfileController;
use App\Http\Controllers\Frontend\ParentProfilecontroller;
use App\Http\Controllers\Frontend\ComplainController;

use App\Http\Controllers\Clients\ClientController;



Route::get('/', function () {
    return view('welcome');
});

/*******************************************************************  Administrator  ********************/

Route::prefix('admin')->group(function () {
    Route::any('/', [UserController::class, 'login'])->name('aLogin');
    Route::any('login', [UserController::class, 'login'])->name('aLogin');
    Route::get('logout', [UserController::class, 'logout'])->name('aLogout');
    Route::get('access-denied', [UserController::class, 'accessDenied'])->name('aAccessDenied');
    Route::middleware(['verify.session'])->group(function () {
            Route::middleware(['validate.route'])->group(function () {
            Route::get('dashboard', [UserController::class, 'dashboard'])->name('aDashboard');

            Route::get('roles/view', [RoleController::class, 'view'])->name('aRoleV');
            Route::any('roles/create', [RoleController::class, 'create'])->name('aRoleC');
            Route::any('roles/update', [RoleController::class, 'update'])->name('aRoleU');
            Route::any('roles/delete', [RoleController::class, 'delete'])->name('aRoleD');

            Route::get('role/menus/view', [RoleController::class, 'viewRoleMenus'])->name('aRoleMenusV');
            Route::any('role/menus/create', [RoleController::class, 'assignRoleMenus'])->name('aRoleMenusCU');

            Route::get('tenants/view', [TenantController::class, 'view'])->name('aTenantV');
            Route::any('tenants/create', [TenantController::class, 'create'])->name('aTenantC');
            Route::any('tenants/update', [TenantController::class, 'update'])->name('aTenantU');
            Route::any('tenants/delete', [TenantController::class, 'delete'])->name('aTenantD');

            Route::get('menus/view', [MenuController::class, 'view'])->name('aMenuV');
            Route::any('menus/create', [MenuController::class, 'create'])->name('aMenuC');
            Route::any('menus/update', [MenuController::class, 'update'])->name('aMenuU');
            Route::any('menus/delete', [MenuController::class, 'delete'])->name('aMenuD');

            Route::get('users/view', [UserController::class, 'view'])->name('aUserV');
            Route::any('users/create', [UserController::class, 'create'])->name('aUserC');
            Route::any('users/update', [UserController::class, 'update'])->name('aUserU');
            Route::any('users/delete', [UserController::class, 'delete'])->name('aUserD');

            Route::get('services/view', [ServiceController::class, 'view'])->name('aServiceV');
            Route::any('services/create', [ServiceController::class, 'create'])->name('aServiceC');
            Route::any('services/update', [ServiceController::class, 'update'])->name('aServiceU');
            Route::any('services/delete', [ServiceController::class, 'delete'])->name('aServiceD');

            Route::any('cms/create', [CMSController::class, 'createCMS'])->name('aCMSC');
            Route::get('cms/get', [CMSController::class, 'viewCMS'])->name('aCMSV');
            Route::any('cms/update', [CMSController::class, 'updateCMS'])->name('aCMSU');

//            Route::any('complaintype/create', [ComplainTypeController::class, 'create'])->name('acomplain.type');

                Route::any('complaintype/create', [ComplainTypeController::class, 'create'])->name('acomplain.type');
                Route::get('complaintype/view', [ComplainTypeController::class, 'view'])->name('acomplain.typev');
                Route::any('complains/view', [aComplain::class, 'view'])->name('complainV');

                Route::any('pages/create', [aPages::class, 'create'])->name('aPagesC');
                Route::get('pages/view', [aPages::class, 'view'])->name('aPagesV');
                Route::get('pages/delete', [aPages::class, 'Delete'])->name('aPagesD');


            });
    });
});

Route::any('complaintype/update', [ComplainTypeController::class, 'update'])->name('acomplain.typeu');
Route::any('complaintype/delete', [ComplainTypeController::class, 'delete'])->name('acomplain.typeD');



Route::any('pages/update', [aPages::class, 'update'])->name('aPagesU');

Route::any('complains/edit/{id}', [aComplain::class, 'edit'])->name('complainE');
Route::any('suspend/user/{id}', [aComplain::class, 'suspend'])->name('suspendWU');

Route::any('profilelog/view', [ProfileLog::class, 'view'])->name('ProfileL');
Route::any('profilelog/detail', [ProfileLog::class, 'viewDetail'])->name('aprofileV');






// Routes for Front End
Route::get('/', [MiscController::class, 'getCMS'])->name('getCMS');
Route::get('/ServiceDetail', [MiscController::class, 'getServiceDetail'])->name('ServiceDetail');

Route::get('/PagesDetail/{id}', [MiscController::class, 'getPagesDetail'])->name('PagesDetail');

Route::get('user-register', [WebRegister::class, 'index'])->name('user-register');
Route::post('user-register/create', [WebRegister::class, 'store'])->name('user-register/create');

Route::get('user-login', [Logincontroller::class, 'index'])->name('user-login');
Route::post('user-login/create', [Logincontroller::class, 'create'])->name('user-login/create');
Route::get('user-logout', [Logincontroller::class, 'logout'])->name('uLogout');

Route::middleware(['verify.Usession'])->group(function () {


    Route::any('user/password', [Logincontroller::class, 'changePassword'])->name('change.password');




    Route::get('user_profile', [ProfileController::class, 'index'])->name('userProfile');
    Route::any('user_profile/create', [ProfileController::class, 'store'])->name('uProfileCreate');
    Route::any('user_profile/detail', [ProfileController::class, 'create'])->name('uProfileDetail');
    Route::post('uCity', [ProfileController::class, 'City'])->name('ucity');
    Route::any('pSearch', [ProfileController::class, 'pSearch'])->name('pSearch');
    Route::get('user_detail/{id}', [ProfileController::class, 'uDetail'])->name('udetails');
    Route::any('search-user-data', [ProfileController::class, 'searchUserdata'])->name('users.search');
    Route::get('advance-search', [ProfileController::class, 'advanceSearch'])->name('advance.search');
    Route::post('advance-search-data', [ProfileController::class, 'advanceSearchData'])->name('advance.search.data');
    Route::any('user-edit', [ProfileController::class, 'userEdit'])->name('user.edit');
    Route::any('profile-edit/{id}', [ProfileController::class, 'userEdit'])->name('profile.edit');
    Route::post('user-update/{id}', [ProfileController::class, 'useruploadImage'])->name('user.data');
    Route::any('user-favourite', [ProfileController::class, 'myFavourite'])->name('user.favourite');
    Route::any('user-rfavourite', [ProfileController::class, 'myremFavourite'])->name('user.rfavourite');
    Route::any('user-favourite-index', [ProfileController::class, 'gtefavourite'])->name('user.favourite.index');
    //agent Profile
    Route::post('agent-profile', [AgentProfileController::class, 'create'])->name('agent.profile');
    Route::any('agent-profile/index', [AgentProfileController::class, 'index'])->name('agent.profile.index');
    Route::any('search-agent-data', [AgentProfileController::class, 'searchAgentData'])->name('agent.search');
    //suggestion
    Route::get('user-suggestion', [AgentProfileController::class, 'viewSuggestion'])->name('user.suggestion');
    Route::post('search-suggestion-data', [AgentProfileController::class, 'searchSuggestionData'])->name('suggestion.search');
    Route::Post('parent-profile', [ParentProfilecontroller::class, 'index'])->name('parent.index');
    Route::Post('parent-profile/create', [ParentProfilecontroller::class, 'create'])->name('parent.child');
    Route::get('request-request', [ParentProfilecontroller::class, 'parentRequest'])->name('parent.request');
    Route::any('parent-reqest-ac/{id}', [ParentProfilecontroller::class, 'parentRequestAccepted'])->name('parent.request.accepted');
    Route::get('parent-child-request', [ParentProfilecontroller::class, 'parentChildRequest'])->name('parent.child.request');

    //report route
    Route::any('user-complain', [ComplainController::class, 'create'])->name('uComplainC');

    Route::get('profile-log', [ProfileController::class, 'profileLog'])->name('profile.log');
    Route::get('profile-log-past', [ProfileController::class, 'profileLogPast'])->name('prodile.log.past');
    Route::get('profile-log-total-past', [ProfileController::class, 'profileLogPastTotal'])->name('profile.past.total');

    Route::get('profile-matcher', [ProfileController::class, 'profileMatcher'])->name('profile.matcher');

    Route::any('seacrh-main', [ProfileController::class, 'seachMain'])->name('search.main');







});
