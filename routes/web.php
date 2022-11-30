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
use App\Http\Controllers\EstimatesController;
use App\Http\Controllers\ProposalsController;
use App\Http\Controllers\KnowledgebaseController;
use App\Http\Controllers\InvoicesController;
use App\Http\Controllers\PaymentsController;

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

    // Users >>
    Route::get('datauser_admin', [UserController::class, 'datauser']);
    Route::get('tambahdatauser_admin', [UserController::class, 'tambahdatauser']);
    Route::post('insertdatauser_admin', [UserController::class, 'insertdatauser']);
    Route::get('editdatauser_admin/{id}', [UserController::class, 'editdatauser']);
    Route::post('updatedatauser_admin/{id}', [UserController::class, 'updatedatauser']);
    Route::get('deletedatauser_admin/{id}', [UserController::class, 'deletedatauser']);

    // Leads >>
    Route::get('datalead_admin', [LeadsController::class, 'datalead_admin']);
    Route::get('tambahdatalead_admin', [LeadsController::class, 'tambahdatalead_admin']);
    Route::post('insertdatalead_admin', [LeadsController::class, 'insertdatalead_admin']);
    Route::get('editdatalead_admin/{id}', [LeadsController::class, 'editdatalead_admin']);
    Route::post('updatedatalead_admin/{id}', [LeadsController::class, 'updatedatalead_admin']);
    Route::get('deletedatalead_admin/{id}', [LeadsController::class, 'deletedatalead_admin']);

    // PRODUCTS >>
    Route::get('dataproduk_admin', [ProductsController::class, 'dataproduk_admin']);
    Route::get('tambahdataproduk_admin', [ProductsController::class, 'tambahdataproduk_admin']);
    Route::post('insertdataproduk_admin', [ProductsController::class, 'insertdataproduk_admin']);
    Route::get('editdataproduk_admin/{id}', [ProductsController::class, 'editdataproduk_admin']);
    Route::post('updatedataproduk_admin/{id}', [ProductsController::class, 'updatedataproduk_admin']);
    Route::get('deletedataproduk_admin/{id}', [ProductsController::class, 'deletedataproduk_admin']);

    // Clients >>
    Route::get('dataclient_admin', [ClientController::class, 'datauser_client']);
    Route::get('tambahdataclient_admin', [ClientController::class, 'tambahdatauser_client']);
    Route::get('insertdataclient_admin', [ClientController::class, 'insertdatauser_client']);
    Route::get('editdataclient_admin', [ClientController::class, 'editdatauser_client']);
    Route::get('updatedataclient_admin', [ClientController::class, 'updatedatauser_client']);
    Route::get('deletedataclient_admin', [ClientController::class, 'deletedatauser_client']);

    /*<< HR >>*/
    // Employees >>
    Route::get('employee_admin', [EmployeeController::class, 'index']);
    Route::get('tambahemployee_admin', [EmployeeController::class, 'tambahemployee']);
    Route::post('insertemployee_admin', [EmployeeController::class, 'insertemployee']);
    Route::get('tampilemployee_admin/{id}', [EmployeeController::class, 'tampilemployee']);
    Route::post('updateemployee_admin/{id}', [EmployeeController::class, 'updateemployee']);
    Route::get('hapusemployee_admin/{id}', [EmployeeController::class, 'hapusemployee']);

    Route::get('filterdata_admin',[AbsensiController::class,'halamanrekap']);
    Route::get('filterdata_admin/{tglawal}/{tglakhir}',[AbsensiController::class,'tampildatakeseluruhan']);

    // Attendances >>
    // Route::get('attendance_admin', [AttendanceController::class, 'index']);
    // Route::get('tambahattendance', [AttendanceController::class, 'tambahattendance']);
    // Route::post('insertattendance', [AttendanceController::class, 'insertattendance']);
    /*<< End HR >>*/

    /*<< Work >>*/
    // Projects >>
    Route::get('dataproject_admin', [ProjectController::class, 'dataproject_admin']);
    Route::get('tambahdataproject_admin', [ProjectController::class, 'tambahdataproject']);
    Route::post('insertdataproject_admin', [ProjectController::class, 'insertdataproject']);
    Route::get('editdataproject_admin/{id}', [ProjectController::class, 'editdataproject']);
    Route::post('updatedataproject_admin/{id}', [ProjectController::class, 'updatedataproject']);
    Route::get('deletedataproject_admin/{id}', [ProjectController::class, 'deletedataproject']);

    // Tasks >>
    Route::get('datatask_admin', [TaskController::class, 'datatask_admin']);
    Route::get('tambahdatatask_admin', [TaskController::class, 'tambahdatatask_admin']);
    Route::post('insertdatatask_admin', [TaskController::class, 'insertdatatask_admin']);
    Route::get('editdatatask_admin/{id}', [TaskController::class, 'editdatatask_admin']);
    Route::post('updatedatatask_admin/{id}', [TaskController::class, 'updatedatatask_admin']);
    Route::get('deletedatatask_admin/{id}', [TaskController::class, 'deletedatatask_admin']);
    /*<< End Work >>*/

    /* << Finance >> */
    // ProposalL >>
    Route::get('dataproposal_admin', [ProposalsController::class, 'dataproposal_admin']);
    Route::get('tambahdataproposal_admin', [ProposalsController::class, 'tambahdataproposal_admin']);
    Route::post('insertdataproposal_admin', [ProposalsController::class, 'insertdataproposal_admin']);
    Route::get('editdataproposal_admin/{id}', [ProposalsController::class, 'editdataproposal_admin']);
    Route::post('updatedataproposal_admin/{id}', [ProposalsController::class, 'updatedataproposal_admin']);
    Route::get('deletedataproposal_admin/{id}', [ProposalsController::class, 'deletedataproposal_admin']);

    // Estimates >>
    Route::get('dataestimate_admin', [EstimatesController::class, 'dataestimate_admin']);
    Route::get('tambahdataestimate_admin', [EstimatesController::class, 'tambahdataestimate_admin']);
    Route::post('insertdataestimate_admin', [EstimatesController::class, 'insertdataestimate_admin']);
    Route::get('editdataestimate_admin/{id}', [EstimatesController::class, 'editdataestimate_admin']);
    Route::post('updatedataestimate_admin/{id}', [EstimatesController::class, 'updatedataestimate_admin']);
    Route::get('deletedataestimate_admin/{id}', [EstimatesController::class, 'deletedataestimate_admin']);

    // invoices >>
    Route::get('datainvoices_admin', [InvoicesController::class, 'datainvoices_admin']);
    Route::get('tambahdatainvoices_admin', [InvoicesController::class, 'tambahdatainvoices_admin']);
    Route::post('insertdatainvoices_admin', [InvoicesController::class, 'insertdatainvoices_admin']);
    Route::get('editdatainvoices_admin/{id}', [InvoicesController::class, 'editdatainvoices_admin']);
    Route::post('updatedatainvoices_admin/{id}', [InvoicesController::class, 'updatedatainvoices_admin']);
    Route::get('deletedatainvoices_admin/{id}', [InvoicesController::class, 'deletedatainvoices_admin']);

    // payments >>
    Route::get('datapayments_admin', [PaymentsController::class, 'datapayments_admin']);
    Route::get('tambahdatapayments_admin', [PaymentsController::class, 'tambahdatapayments_admin']);
    Route::post('insertdatapayments_admin', [PaymentsController::class, 'insertdatapayments_admin']);
    Route::get('editdatapayments_admin/{id}', [PaymentsController::class, 'editdatapayments_admin']);
    Route::post('updatedatapayments_admin/{id}', [PaymentsController::class, 'updatedatapayments_admin']);
    Route::get('deletedatapayments_admin/{id}', [PaymentsController::class, 'deletedatapayments_admin']);
    /* << End Finance >> */

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

    //Projects>>
    Route::get('dataproject_employee', [ProjectController::class, 'dataproject_employee']);

    //Tasks>>
    Route::get('datatask_employee', [TaskController::class, 'datatask_employee']);

    //Tickets>>
    Route::get('ticket_employee', [TicketController::class, 'viewtiket_employee']);
    Route::get('tambahtiket_employee', [TicketController::class, 'tambahtiket_employee']);
    Route::post('insertdatatiket_employee', [TicketController::class, 'insertdatatiket_employee']);
    Route::get('tampildatatiket_employee/{id}', [TicketController::class, 'tampildatatiket_employee']);
    Route::post('updatedataticket_employee/{id}', [TicketController::class, 'updatedataticket_employee']);
    Route::get('deleteticket_employee/{id}', [TicketController::class, 'deleteticket_employee']);

    //Customers/Clients>>
    Route::get('dataclient_employee', [ClientController::class, 'dataclient_employee']);

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

    // Projects >>
    Route::get('dataproject_client', [ProjectController::class, 'dataproject_client']);

    // Tasks >>
    Route::get('datatask_client', [TaskController::class, 'datatask_client']);

    //Tickets>>
    Route::get('dataticket_client', [TicketController::class, 'dataticket_client']);
    Route::get('tambahdataticket_client', [TicketController::class, 'tambahdataticket_client']);
    Route::post('insertdataticket_client', [TicketController::class, 'insertdataticket_client']);
    Route::get('editdataticket_client/{id}', [TicketController::class, 'editdataticket_client']);
    Route::post('updatedataticket_client/{id}', [TicketController::class, 'updatedataticket_client']);
    Route::get('deletedataticket_client/{id}', [TicketController::class, 'deletedataticket_client']);
    Route::get('exportpdf_client', [TicketController::class, 'exportpdf_client']);

    // Knowledgebases >>
    Route::get('knowledgebase', [KnowledgebaseController::class, 'knowledgebase']);

});
