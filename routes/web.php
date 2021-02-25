<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\CustomarController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\SalaryController;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('home');
})->name('dashboard');
//
// Auth::routes();
//
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//EMPLOYEES ROUTES Here
Route::get('/add-employee',[EmployeesController::class,'addEmployee'])->name('add-employee');
Route::post('/save-employee',[EmployeesController::class,'saveEmployee'])->name('save-employee');
Route::get('/all-employee',[EmployeesController::class,'allEmployee'])->name('all-employee');
Route::get('edite-employee/{employee_id}',[EmployeesController::class,'editeEmployee'])->name('edite-employee');
Route::post('/editemp/{editid}',[EmployeesController::class,'updateEmp'])->name('editemp');
Route::get('/delete-employee/{employee_id}',[EmployeesController::class,'deleteEmployee'])->name('delete-employee');
Route::get('/fullview-employee/{employee_id}',[EmployeesController::class,'fullviewEmployee'])->name('fullview-employee');
 Route::get('/getempinfo/{id}',[EmployeesController::class,'getempInfo'])->name('getempinfo');
 Route::post('/empupdate',[EmployeesController::class,'empUpdate'])->name('empupdate');

//CUSTOMAR ROUTE HERRE
Route::get('/add-customar',[CustomarController::class,'addCustomar'])->name('add-customar');
Route::post('/save-customar',[CustomarController::class,'saveCustomar'])->name('save-customar');
Route::get('/all-customar',[CustomarController::class,'allCustomar'])->name('all-customar');
Route::get('/edit-customar/{cusId}',[CustomarController::class,'editCustomar'])->name('edit_customar');

//SUPPLIER ROUTE HERRE
Route::get('/add-supplier',[SupplierController::class,'addSupplier'])->name('add-supplier');
Route::post('/save-supplier',[SupplierController::class,'saveSupplier'])->name('save-supplier');
Route::get('/all-supplier',[SupplierController::class,'allSupplier'])->name('all-supplier');

//salary Yaf_Controller_Abstract
Route::get('/advance-salary',[SalaryController::class,'advanceSalary'])->name('advance-salary');
Route::post('/save-advancesalary',[SalaryController::class,'saveAdvancesalary'])->name('save-advancesalary');
