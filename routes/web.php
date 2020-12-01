<?php

use Illuminate\Support\Facades\Route;

/* Frontend Route here*/
Route::group(['namespace' =>'Frontend'],function(){
        Route::get('/',  'FrontendController@index');
        Route::get('/course',  'FrontendController@course');
        Route::get('/blog',  'FrontendController@blog');
        Route::get('/gallery',  'FrontendController@gallery');
        Route::get('/contact',  'FrontendController@contact');
});


//student route here
Route::group(['middleware' => ['studentSession']],function(){
    Route::match(['get','post'], '/account','StudentController@account');
    Route::match(['get','post'], '/student-biodata','StudentController@studentBioData');
    Route::match(['get','post'], '/student-choose-course','StudentController@studentChooseCourse');
    Route::match(['get','post'], '/student-lecture-calender','StudentController@studentLectureCalender');
    Route::match(['get','post'], '/student-lecture-activities','StudentController@studentLectureActivities');
    Route::match(['get','post'], '/student-exam-marks','StudentController@studentExamMarks');
    Route::match(['get','post'], '/time-schedule','StudentController@studentTimeSchedule');

    Route::match(['get', 'post'], '/verify-student-password', 'StudentController@verifyPassword');
    Route::match(['get', 'post'], '/student-update-password', 'StudentController@changePassword');

});

//student
Route::get('/student','StudentController@studentLogin')->name('student');
Route::get('/studentlogout','StudentController@studentLogout');
Route::post('/studentLogin','StudentController@LoginStudent');


//Multiple language Route
Route::get('locale/{locale}','StudentController@languages');


//Pdf Integration
Route::get('/pdf-download-class-assign','ClassAssigningController@pdfGenerator')->name('pdf-download-class-assign');
Route::get('/teachers/pdf','TeacherController@pdfGenerator')->name('teachers.pdf');
Route::get('/class_schedule/pdf','ClassSchedulingController@pdfGenerator')->name('class_schedule.pdf');



//Excel export Route here
Route::get('/teachers/excel-export_xlsx','TeacherController@ExcelExport_xlsx');
Route::get('/teachers/excel-export_xls','TeacherController@ExcelExport_xls');
Route::get('/teachers/excel-export_csv','TeacherController@ExcelExport_csv');

//Excel import route here
Route::post('/teachers/excel-import','TeacherController@ExcelImport');
Route::get('/teachers/print/{id}','TeacherController@TeacherPrint')->name('teachers.print');

//teacher status
Route::get('/teacher/updateStatus','TeacherController@updateStatus');


//forgot password route
Route::get('student-forgot-password','StudentController@getForgotPassword');
Route::post('forgot-password','StudentController@ForgotPassword');



Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->middleware('verified');


//All Resource Route
Route::resource('classes', 'ClassesController');

Route::resource('classrooms', 'ClassroomController');
    Route::resource('levels', 'LevelController');



Route::resource('batches', 'BatchController');

Route::resource('shifts', 'ShiftController');

Route::resource('courses', 'CourseController');

Route::resource('faculties', 'FacultyController');

Route::resource('times', 'TimeController');

Route::resource('attendences', 'AttendenceController');

Route::resource('academics', 'AcademicController');

Route::resource('days', 'DayController');

Route::resource('classAssignings', 'ClassAssigningController');

Route::resource('classSchedulings', 'ClassSchedulingController');

Route::resource('transactions', 'TransactionController');

Route::resource('admissions', 'AdmissionController');

Route::resource('roles', 'RoleController');

Route::resource('teachers', 'TeacherController');

Route::resource('users', 'UserController');

Route::resource('semesters', 'SemesterController');

//IN Here we will write the route for our dynamic selection


Route::get('/dynamicLevel',['as'=>'dynamicLevel','uses'=>'ClassSchedulingController@DynamicLevel']);




Route::resource('departments', 'DepartmentController');


Route::resource('feeStructures', 'FeeStructureController');

Route::resource('feeStructures', 'FeeStructureController');

Route::resource('fees', 'FeeController');