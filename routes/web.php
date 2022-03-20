<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;
use App\Models\Student;
use App\Models\Course;

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
    return view('layouts.main');
});

Route::get('/students', [StudentsController::class, "list"]);
Route::get('/students/{student}', [StudentsController::class, "student"]);
Route::get('/students/{student}/delete', [StudentsController::class, "delete"])->name('student.delete');
Route::get('/studygroups', [StudentsController::class, "listgroup"]);
Route::get('/studygroup/{course}', [StudentsController::class, "groupDetails"])->name('studygroup.details');
Route::get('/createstudent', [StudentsController::class, "createList"]);
Route::post('/createstudent', [StudentsController::class, "add"]);
Route::get('/students/edit/{student}', [StudentsController::class, "studentsEdit"])->name('students.edit');
Route::post('/students/edit/{student}', [StudentsController::class, "studentsUpdate"])->name('students.edit.update');


