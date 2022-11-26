<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LeadsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProposalsController;

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

    Route::get('dashboard_admin', [DashboardController::class, 'dashboard']);

    //Users>>
    Route::get('datauser_admin', [UserController::class, 'datauser']);
    Route::get('tambahdatauser_admin', [UserController::class, 'tambahdatauser']);
    Route::post('insertdatauser_admin', [UserController::class, 'insertdatauser']);
    Route::get('editdatauser_admin/{id}', [UserController::class, 'editdatauser']);
    Route::post('updatedatauser_admin/{id}', [UserController::class, 'updatedatauser']);
    Route::get('deletedatauser_admin/{id}', [UserController::class, 'deletedatauser']);

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

    //PROPOSAL
    Route::get('/dataproposal_admin', [ProposalsController::class, 'index']);
    Route::get('/tambahdataproposal', [ProposalsController::class, 'tambahproposal']);
    Route::post('/insertdataproposal', [ProposalsController::class, 'insertdataproposal']);
    Route::get('/tampildataproposal/{id}', [ProposalsController::class, 'tampildataproposal']);
    Route::get('/deleteproposal/{id}', [ProposalsController::class, 'deleteproposal']);

    //Clients>>
    Route::get('dataclient_admin', [ClientController::class, 'dataclient']);
    Route::get('tambahdataclient_admin', [ClientController::class, 'tambahdataclient']);
    Route::get('insertdataclient_admin', [ClientController::class, 'insertdataclient']);
    Route::get('editdataclient_admin', [ClientController::class, 'editdataclient']);
    Route::get('updatedataclient_admin', [ClientController::class, 'updatedataclient']);
    Route::get('deletedataclient_admin', [ClientController::class, 'deletedataclient']);

    /*<< HR >>*/
    //Employees
    Route::get('employee_admin', [EmployeeController::class, 'index']);
    Route::get('tambahemployee_admin', [EmployeeController::class, 'tambahemployee']);
    Route::post('insertemployee_admin', [EmployeeController::class, 'insertemployee']);
    Route::get('tampilemployee_admin/{id}', [EmployeeController::class, 'tampilemployee']);
    Route::post('updateemployee_admin/{id}', [EmployeeController::class, 'updateemployee']);
    Route::get('hapusemployee_admin/{id}', [EmployeeController::class, 'hapusemployee']);

    Route::get('filterdata_admin',[AbsensiController::class,'halamanrekap']);
    Route::get('filterdata_admin/{tglawal}/{tglakhir}',[AbsensiController::class,'tampildatakeseluruhan']);
    //Attendances>>
    // Route::get('attendance_admin', [AttendanceController::class, 'index']);
    // Route::get('tambahattendance', [AttendanceController::class, 'tambahattendance']);
    // Route::post('insertattendance', [AttendanceController::class, 'insertattendance']);
    /*<< HR >>*/

    /*<<Work>>*/
    //Projects>>
    Route::get('dataproject_admin', [ProjectController::class, 'dataproject_admin']);
    Route::get('tambahdataproject_admin', [ProjectController::class, 'tambahdataproject']);
    Route::post('insertdataproject_admin', [ProjectController::class, 'insertdataproject']);
    Route::get('editdataproject_admin/{id}', [ProjectController::class, 'editdataproject']);
    Route::post('updatedataproject_admin/{id}', [ProjectController::class, 'updatedataproject']);
    Route::get('deletedataproject_admin/{id}', [ProjectController::class, 'deletedataproject']);


    //Tasks>>
    Route::get('datatask_admin', [TaskController::class, 'datatask_admin']);
    Route::get('tambahdatatask_admin', [TaskController::class, 'tambahdatatask_admin']);
    Route::post('insertdatatask_admin', [TaskController::class, 'insertdatatask_admin']);
    Route::get('editdatatask_admin/{id}', [TaskController::class, 'editdatatask_admin']);
    Route::post('updatedatatask_admin/{id}', [TaskController::class, 'updatedatatask_admin']);
    Route::get('deletedatatask_admin/{id}', [TaskController::class, 'deletedatatask_admin']);
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

    //Tasks
    Route::get('datatask_employee', [TaskController::class, 'datatask_employee']);

    //Tasks
    Route::get('datatask_employee', [TaskController::class, 'datatask_employee']);
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
    Route::get('dataticket_client', [TicketController::class, 'dataticket_client']);
    Route::get('tambahdataticket_client', [TicketController::class, 'tambahdataticket_client']);
    Route::post('insertdataticket_client', [TicketController::class, 'insertdataticket_client']);
    Route::get('editdataticket_client/{id}', [TicketController::class, 'editdataticket_client']);
    Route::post('updatedataticket_client/{id}', [TicketController::class, 'updatedataticket_client']);
    Route::get('deletedataticket_client/{id}', [TicketController::class, 'deletedataticket_client']);
    Route::get('exportpdf_client', [TicketController::class, 'exportpdf_client']);

});
