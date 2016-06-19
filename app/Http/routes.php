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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/version', function () {
    $laravel = app();
    $version = $laravel::VERSION;
    return $version;
});

Route::get('/about/{name}', function ($name) {
    return view('about')->with('name', $name);
});

Route::get('/admin/home/dashboard', array('as' => 'admin.home', function () {
    $url = route('admin.home');
    return $url;
}));

Route::get('/view', function () {
    // $person = ["Waseem","Kashif","Khurram"];
    $person = [];
    return view('view',compact('person'));
});

Route::get('/add', function () {
    return view('add');
});

Route::get('/edit', function () {
    return view('edit');
});

Route::get('/delete', function () {
    return view('delete');
});


Route::resource('posts','PostsController');
       

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
    //
});
