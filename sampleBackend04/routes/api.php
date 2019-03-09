<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/feedbacks/{id}', [
    'uses' => 'FeedbacksController@getFeedbacks'
]);

Route::post('/feedbacks', [
    'uses' => 'FeedbacksController@postFeedbacks'
]);

Route::get('/schedules/{venue}', [
    'uses' => 'SchedulesController@getVenueSchedules'
]);


