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
    return view('index');
});
Route::get('offers', function(){
	return view('offerspage');
});
Route::get('partners', function(){
	return view('partnerpage');
});
Route::get('partnerjoin', function(){
	return view('partnerjoin.partnerpage');
});
Route::get('joinform', function(){
	return view('partnerjoin.partnerjoinformpage');
});
Route::get('about', function(){
	return view('aboutus');
});
Route::get('contact', function(){
	return view('support');
});
Route::get('privacypolicy', function(){
	return view('privacypolicy');
});
Route::get('terms&conditions', function(){
	return view('terms&conditions');
});
Route::get('faqs', function(){
	return view('faqspage');
});

Route::get('restaurantprofile', function(){
	return view('res-profile');
});

//admin panel
Route::get('dashboard', function(){
	return view('admin.index');
});
Route::get('users', function(){
	return view('admin.users');
});
Route::get('edit-user', function(){
	return view('admin.edit_user');
});
Route::get('partnerspage', function(){
	return view('admin.partners');
});
Route::get('edit-partner', function(){
	return view('admin.edit_partner');
});

Route::get('add-partner', function(){
	return view('admin.add_partner');
});
