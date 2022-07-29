<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\login;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\Departments;
use App\Http\Controllers\Employe;
use App\Http\Controllers\Events;
use App\Http\Controllers\Activitys;
use App\Http\Controllers\Holidays;
use App\Http\Controllers\Payrolls;
use App\Http\Controllers\Attendances;
use App\Http\Controllers\Projects;

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

Route::get('/', [login::class, 'index'])->name('login');
Route::get('login', [login::class, 'index'])->name('login');
Route::get('signup', [login::class, 'signup'])->name('signup');
Route::post('post-login', [login::class, 'postLogin'])->name('login.post'); 
Route::get('logout', [login::class, 'logout'])->name('logout');
Route::post('post-signup', [login::class, 'ragister'])->name('ragister.post'); 


Route::get('forgot_password', [login::class, 'forgot_password'])->name('forgot_password');
Route::post('forgot_password_post', [login::class, 'forgot_password_post'])->name('forgot.post'); 
Route::get('reset-password/{token}', [login::class, 'getPassword'])->name('getPassword');
Route::post('reset-password', [login::class, 'updatePassword'])->name('updatePassword'); 



Route::group(['middleware'=>['logincheck']],function()
{    
Route::get('home', [Dashboard::class,'index'])->name('welcome');
Route::get('user', [Dashboard::class, 'user_list']);

Route::get('department', [Departments::class, 'index']);
Route::post('department_add', [Departments::class, 'create'])->name('department_add'); 
Route::get('department_edit/{id}', [Departments::class, 'edit']);
Route::get('department_delete/{id}', [Departments::class, 'delete']);



Route::get('payroll', [Payrolls::class, 'index']);
Route::post('payroll_add', [Payrolls::class, 'create'])->name('payroll_add'); 
Route::get('payroll_edit/{id}', [Payrolls::class, 'edit']);
Route::get('payroll_delete/{id}', [Payrolls::class, 'delete']);


Route::get('employee', [Employe::class, 'employee_list']);
Route::post('create_employee_profile', [Employe::class, 'create_employee_profile'])->name('create_employee_profile'); 
Route::get('employee_edit/{id}', [Employe::class, 'employee_profile']); 
Route::post('update_employee_profile', [Employe::class, 'update_employee_profile'])->name('update_employee_profile'); 
Route::get('employee_delete/{id}',[Employe::class, 'delete'] );



Route::get('Attendance', [Attendances::class, 'Attendance_list']);
Route::post('create_attendance', [Attendances::class, 'create_attendance'])->name('create_attendance'); 
Route::get('Attendance_edit/{id}', [Attendances::class, 'Attendance_profile']); 
Route::post('update_Attendance_profile', [Attendances::class, 'update_Attendance_profile'])->name('update_Attendance_profile'); 
Route::get('Attendance_delete/{id}',[Attendances::class, 'delete'] );




Route::get('project', [Projects::class, 'project_list']);
Route::post('create_projects', [Projects::class, 'create_projects'])->name('create_projects'); 
Route::get('projects_edit/{id}', [Projects::class, 'projects_profile']); 
Route::post('update_projects_profile', [Projects::class, 'update_projects_profile'])->name('update_projects_profile'); 
Route::get('projects_delete/{id}',[Projects::class, 'delete'] );





Route::get('holiday', [Holidays::class, 'index']);
/*Route::post('create_holiday_profile', [Holidays::class, 'create_employee_profile'])->name('create_employee_profile'); 
Route::get('employee_edit/{id}', [Holidays::class, 'employee_profile']); 
Route::post('update_employee_profile', [Holidays::class, 'update_employee_profile'])->name('update_employee_profile'); 
Route::get('employee_delete/{id}',[Holidays::class, 'delete'] );*/




Route::get('event', [Events::class,'index'])->name('index');
Route::post('event_save', [Events::class,'ajax_event_save'])->name('ajax_event_save');  


Route::get('activity', [Activitys::class, 'index'])->name('index');
Route::post('activity_save', [Activitys::class,'updateOrder'])->name('activity_save');  


Route::get('accunts', [login::class, 'getData'])->name('getData');
Route::get('report', [login::class, 'getData'])->name('getData');
//Route::get('project', [login::class, 'getData'])->name('getData');
    

Route::get('profile/{id}', [Dashboard::class, 'profile']); 
Route::get('delete/{id}',[Dashboard::class, 'delete'] );
Route::post('update_profile', [Dashboard::class, 'update_profile'])->name('update_profile'); 
Route::get('tabale_data', [login::class, 'tableData']);
Route::get('get_data', [login::class, 'getData'])->name('getData');
});