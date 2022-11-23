<?php

use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\LeadsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('welcome'));
// });

/*
|--------------------------------------------------------------------------
| Login
|--------------------------------------------------------------------------
|
| Below there are functions for logging in,
| registering, forgetting password,
| and logging out!
|
 */
Route::get('login', [LoginController::class, 'view_login'])->name('login')->middleware('guest');
Route::post('login_redirect', [LoginController::class, 'login']);
// Route::get('register', [LoginController::class, 'view_register']);
// Route::post('register_redirect', [LoginController::class, 'register']);
Route::get('logout', [LoginController::class, 'logout']);

/*
|--------------------------------------------------------------------------
| Dashboard
|--------------------------------------------------------------------------
|
| Below there are functions for logging in,
| registering, forgetting password,
| and logging out!
|
 */

Route::get('dashboardv1', [DashboardController::class, 'dashboardv1']);
Route::get('dashboardv2', [DashboardController::class, 'dashboardv2']);

/*
|--------------------------------------------------------------------------
| PortalManagements
|--------------------------------------------------------------------------
|
| Below there are functions for logging in,
| registering, forgetting password,
| and logging out!
|
 */
Route::group(['middleware' => ['auth', 'ceklevel:1']], function () {

    Route::get('dashboard', [DashboardController::class, 'dashboard']);

    //Users>>
    Route::get('viewuser_admin', [UserController::class, 'index']);
    Route::get('tampiluser_admin', [UserController::class, 'inputuser']);
    Route::post('insertdatauser_admin', [UserController::class, 'insertdatauser']);
    Route::get('tampilupdateuser_admin/{id}', [UserController::class, 'edituser']);
    Route::post('updateuser_admin/{id}', [UserController::class, 'updateuser']);
    Route::get('deleteuser_admin/{id}', [UserController::class, 'deleteuser']);

    //Leads>>
    Route::get('dataleads', [LeadsController::class, 'index']);
    Route::get('tambahdataleads', [LeadsController::class, 'tambahleads']);
    Route::post('insertdataleads', [LeadsController::class, 'insertdataleads']);
    Route::get('tampildataleads/{id}', [LeadsController::class, 'tampildataleads']);
    Route::get('deleteleads/{id}', [LeadsController::class, 'deleteleads']);

    //PRODUCTS
    Route::get('/dataproduk_admin', [ProductsController::class, 'index']);
    Route::get('/tambahdataproduk', [ProductsController::class, 'tambahproduk']);
    Route::post('/insertdataproduk', [ProductsController::class, 'insertdataproduk']);
    Route::get('/tampildataproduk/{id}', [ProductsController::class, 'tampildataproduk']);
    Route::get('/deleteproduk/{id}', [ProductsController::class, 'deleteproduk']);

    //Clients>>
    // // Route::get('client', [LeadsController::class, 'index']);
    // Route::get('dataleads', [LeadsController::class, 'tampilclient']);
    // Route::get('dataleads', [LeadsController::class, 'insertdataclient']);
    // Route::get('dataleads', [LeadsController::class, 'tampildataclient']);
    // Route::get('dataleads', [LeadsController::class, 'updatedataclient']);
    // Route::get('client', [LeadsController::class, 'deleteclient']);

    /*<< HR >>*/
    //Employees
    Route::get('employee_admin', [EmployeeController::class, 'index']);
    Route::get('tambahemployee_admin', [EmployeeController::class, 'tambahemployee']);
    Route::post('insertemployee_admin', [EmployeeController::class, 'insertemployee']);
    Route::get('tampilemployee_admin/{id}', [EmployeeController::class, 'tampilemployee']);
    Route::post('updateemployee_admin/{id}', [EmployeeController::class, 'updateemployee']);
    Route::get('hapusemployee_admin/{id}', [EmployeeController::class, 'hapusemployee']);

    //Attendances>>

    
    // Route::get('attendance_admin', [AttendanceController::class, 'index']);
    // Route::get('tambahattendance', [AttendanceController::class, 'tambahattendance']);
    // Route::post('insertattendance', [AttendanceController::class, 'insertattendance']);
    /*<< HR >>*/

    /*<<Work>>*/
    //Projects>>
    Route::get('proyek', [ProjectController::class, 'index']);

    //Tasks>>
    Route::get('task', [TaskController::class, 'index']);
    Route::get('tambahtask', [TaskController::class, 'tambahtask']);
    Route::post('insertdatatask', [TaskController::class, 'insertdatatask']);
    Route::get('tampildatatask/{id}', [TaskController::class, 'tampildatatask']);
    Route::post('updatedatatask/{id}', [TaskController::class, 'updatedatatask']);
    Route::get('deletetask/{id}', [TaskController::class, 'deletetask']);
    /*<<Work>>*/

    //Tickets>>
    Route::get('ticket_admin', [TicketController::class, 'view_tiket']);
    Route::get('tambahtiket_admin', [TicketController::class, 'tambahtiket']);
    Route::post('insertdatatiket_admin', [TicketController::class, 'insertdatatiket']);
    Route::get('tampildatatiket_admin/{id}', [TicketController::class, 'tampildatatiket_admin']);
    Route::post('updatedataticket_admin/{id}', [TicketController::class, 'updatedataticket_admin']);
    Route::get('deleteticket_admin/{id}', [TicketController::class, 'deleteticket']);
    Route::get('exportpdf_admin', [TicketController::class, 'exportpdf']);

});

/*
|--------------------------------------------------------------------------
| Portal Employees
|--------------------------------------------------------------------------
|
| Below there are functions for logging in,
| registering, forgetting password,
| and logging out!
|
 */
Route::group(['middleware' => ['auth', 'ceklevel:2']], function () {

    //Employees
    Route::get('employee', [EmployeeController::class, 'index']);
    Route::get('tambahemployee', [EmployeeController::class, 'tambahemployee']);
    Route::post('insertemployee', [EmployeeController::class, 'insertemployee']);
    Route::get('tampilemployee/{id}', [EmployeeController::class, 'tampilemployee']);
    Route::post('updateemployee/{id}', [EmployeeController::class, 'updateemployee']);
    Route::get('hapusemployee/{id}', [EmployeeController::class, 'hapusemployee']);

    //Attendances>>
    Route::get('presensi_masuk',[AbsensiController::class,'index']);
    Route::post('simpan_masuk',[AbsensiController::class,'store'])->name('simpan_masuk');
    Route::get('presensi_keluar',[AbsensiController::class,'keluar'])->name('presensi_keluar');
    Route::post('ubah_presensi',[AbsensiController::class,'presensipulang'])->name('ubah_presensi');
    
    // 

});

/*
|--------------------------------------------------------------------------
| Portal Clients
|--------------------------------------------------------------------------
|
| Below there are functions for logging in,
| registering, forgetting password,
| and logging out!
|
 */
Route::group(['middleware' => ['auth', 'ceklevel:3']], function () {

    //Tickets>>
    Route::get('ticket_client', [TicketController::class, 'view_tiket']);
    Route::get('tambahtiket_client', [TicketController::class, 'tambahtiket']);
    Route::post('insertdatatiket_client', [TicketController::class, 'insertdatatiket']);
    Route::get('tampildatatiket_client/{id}', [TicketController::class, 'tampildatatiket']);
    Route::post('updatedatatiket_client/{id}', [TicketController::class, 'updatedatatiket']);
    Route::get('deletetiket_client/{id}', [TicketController::class, 'deletetiket']);
    Route::get('exportpdf', [TicketController::class, 'exportpdf']);

});

// //Attendance
// Route::get('/attendance', [AttendanceController::class, 'index'])->name('attendance');
// Route::get('/tambahattendance', [AttendanceController::class, 'tambahattendance'])->name('tambahdataattendance');
// Route::post('/insertattendance', [AttendanceController::class, 'insertattendance'])->name('insertattendance');
