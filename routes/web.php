<?php
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get(
    'courses', 
    [CourseController::class, 'index']
)->name('course.index');


Route::get(
    'courses/{id}', 
    [CourseController::class, 'show']
)->name('course.show');


Route::get(
    'students/trash/{id}',[StudentController::class, 'trash']
    ) ->name('students.trash')->middleware(['auth', 'verified']);

Route::resource('students', StudentController::class)->middleware(['auth', 'verified']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
