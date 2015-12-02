<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */

//Route::get('/', 'WelcomeController@index');

//Route::get('home', 'HomeController@index');

Route::get('php',  function (){
    
    echo phpinfo();
});
Route::group(['prefix' => 'admin'], function () {
    
    Route::get('/', 'HomeController@index');
    
});



Route::get('/about-ismartwebdesign/{para}', function ($para) {

    if ($para == 'PrivacyPolicy') {
        return view('pages.policy');
    }

    if ($para == 'คำถามที่พบบ่อย') {
        return view('pages.question');
    }
    if ($para == 'เกี่ยวกับเรา') {
        return view('pages.aboutus');
    }
});




Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
