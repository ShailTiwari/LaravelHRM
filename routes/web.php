 <?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
use App\Http\Controllers\login;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\Departments;
use App\Http\Controllers\Customers;
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


Route::get('/', [Home::class, 'index']);





//Route::get('/', [login::class, 'index']);
Route::get('login', [login::class, 'index'])->name('login');
Route::get('signup', [login::class, 'signup'])->name('signup');
Route::post('post-login', [login::class, 'postLogin'])->name('login.post'); 
Route::get('logout', [login::class, 'logout'])->name('logout');
Route::post('post-signup', [login::class, 'ragister'])->name('ragister.post'); 
Route::get('forgot_password', [login::class, 'forgot_password'])->name('forgot_password');
Route::post('forgot_password_post', [login::class, 'forgot_password_post'])->name('forgot_password_post'); 
Route::get('reset-password/{token}', [login::class, 'getPassword'])->name('getPassword');
Route::post('reset-password', [login::class, 'updatePassword'])->name('updatePassword'); 

/*Sociel Login URLS*/

Route::get('auth/google', [login::class, 'redirectToGoogle'])->name('redirectToGoogle');
Route::get('auth/google/callback', [login::class, 'handleGoogleCallback'])->name('handleGoogleCallback');

Route::get('auth/github', [login::class, 'redirectTogithub'])->name('redirectTogithub');
Route::get('auth/github/callback', [login::class, 'handlegithubCallback'])->name('handlegithubCallback');

Route::get('auth/linkedin', [login::class, 'redirectTolinkedin'])->name('redirectTolinkedin');
Route::get('auth/linkedin/callback', [login::class, 'handlelinkedinCallback'])->name('handlelinkedinCallback');

Route::get('auth/amazon', [login::class, 'redirectToamazon'])->name('redirectToamazon');
Route::get('auth/amazon/callback', [login::class, 'handleamazonCallback'])->name('handleamazonCallback');



Route::get('setting', [login::class, 'setting'])->name('setting');
Route::post('update_setting', [login::class, 'update_setting'])->name('update_setting'); 

/*Start Middleware */
Route::group(['middleware'=>['logincheck']],function()
{    
Route::get('home', [Dashboard::class,'index'])->name('welcome');
Route::get('get_graph', [Dashboard::class,'Get_graph_data']);
Route::get('get_attendence_graph', [Dashboard::class,'Get_Attendence_graph_data']);


Route::get('user', [Dashboard::class, 'user_list']);

Route::get('department', [Departments::class, 'index']);
Route::post('department_add', [Departments::class, 'create'])->name('department_add'); 
Route::get('department_edit/{id}', [Departments::class, 'edit']);
Route::post('update_department_profile', [Departments::class, 'update_department_profile'])->name('update_department_profile'); 
Route::get('department_delete/{id}', [Departments::class, 'delete']);

Route::get('payroll', [Payrolls::class, 'list']);
Route::get('payroll_data', [Payrolls::class, 'data']);
Route::post('payroll_add', [Payrolls::class, 'create'])->name('payroll_add'); 
Route::get('payroll_edit/{id}', [Payrolls::class, 'edit']);
Route::get('payroll_print/{id}', [Payrolls::class, 'print']);
Route::get('invoice_print/{id}', [Payrolls::class, 'print_invoice']);
Route::get('payroll_delete/{id}', [Payrolls::class, 'delete']);



Route::get('customer', [Customers::class, 'list']);
Route::get('customer_data', [Customers::class, 'data']);
Route::post('customer_create', [Customers::class, 'create'])->name('customer_create'); 
Route::get('customer_edit/{id}', [Customers::class, 'edit']); 
Route::post('customer_update', [Customers::class, 'update'])->name('update'); 
Route::get('customer_delete/{id}',[Customers::class, 'delete'] );




Route::get('employee', [Employe::class, 'employee_list']);
Route::get('employee_data', [Employe::class, 'employee_data']);
Route::post('create_employee_profile', [Employe::class, 'create_employee_profile'])->name('create_employee_profile'); 
Route::get('employee_edit/{id}', [Employe::class, 'employee_profile']); 
Route::post('update_employee_profile', [Employe::class, 'update_employee_profile'])->name('update_employee_profile'); 
Route::get('employee_delete/{id}',[Employe::class, 'delete'] );

Route::get('Attendance', [Attendances::class, 'Attendance_list']);
Route::post('create_attendance', [Attendances::class, 'create_attendance'])->name('create_attendance'); 
Route::post('auto_attendance', [Attendances::class, 'auto_attendance'])->name('auto_attendance'); 
Route::get('Attendance_edit/{id}', [Attendances::class, 'Attendance_profile']); 
Route::post('update_Attendance_profile', [Attendances::class, 'update_Attendance_profile'])->name('update_Attendance_profile'); 
Route::get('Attendance_delete/{id}',[Attendances::class, 'delete'] );

Route::get('project', [Projects::class, 'project_list']);
Route::post('create_projects', [Projects::class, 'create_project_profile'])->name('create_projects'); 
Route::get('projects_edit/{id}', [Projects::class, 'project_profile']); 
Route::post('update_projects_profile', [Projects::class, 'update_projects_profile'])->name('update_projects_profile'); 
Route::get('projects_delete/{id}',[Projects::class, 'delete'] );

Route::get('holiday', [Holidays::class, 'index']);
Route::post('create_holiday', [Holidays::class, 'create'])->name('create_holiday'); 
Route::get('holiday_edit/{id}', [Holidays::class, 'holiday_profile']); 
Route::post('update_holiday_profile', [Holidays::class, 'update'])->name('update_holiday_profile'); 
Route::get('holiday_delete/{id}',[Holidays::class, 'delete'] );

Route::get('event', [Events::class,'index'])->name('index');
Route::post('event_save', [Events::class,'ajax_event_save'])->name('ajax_event_save');  

Route::get('activity', [Activitys::class, 'index'])->name('index');
Route::get('projects/activity/{projectname}/{id}', [Activitys::class, 'projects_view'])->name('projects_view');
Route::post('activity_info_get', [Activitys::class,'get_activity_info'])->name('activity_info_get');  
Route::post('activity_save', [Activitys::class,'updateOrder'])->name('activity_save');  
Route::post('create_activity', [Activitys::class, 'create_activity_profile'])->name('create_activity'); 
Route::post('update_activity', [Activitys::class, 'update_activity_profile'])->name('update_activity'); 
Route::get('activity_edit/{id}', [Activitys::class, 'activity_profile']); 

Route::get('accunts', [login::class, 'getData'])->name('getData');
Route::get('report', [login::class, 'getData'])->name('getData');
//Route::get('project', [login::class, 'getData'])->name('getData');    

Route::get('profile/{id}', [Dashboard::class, 'profile']); 
Route::get('delete/{id}',[Dashboard::class, 'delete'] );
Route::post('update_profile', [Dashboard::class, 'update_profile'])->name('update_profile'); 
Route::get('tabale_data', [login::class, 'tableData']);
Route::get('get_data', [login::class, 'getData'])->name('getData');
});