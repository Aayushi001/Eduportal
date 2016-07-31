
<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {

    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/home', function () {
        return view('home');
    })->middleware('auth');

    Route::get('/browse', array('as'=>'browse', 'uses'=> 'CourseController@open'));

    Route::get('/course/{id}', array('as'=>'course', 'uses'=>'CourseController@view'));

    Route::get('/profile', array('as'=>'profile', 'uses'=>'CourseController@profile'));

    Route::get('/discussion', array('as'=>'discussion', 'uses'=>'DiscussionController@open'));

    Route::get('/discussion-forum/post', array('as'=>'discussion', 'uses'=>'DiscussionController@open'));



    Route::auth();

});
?>
