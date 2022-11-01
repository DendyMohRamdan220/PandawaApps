<?php

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
