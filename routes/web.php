<?php

use App\Http\Controllers\EmployeeController;
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
    return view('welcome');
});

Route::get('/add-employee',[EmployeeController::class,'addEmployee']);
Route::get('/export-excel',[EmployeeController::class,'exportIntoExcel']);

Route::get('/export-csv',[EmployeeController::class,'exportIntoCSV']);

Route::get('/import-form',[EmployeeController::class,'importForm']);

Route::post('/import',[EmployeeController::class,'import'])->name('employee.import');


