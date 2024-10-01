<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [EmployeeController::class, 'index']) -> name('employees.index');
//show
Route::get('/employees/{id}/show', [EmployeeController::class, 'show']) -> name('employees.show');
//create
Route::get('/employees/create', [EmployeeController::class, 'create']) -> name('employees.create');
//store
Route::post('/employees/store', [EmployeeController::class, 'store']) -> name('employees.store');
//delete
Route::delete('/employees/{id}/delete', [EmployeeController::class, 'destroy']) -> name('employees.destroy');