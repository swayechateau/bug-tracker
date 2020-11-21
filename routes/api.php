<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::get('/', function () {
    // return api docs
    return view('docs');
});

// Auth Routes
Route::post('auth/local', 'AuthController@login');
Route::post('auth/register', 'AuthController@register');

// REST Routes
Route::apiResource('users', 'UserController');
Route::get('users/{user}/organisations', 'UserController@organisations');
Route::apiResource('organisations', 'OrganisationController');
Route::get('organisations/{organisation}/projects', 'OrganisationController@projects');
Route::get('organisations/{organisation}/users', 'OrganisationController@users');
Route::apiResource('projects', 'ProjectController');


// Site Specific Routes
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
