<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\EmpController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UploadController;

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
//Route::get('/mail', function () {
//    \Illuminate\Support\Facades\Mail::to('ckodhiambo1@gmail.com')
//                                    ->send(new \App\Mail\SignupEmail());
//});

Route::get('/verify', 'Auth\RegisterController@verifyUser')
     ->name('verify.user');

Route::get('/', function () {
    return view('auth.login');
});


Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
         ->name('home');
    Route::resource('user', 'UserController');

    Route::get('/profile', 'UserController@profile')
         ->name('user.profile');
    Route::post('/profile', 'UserController@postProfile')
         ->name('user.postProfile');
    Route::get('/password/change', 'UserController@getPassword')
         ->name('userGetPassword');
    Route::post('/password/change', 'UserController@postPassword')
         ->name('userPostPassword');
    Route::get('/add-post', [PostController::class, 'addPost']);

    Route::post('/create-post', [PostController::class, 'createPost'])
         ->name('post.create');

    Route::get('/employees', [PostController::class, 'getPost']);

    Route::get('/onboarded', [PostController::class, 'getOnboardedPost']);

    Route::get('/employees/{id}', [PostController::class, 'getPostById']);

    Route::get('/delete-post/{id}', [PostController::class, 'deletePost']);

    Route::get('/destroy-post/{employee_id}', [PostController::class, 'destroyPost']);

    Route::get('/edit-post/{id}', [PostController::class, 'editPost']);

    Route::post('/update-post', [PostController::class, 'updatePost'])
         ->name('post.update');

    Route::get('/get-all-employee', [EmpController::class, 'getAllEmployees']);

    Route::get('/download-pdf/{id}', [EmpController::class, 'downloadPDF']);

    //After onboarding form
    Route::get('/form',[\App\Http\Controllers\PersonalInfoController::class,'index']);
    Route::post('/form',[\App\Http\Controllers\PersonalInfoController::class,'addPersonalInfo'])
        ->name('personalinfo.create');




//    Route::get('/upload',[UploadController::class,'uploadForm']);

//    Route::post('/upload',[UploadController::class,'uploadFile'])->name('upload.uploadfile');




});


Route::get('/contact-us', [ContactController::class, 'contact']);
Route::post('/send-message', [ContactController::class, 'sendEmail'])
     ->name('contact.send');

Route::group(['middleware' => ['auth', 'role_or_permission:admin|create role|create permission']], function () {
     Route::resource('user', 'UserController');
     Route::resource('role', 'RoleController');
     Route::resource('permission', 'PermissionController');

});




Route::post('/checkbox', [PostController::class, 'storeOnboardedPost']);
Route::get('/checkbox', [PostController::class, 'getStoreOnboardedPost']);


//Route::post('/auth/save',[MainController::class, 'save'])->name('auth.save');
//Route::post('/auth/check',[MainController::class,'check'])->name('auth.check');


Auth::routes();


//////////////////////////////// axios request

Route::get('/getAllPermission', 'PermissionController@getAllPermissions');
Route::post("/postRole", "RoleController@store");
Route::get("/getAllUsers", "UserController@getAll");
Route::get("/getAllRoles", "RoleController@getAll");
Route::get("/getAllPermissions", "PermissionController@getAll");

/////////////axios create user
Route::post('/account/create', 'UserController@store');
Route::put('/account/update/{id}', 'UserController@update');
Route::delete('/delete/user/{id}', 'UserController@delete');
Route::get('/search/user', 'UserController@search');
