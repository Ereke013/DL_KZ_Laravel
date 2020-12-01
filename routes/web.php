<?php

//use Illuminate\Http\Client\Request;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GroupLessonController;
use App\Http\Controllers\TeachController;
use App\Http\Requests\GroupsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('helloPage');
})->name('home');

Route::get('/signIn', function () {
    return view('signIn');
})->name('signIn');

Route::post('/signIn', [AuthController:: class, 'auth'])->name('signIn');

Route::get('/admin', [TeachController::class, 'allData'])->name('admin');

Route::get('/dlKz', function () {
    return view('userPage');
})->name('user');

Route::post('/signIn/submit', 'App\Http\Controllers\UserController@submit')->name('signIn-form');

//<-Teachers->
Route::get('/teachers', 'App\Http\Controllers\TeachersController@allData')->name('teachers');

Route::post('/teachers/submit', 'App\Http\Controllers\TeachersController@submit')->name('teachers-form');

Route::get('/teachers/{id}', 'App\Http\Controllers\TeachersController@teacherDetails')->name('teachers-details');

Route::get('/teachers/{id}/edit', 'App\Http\Controllers\TeachersController@teacherEdit')->name('teachers-edit');

Route::get('/teachers/{id}/delete', 'App\Http\Controllers\TeachersController@teacherDelete')->name('teachers-delete');

Route::post('/teachers/{id}/edit', 'App\Http\Controllers\TeachersController@teacherSave')->name('teachers-save');
//<-End Teachers->


//<-Students->
Route::get('/students', 'App\Http\Controllers\StudentsController@allData')->name('students');

Route::get('/students/{id}', 'App\Http\Controllers\StudentsController@studentDetails')->name('students-details');

Route::post('/students/submit', 'App\Http\Controllers\StudentsController@submit')->name('student-form');

Route::get('/students/{id}/edit', 'App\Http\Controllers\StudentsController@studentEdit')->name('student-edit');

Route::get('/students/{id}/delete', 'App\Http\Controllers\StudentsController@studentDelete')->name('student-delete');

Route::post('/students/{id}/edit', 'App\Http\Controllers\StudentsController@studentSave')->name('student-save');
//<-End Students->


//<-Group->
Route::get('/groups', 'App\Http\Controllers\GroupsController@allData')->name('groups');

Route::get('/groups/add','App\Http\Controllers\GroupsController@submit' )->name('groupsAdd');

Route::get('/groups/{id}/edit', 'App\Http\Controllers\GroupsController@groupsEdit')->name('group-edit');

Route::post('/groups/{id}/edit', 'App\Http\Controllers\GroupsController@groupsSave')->name('group-save');
//<-End Group->


//<-Subject->
Route::get('/subjects', 'App\Http\Controllers\SubjectsController@allData')->name('subjects');

Route::get('/subjects/{id}', 'App\Http\Controllers\SubjectsController@subjectDetails')->name('subjects-details');

Route::post('/subjects/submit', 'App\Http\Controllers\SubjectsController@submit')->name('subjects-form');

Route::get('/subjects/{id}/edit', 'App\Http\Controllers\SubjectsController@subjectEdit')->name('subjects-edit');

Route::get('/subjects/{id}/delete', 'App\Http\Controllers\SubjectsController@subjectDelete')->name('subjects-delete');

Route::post('/subjects/{id}/edit', 'App\Http\Controllers\SubjectsController@subjectSave')->name('subjects-save');
//<-End Subject->


//<-Teach->
Route::get('/teaches', 'App\Http\Controllers\TeachController@allData')->name('teaches');

Route::get('/teaches/{id}', 'App\Http\Controllers\TeachController@teachDetails')->name('teaches-details');

Route::post('/teaches/submit', 'App\Http\Controllers\TeachController@submit')->name('teaches-form');

Route::get('/teaches/{id}/edit', 'App\Http\Controllers\TeachController@teachEdit')->name('teaches-edit');

Route::get('/teaches/{id}/delete', 'App\Http\Controllers\TeachController@teachDelete')->name('teaches-delete');

Route::post('/teaches/{id}/edit', 'App\Http\Controllers\TeachController@teachSave')->name('teaches-save');
//<-EndTeach->


//<- Group lesson ->
Route::get('/group_lessons', [GroupLessonController::class, 'allData'])->name('group_lessons');

Route::get('/group_lessons/{id}', [GroupLessonController::class, 'grLessonsDetails'])->name('group_lessons-details');

Route::post('/group_lessons/submit', [GroupLessonController::class, 'submit'])->name('group_lessons-form');

Route::get('/group_lessons/{id}/edit', [GroupLessonController::class, 'grLessonsEdit'])->name('group_lessons-edit');

Route::get('/group_lessons/{id}/delete', [GroupLessonController::class, 'grLessonsDelete'])->name('group_lessons-delete');

Route::post('/group_lessons/{id}/edit', [GroupLessonController::class, 'grLessonsSave'])->name('group_lessons-save');
//<- End Group lesson ->

//Route::get('/subjects', function () {
//    return view('subjectsAdmin');
//})->name('subjects');











