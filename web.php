<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('events',               'EventsController');
// // Visualise all events
// Route::get('/events',                'EventsController@index');
// // Display newly created event
// Route::get('/events/{event}',       'EventsController@show');
// // Visaulaise 1 event
// Route::get('/events/create',        'EventsController@create');
// // Store event
// Route::post('/events',              'EventsController@store');
// // Edit event
// Route::get('/events/{event}/edit',  'EventsController@edit');
// // Update event
// Route::patch('/events/{event}',       'EventsController@update');
// // Delete Event
// Route::delete('/events/{event}',       'EventsController@destroy');