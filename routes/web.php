<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;

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

// Routes for tickets
Route::get('tickets', [TicketController::class, 'index']);
Route::get('tickets/list', [TicketController::class, 'getTickets'])->name('ticket.list');

Route::get('tickets/{id}/edit',  [TicketController::class, 'edit']);
Route::patch('tickets/{id}/update',  [TicketController::class, 'update'])->name('ticket.update');
Route::delete('tickets/{id}/delete',  [TicketController::class, 'destroy'])->name('ticket.delete');
