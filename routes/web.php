<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\DepartmentController;
use App\Http\Middleware\AdminAuthenticate;

Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::middleware('auth')->group(function () {
    Route::middleware([AdminAuthenticate::class])->group(function () {
        Route::group(['prefix' => 'admin/'], function () {
            Route::get('dashboard', [AdminController::class, 'index'])->name('admindashboard');
            Route::get('class', [GradeController::class, 'index'])->name('class.show');
            Route::get('class/create', [GradeController::class, 'create'])->name('class.create');
            Route::post('class/submit', [GradeController::class, 'store'])->name('class.submit');
            Route::get('class/edit/{id}', [GradeController::class, 'edit'])->name('class.edit');
            Route::post('class/update/{id}', [GradeController::class, 'update'])->name('class.update');
            Route::get('class/delete/{id}', [GradeController::class, 'destroy'])->name('class.delete');

            Route::get('department', [DepartmentController::class, 'index'])->name('department.show');
            Route::get('department/create', [DepartmentController::class, 'create'])->name('department.create');
            Route::post('department/submit', [DepartmentController::class, 'store'])->name('department.submit');
            Route::get('department/edit/{id}', [DepartmentController::class, 'edit'])->name('department.edit');
            Route::post('department/update/{id}', [DepartmentController::class, 'update'])->name('department.update');
            Route::get('department/delete/{id}', [DepartmentController::class, 'destroy'])->name('department.delete');

            Route::get('session', [SessionController::class, 'index'])->name('session.show');
            Route::get('session/create', [SessionController::class, 'create'])->name('session.create');
            Route::post('session/submit', [SessionController::class, 'store'])->name('session.submit');
            Route::get('session/edit/{id}', [SessionController::class, 'edit'])->name('session.edit');
            Route::post('session/update/{id}', [SessionController::class, 'update'])->name('session.update');
            Route::get('session/delete/{id}', [SessionController::class, 'destroy'])->name('session.delete');

            Route::get('subject', [SubjectController::class, 'index'])->name('subject.show');
            Route::get('subject/create', [SubjectController::class, 'create'])->name('subject.create');
            Route::post('subject/submit', [SubjectController::class, 'store'])->name('subject.submit');
            Route::get('subject/edit/{id}', [SubjectController::class, 'edit'])->name('subject.edit');
            Route::post('subject/update/{id}', [SubjectController::class, 'update'])->name('subject.update');
            Route::get('subject/delete/{id}', [SubjectController::class, 'destroy'])->name('subject.delete');


            Route::get('student', [StudentController::class, 'index'])->name('student.show');
            Route::get('student/create', [StudentController::class, 'create'])->name('student.create');
            Route::post('student/submit', [StudentController::class, 'store'])->name('student.submit');
            Route::get('student/{id}', [StudentController::class, 'show'])->name('student.single');
            Route::get('student/edit/{id}', [StudentController::class, 'edit'])->name('student.edit');
            Route::put('student/update/{id}', [StudentController::class, 'update'])->name('student.update');
            Route::get('student/delete/{id}', [StudentController::class, 'destroy'])->name('student.delete');

            Route::get('logout', [GradeController::class, 'logout'])->name('admin.logout');
        });
    });


    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/detail/{id}', [ProfileController::class, 'details'])->name('detail');


    Route::post('/profile/updateUserImage/{id}', [ProfileController::class, 'updateUserImage'])->name('updateUserImage');
    Route::post('/SI', [ProfileController::class, 'imageofuser'])->name('SI');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/logout', [ProfileController::class, 'logout'])->name('profile.logout');
});


Route::fallback(function () {                         
    return view('404');               
});


require __DIR__ . '/auth.php';
