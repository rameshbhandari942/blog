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


Route::get('about','front\HomeController@manageabout')->name('about');


Route::get('/', function () {
    return view('welcome');
});

// header part
Route::get('header', function () {
    return view('back.layouts.header');
});
 
 // sidebar part
Route::get('sidebar', function () {
    return view('back.layouts.sidebar');
});

// index dashboard part


 // user
Route::get('user', function () {
    return view('back.pages.user');
});
 
Route::get('table', function(){
    return view('back.usertable');
});
    
Route::get('title', function(){
    return view('back.pages.blog');
});

Route::get('tables', function(){
     return view('back.pages.blogtable');
});

Route::get('faq', function(){
    return view('back.pages.FAQ.faq');
});





            // Forgotpassword
Route::get('forgotPassword','ForgotPasswordController@forgotPassword')->name('user.forgotPassword');
Route::post('emailCheck','ForgotPasswordController@emailCheck')->name('user.emailCheck');
Route::post('confirmPassword','ForgotPasswordController@confirmPassword')->name('user.confirmPassword');
Route::get('resetPassword','ForgotPasswordController@resetPassword')->name('user.resetPassword');

        //changepassword
 Route::get('changePassword','ChangePasswordController@changePassword')->name('user.changePassword');
 Route::post('checkPassword','ChangePasswordController@checkPassword')->name('user.checkPassword');


    //   userprofile
 Route::get('userProfile','UserProfileController@userProfile')->name('userProfile');
 Route::get('editProfile','UserProfileController@editProfile')->name('editProfile');
 Route::post('updateProfile','UserProfileController@updateProfile')->name('updateProfile');


   // user
 Route::get('user-create','UserController@create')->name('user.create');
  Route::post('user-store','UserController@Store')->name('user-store');
      Route::get('user-index','UserController@index')->name('user.index');
      Route::get('user-edit/{id}','UserController@edit')->name('user-edit');
      Route::post('user-edit/{id}','UserController@update')->name('user-edit');
      Route::get('user-delete/{id}','UserController@destroy')->name('user.destroy');
      Route::get('user-status/{id}/{status}','UserController@changestatus')->name('user.status');
      Route::get('user-view/{id}','UserController@view')->name('user.view');


   // blog

Route::get('blog-create','Blogcontroller@create')->name('blog.create');
  Route::post('blog-store','Blogcontroller@Store')->name('blog-store');
      Route::get('blog-index','Blogcontroller@index')->name('blog.index');
         Route::get('blog-edit/{id}','Blogcontroller@edit')->name('blog-edit');
          Route::post('blog-edit/{id}','Blogcontroller@update')->name('blog-edit');
            Route::get('blog-delete/{id}','Blogcontroller@destroy')->name('blog.destroy');

            Route::get('blog-status/{id}/{status}','Blogcontroller@changestatus')->name('blog.status');


      // Faq
Route::get('faq-create','Faqcontroller@create')->name('faq.create');
  Route::post('faq-store','Faqcontroller@Store')->name('faq-store');
      Route::get('faq-index','Faqcontroller@index')->name('faq.index');
      Route::get('faq-status/{id}/{status}','Faqcontroller@changestatus')->name('faq.status');

      Route::get('faq-edit/{id}','Faqcontroller@edit')->name('faq-edit');
          Route::post('faq-edit/{id}','Faqcontroller@update')->name('faq-edit');
            Route::get('faq-delete/{id}','Faqcontroller@destroy')->name('faq.destroy');
      
            // contact
     Route::get('contact-create','Contactcontroller@create')->name('contact.create');
     Route::post('contact-store','Contactcontroller@Store')->name('contact-store');
      Route::get('contact-index','Contactcontroller@index')->name('contact.index');
      Route::get('contact-edit/{id}','Contactcontroller@edit')->name('contact-edit');
      Route::post('contact-edit/{id}','Contactcontroller@update')->name('contact-edit');
        Route::get('contact-delete/{id}','Contactcontroller@destroy')->name('contact.destroy');

            //    profile
        Route::get('profile-create','Profilecontroller@create')->name('profile.create');
        Route::post('profile-store','Profilecontroller@Store')->name('profile-store');
         Route::get('profile-index','Profilecontroller@index')->name('profile.index');
         Route::get('profile-edit/{id}','Profilecontroller@edit')->name('profile-edit');
         Route::post('profile-edit/{id}','Profilecontroller@update')->name('profile-edit');
         Route::get('profile-delete/{id}','Profilecontroller@destroy')->name('profile.destroy');

          Route::get('media-create','Mediacontroller@create')->name('media.create');
          Route::post('media-store','Mediacontroller@Store')->name('media-store');
          Route::get('media-index','Mediacontroller@index')->name('media.index');
          Route::get('media-edit/{id}','Mediacontroller@edit')->name('media-edit');
          Route::post('media-edit/{id}','Mediacontroller@update')->name('media-edit');
          Route::get('media-delete/{id}','Mediacontroller@destroy')->name('media.destroy');







                // login
            Route::get('/','DashboardController@index');
            Auth::routes();
        
            
            // front
     Route::resource('index','IndexController');
    //  Route::resource('about','AboutController');
     Route::resource('contacts','ContactsController');
     Route::resource('service','ServiceController');
     Route::get('contactUs','ContactUsController@create')->name('contactUs.create');
     Route::post('contactUs-store','ContactUsController@store')->name('contactUs-store');