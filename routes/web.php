<?php

use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TicketController;
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

Route::get('/proyek', [ProjectController::class, 'index'])->name('proyek');

Route::get('/tiket', [TicketController::class, 'index'])->name('tiket');
Route::get('/tambahtiket', [TicketController::class, 'tambahtiket'])->name('tambahtiket');
Route::post('/insertdatatiket', [TicketController::class, 'insertdatatiket'])->name('insertdatatiket');
Route::get('/tampildatatiket/{id}', [TicketController::class, 'tampildatatiket'])->name('tampildatatiket');
Route::post('/updatedatatiket/{id}', [TicketController::class, 'updatedatatiket'])->name('updatedatatiket');
Route::get('/delete/{id}', [TicketController::class, 'delete'])->name('delete');
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
Route::get('/deletetask/{id}', [TaskController::class, 'deletetask'])->name('deletetask');
