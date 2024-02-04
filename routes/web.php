<?php

use App\Http\Controllers\StudentController;
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

//Students
Route::get('students', [StudentController::class, 'index'])->name('student.all');
Route::get('them-sinhvien', [StudentController::class, 'addstudent'])->name('student.add');
Route::post('them-sinhvien', [StudentController::class, 'store'])->name('student.store');
Route::get('edit-sinhvien/{id}', [StudentController::class, 'edit'])->name('student.edit');
Route::post('update-sinhvien/{id}', [StudentController::class, 'update'])->name('student.update');
// Route::get('delete-sinhvien/{id}', [StudentController::class, 'delete'])->name('student.delete');
Route::delete('delete-sinhvien/{id}', [StudentController::class, 'delete'])->name('student.delete');