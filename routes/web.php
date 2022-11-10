<?php

use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\LeadsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductsController;
use App\Models\Ticket;
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
    $totaltiket = Ticket::count();
    $totallowtiket = Ticket::where('others', 'Low')->count();
    $totalmediumtiket = Ticket::where('others', 'Medium')->count();
    $totalhightiket = Ticket::where('others', 'High')->count();
    $totalurgenttiket = Ticket::where('others', 'Urgent')->count();
    return view('welcome', compact('totaltiket', 'totallowtiket', 'totalmediumtiket', 'totalhightiket', 'totalurgenttiket'));
});

//Login
Route::get('/formlogin', [LoginController::class, 'formlogin'])->name('formlogin');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logut');

Route::get('/viewuser', [UserController::class, 'index'])->name('viewuser');
Route::get('/tampiluser', [UserController::class, 'inputuser'])->name('tampiluser');
Route::post('/insertdatauser', [UserController::class, 'insertdatauser'])->name('insertdatauser');
Route::get('/tampilupdateuser/{id}', [UserController::class, 'edituser'])->name('tampilupdateuser');
Route::post('/updateuser/{id}', [UserController::class, 'updateuser'])->name('updateuser');
Route::get('/deleteuser/{id}', [UserController::class, 'deleteuser'])->name('deleteuser');

//PortalCLient
Route::get('/proyek', [ProjectController::class, 'index'])->name('proyek');

Route::get('/tiket', [TicketController::class, 'index'])->name('tiket');
Route::get('/tambahtiket', [TicketController::class, 'tambahtiket'])->name('tambahtiket');
Route::post('/insertdatatiket', [TicketController::class, 'insertdatatiket'])->name('insertdatatiket');
Route::get('/tampildatatiket/{id}', [TicketController::class, 'tampildatatiket'])->name('tampildatatiket');
Route::post('/updatedatatiket/{id}', [TicketController::class, 'updatedatatiket'])->name('updatedatatiket');
Route::get('/deletetiket/{id}', [TicketController::class, 'deletetiket'])->name('deletetiket');
Route::get('/exportpdf', [TicketController::class, 'exportpdf'])->name('exportpdf');

//Portal Employee
//Employee
Route::get('/employee', [EmployeeController::class, 'index'])->name('employee');
Route::get('/tambahemployee', [EmployeeController::class, 'tambahemployee'])->name('tambahemployee');
Route::post('/insertemployee', [EmployeeController::class, 'insertemployee'])->name('insertemployee');

Route::get('/tampilemployee/{id}', [EmployeeController::class, 'tampilemployee'])->name('tampilemployee');
Route::post('/updateemployee/{id}', [EmployeeController::class, 'updateemployee'])->name('updateemployee');

Route::get('/hapusemployee/{id}', [EmployeeController::class, 'hapusemployee'])->name('hapusemployee');

//Attendance
Route::get('/attendance', [AttendanceController::class, 'index'])->name('attendance');
Route::get('/tambahattendance', [AttendanceController::class, 'tambahattendance'])->name('tambahdataattendance');
Route::post('/insertattendance', [AttendanceController::class, 'insertattendance'])->name('insertattendance');

//Ticket
/* Route::get('/tiketemployee', [TicketEmployeeController::class, 'index'])->name('tiket');
Route::get('/updatetiketemployee/{id}', [TicketEmployeeController::class, 'tampildatatiket'])->name('tampildatatiket'); */

//Task
Route::get('/task', [TaskController::class, 'index'])->name('task');
Route::get('/tambahtask', [TaskController::class, 'tambahtask'])->name('tambahtask');
Route::post('/insertdatatask', [TaskController::class, 'insertdatatask'])->name('insertdatatask');
Route::get('/tampildatatask/{id}', [TaskController::class, 'tampildatatask'])->name('tampildatatask');
Route::post('/updatedatatask/{id}', [TaskController::class, 'updatedatatask'])->name('updatedatatask');
// Route::get('/delete/{id}', [TaskController::class, 'delete'])->name('delete');

//LEADS
Route::get('/leads', [LeadsController::class, 'index'])->name('leads');
Route::get('/tambahleads', [LeadsController::class, 'tambahleads'])->name('tambahleads');
Route::post('/insertdataleads', [LeadsController::class, 'insertdataleads'])->name('insertdataleads');
Route::get('/tampildataleads/{id}', [LeadsController::class, 'tampildataleads'])->name('tampildataleads');
Route::get('/deleteleads/{id}', [LeadsController::class, 'deleteleads'])->name('deleteleads');

//PRODUCTS
Route::get('/produk', [ProductsController::class, 'index'])->name('leads');
Route::get('/tambahleads', [ProductsController::class, 'tambahleads'])->name('tambahleads');
Route::post('/insertdataleads', [ProductsController::class, 'insertdataleads'])->name('insertdataleads');
Route::get('/tampildataleads/{id}', [ProductsController::class, 'tampildataleads'])->name('tampildataleads');
Route::get('/deleteleads/{id}', [ProductsController::class, 'deleteleads'])->name('deleteleads');