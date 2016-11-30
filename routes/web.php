<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|-------------------------------------------------------------------------
|-
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|

-------------------------------------- Default Laravel route-----------------
Route::get('/', function () {
    return view('welcome');
});
*/





route::get('/login',[
'uses' => '\App\Http\Controllers\HomeController@login',
'as' =>	'login.default',
'middleware' => ['guest'],
]);




route::get('/',[
'uses' => '\App\Http\Controllers\HomeController@index',
'as' =>	'home',
]);


route::get('/gap.php',function(){
return redirect()->route('home')->with('info', 'You have signed up!');
});

/**/




Route::get('contact', 
  ['as' => 'contact', 'uses' => 'AboutController@create']);

Route::post('contact', 
  ['as' => 'contact_store', 'uses' => 'AboutController@store']);




route::get('/signup',[
'uses' => '\App\Http\Controllers\AuthController@getSignup',
'as' =>	'auth.signup',
'middleware' => ['guest'],
]);

route::post('/signup',[
'uses' => '\App\Http\Controllers\AuthController@postSignup',
'middleware' => ['guest'],
]);



route::post('/signin',[
'uses' => '\App\Http\Controllers\AuthController@postSignin',
'middleware' => ['guest'],
]);


route::get('/signin',[
'uses' => '\App\Http\Controllers\AuthController@getSignin',
'as' =>	'auth.signin',
'middleware' => ['guest'],
]);

route::get('/signout',[
'uses' => '\App\Http\Controllers\AuthController@getSignout',
'as' =>	'auth.signout'
]);





/*    *******************
SEARCH!!!!
 ********************             */

route::get('/search',[
'uses' => '\App\Http\Controllers\SearchController@getResults',
'as' =>	'search.results',
'middleware' => ['auth'],
]);
/*    *******************
SEARCH!!!!
 ********************             */


/* 
****Begin User Profile
*/ 
route::get('/user/{username}',[
'uses' => '\App\Http\Controllers\ProfileController@getProfile',
'as' =>	'profile.index',
'middleware' => ['auth'],
]);

route::get('/profile/edit',[
'uses' => '\App\Http\Controllers\ProfileController@getEdit',
'as' =>	'profile.edit',
'middleware' => ['auth'],
]);

route::post('/profile/edit',[
'uses' => '\App\Http\Controllers\ProfileController@postEdit',
'as' =>	'profile.edit',
'middleware' => ['auth'],
]);
/* 
****End User Profile
*/ 


/* 
****Freinds
*/ 
Route::get('/friends', [
    'uses' => '\App\Http\Controllers\FriendController@getIndex',
    'as' => 'friend.index',
    'middleware' => ['auth'],
]);


Route::get('/friends/add/{username}', [
    'uses' => '\App\Http\Controllers\FriendController@getAdd',
    'as' => 'friend.add',
    'middleware' => ['auth'],
]);

Route::get('/friends/accept/{username}', [
    'uses' => '\App\Http\Controllers\FriendController@getAccept',
    'as' => 'friend.accept',
    'middleware' => ['auth'],
]);

/**
 * Statuses
 */

Route::post('/status', [
    'uses' => '\App\Http\Controllers\StatusController@postStatus',
    'as' => 'status.post',
    'middleware' => ['auth'],
]);

Route::post('/status/{statusId}/reply', [
    'uses' => '\App\Http\Controllers\StatusController@postReply',
    'as' => 'status.reply',
    'middleware' => ['auth'],
]);

Route::get('/status/{statusId}/like', [
    'uses' => '\App\Http\Controllers\StatusController@getLike',
    'as' => 'status.like',
    'middleware' => ['auth'],
]);






/* 
****PHP Excel
*/ 

route::get('/excel',[
'uses' => '\App\Http\Controllers\MaatwebsiteDemoController@index',
'as' => 'excel.index',

]);




route::get('/downloadExcel/{type}',[
'uses' => '\App\Http\Controllers\MaatwebsiteDemoController@downloadExcel',
'as' => 'excel.download',

]);



route::get('/importExcel',[
'uses' => '\App\Http\Controllers\MaatwebsiteDemoController@importExcel',
'as' => 'excel.upload',

]);

/* 
**** End PHP Excel
*/ 























/* 
****Pivot Search
*/ 
route::get('/pivot',[
'uses' => '\App\Http\Controllers\PivotController@index',


]);

route::post('/pivot',[
'uses' => '\App\Http\Controllers\PivotController@PivotResults',
'as' =>	'search.sku',

]);
/* 
****End Pivot Search
*/ 