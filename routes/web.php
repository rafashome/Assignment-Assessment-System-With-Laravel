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
    return view('home');
});

Route::get('/student', 'PagesController@student' );



Route::post('/register','StudentsRegistration@register');


//Admin Login & Dashboard Routes
Route::get('/dashboard', function(){
	return view('admin.dashboard');
} );

Route::get('/view', function(){
	return view('admin.teachersview');
} );
Route::get('/admin_home', 'AdminController@index' );
Route::post('/admin_dashboard', 'AdminController@AdminLogin' );
Route::get('/add-teacher', 'AdminController@addteacher' );
Route::get('/add-student', 'AdminController@addstudent' );
Route::get('/add-course', 'AdminController@addcourse' );
Route::get('/teacherlist', 'AdminController@teacherlist' );
Route::get('/studentlist', 'AdminController@studentlist' );
Route::get('/courselist', 'AdminController@courselist' );
Route::get('/teacher_delete/{id}', 'AdminController@teacher_delete' );
Route::get('/student_delete/{id}', 'AdminController@student_delete' );
Route::get('/course_delete/{id}', 'AdminController@course_delete' );
Route::post('/store', 'AdminController@store' );
Route::post('/save_student_data', 'AdminController@register' );
Route::post('/insert_course', 'AdminController@insertcourse' );
Route::get('/teachers_view/{id}', 'AdminController@teacher_view' );
Route::get('/students_view/{id}', 'AdminController@student_view' );
Route::get('/admin_logout', 'AdminController@logout' );
Route::get('/edit/{id}', 'AdminController@edit' );
Route::post('/update/{id}', 'AdminController@update' );

// Route::get('/dashboard', 'PagesController@dash' );
Route::get('/user', 'PagesController@user' );

// Route::post('/password/reset', 'AdminController@AdminLogin' );


Route::get('/teacher', 'TeachersController@index' );
Route::post('/dashboard', 'TeachersController@TeachersPortal' );
Route::get('/logout', 'TeachersController@logout' );



Route::get('/signup', 'TeachersController@signup' );
Route::post('/registration', 'TeachersController@register' );