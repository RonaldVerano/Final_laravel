<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/employees', 'EmployeesController@index')->name('employees.index');

Route::post('/employees/store', 'EmployeesController@store')->name('employees.store');

Route::post('/employees/update', 'EmployeesController@update')->name('employees.update');

Route::get('/employees/check-attendance', 'EmployeesController@checkAttendance')->name('employees.check_attendance');

Route::post('/employees/{id}/attendance-present', 'EmployeesController@attendancePresent')->name('employees.attendance-present');

Route::post('/employees/{id}/attendance-absent', 'EmployeesController@attendanceAbsent')->name('employees.attendance-absent');

Route::post('/employees/addPresent', 'EmployeesController@addPoint')->name('employees.addPoint');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
