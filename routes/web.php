<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\CourseDetailController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\LearningCategoryController;
use App\Http\Controllers\LearningCategoryQuestionnairyController;
use App\Http\Controllers\LecturerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuestionnairyController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudyProgramController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    //Landing
    Route::get('/questionnaire/{courseDetail}', [LandingController::class, 'questionnaire'])->name('questionnaire');
    Route::post('/questionnaire/{courseDetail}', [LandingController::class, 'store'])->name('questionnaire.store');
    Route::get('/questionnaire/result/{questionnaireResult}', [LandingController::class, 'result'])->name('questionnaire.result');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    //Users
    Route::get('users', [UserController::class, 'index'])->name('users.index');
    Route::get('users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('users', [UserController::class, 'store'])->name('users.store');
    Route::get('users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('users/{user}', [UserController::class, 'update'])->name('users.update');
    Route::delete('users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
    //Lecturers
    Route::get('lecturers', [LecturerController::class, 'index'])->name('lecturers.index');
    Route::get('lecturers/create', [LecturerController::class, 'create'])->name('lecturers.create');
    Route::post('lecturers', [LecturerController::class, 'store'])->name('lecturers.store');
    Route::get('lecturers/{lecturer}/edit', [LecturerController::class, 'edit'])->name('lecturers.edit');
    Route::put('lecturers/{lecturer}', [LecturerController::class, 'update'])->name('lecturers.update');
    Route::delete('lecturers/{lecturer}', [LecturerController::class, 'destroy'])->name('lecturers.destroy');
    //Students
    Route::get('students', [StudentController::class, 'index'])->name('students.index');
    Route::get('students/create', [StudentController::class, 'create'])->name('students.create');
    Route::post('students', [StudentController::class, 'store'])->name('students.store');
    Route::get('students/{student}/edit', [StudentController::class, 'edit'])->name('students.edit');
    Route::put('students/{student}', [StudentController::class, 'update'])->name('students.update');
    Route::delete('students/{student}', [StudentController::class, 'destroy'])->name('students.destroy');
    //Faculties
    Route::get('faculties', [FacultyController::class, 'index'])->name('faculties.index');
    Route::get('faculties/create', [FacultyController::class, 'create'])->name('faculties.create');
    Route::post('faculties', [FacultyController::class, 'store'])->name('faculties.store');
    Route::get('faculties/{faculty}/edit', [FacultyController::class, 'edit'])->name('faculties.edit');
    Route::put('faculties/{faculty}', [FacultyController::class, 'update'])->name('faculties.update');
    Route::delete('faculties/{faculty}', [FacultyController::class, 'destroy'])->name('faculties.destroy');
    //Departments
    Route::get('departments', [DepartmentController::class, 'index'])->name('departments.index');
    Route::get('departments/create', [DepartmentController::class, 'create'])->name('departments.create');
    Route::post('departments', [DepartmentController::class, 'store'])->name('departments.store');
    Route::get('departments/{department}/edit', [DepartmentController::class, 'edit'])->name('departments.edit');
    Route::put('departments/{department}', [DepartmentController::class, 'update'])->name('departments.update');
    Route::delete('departments/{department}', [DepartmentController::class, 'destroy'])->name('departments.destroy');
    //Study Programs
    Route::get('study-programs', [StudyProgramController::class, 'index'])->name('study_programs.index');
    Route::get('study-programs/create', [StudyProgramController::class, 'create'])->name('study_programs.create');
    Route::post('study-programs', [StudyProgramController::class, 'store'])->name('study_programs.store');
    Route::get('study-programs/{studyProgram}/edit', [StudyProgramController::class, 'edit'])->name('study_programs.edit');
    Route::put('study-programs/{studyProgram}', [StudyProgramController::class, 'update'])->name('study_programs.update');
    Route::delete('study-programs/{studyProgram}', [StudyProgramController::class, 'destroy'])->name('study_programs.destroy');
    //Courses
    Route::get('courses', [CourseController::class, 'index'])->name('courses.index');
    Route::get('courses/create', [CourseController::class, 'create'])->name('courses.create');
    Route::post('courses', [CourseController::class, 'store'])->name('courses.store');
    Route::get('courses/{course}/edit', [CourseController::class, 'edit'])->name('courses.edit');
    Route::put('courses/{course}', [CourseController::class, 'update'])->name('courses.update');
    Route::delete('courses/{course}', [CourseController::class, 'destroy'])->name('courses.destroy');
    //Course Details
    Route::get('courses/{course}/details', [CourseDetailController::class, 'index'])->name('courses.details.index');
    Route::get('courses/{course}/details/create', [CourseDetailController::class, 'create'])->name('courses.details.create');
    Route::post('courses/{course}/details', [CourseDetailController::class, 'store'])->name('courses.details.store');
    Route::get('courses/details/{courseDetail}/edit', [CourseDetailController::class, 'edit'])->name('courses.details.edit');
    Route::put('courses/details/{courseDetail}', [CourseDetailController::class, 'update'])->name('courses.details.update');
    Route::delete('courses/details/{courseDetail}', [CourseDetailController::class, 'destroy'])->name('courses.details.destroy');
    Route::get('courses/details/{courseDetail}/result', [CourseDetailController::class, 'result'])->name('courses.details.result');
    //Schedules
    Route::get('schedules', [ScheduleController::class, 'index'])->name('schedules.index');
    Route::get('schedules/create', [ScheduleController::class, 'create'])->name('schedules.create');
    Route::post('schedules', [ScheduleController::class, 'store'])->name('schedules.store');
    Route::get('schedules/{schedule}/edit', [ScheduleController::class, 'edit'])->name('schedules.edit');
    Route::put('schedules/{schedule}', [ScheduleController::class, 'update'])->name('schedules.update');
    Route::delete('schedules/{schedule}', [ScheduleController::class, 'destroy'])->name('schedules.destroy');
    //Learning Categories
    Route::get('learning-categories', [LearningCategoryController::class, 'index'])->name('learning_categories.index');
    Route::get('learning-categories/create', [LearningCategoryController::class, 'create'])->name('learning_categories.create');
    Route::post('learning-categories', [LearningCategoryController::class, 'store'])->name('learning_categories.store');
    Route::get('learning-categories/{learningCategory}/edit', [LearningCategoryController::class, 'edit'])->name('learning_categories.edit');
    Route::put('learning-categories/{learningCategory}', [LearningCategoryController::class, 'update'])->name('learning_categories.update');
    Route::delete('learning-categories/{learningCategory}', [LearningCategoryController::class, 'destroy'])->name('learning_categories.destroy');
    //Questionnairies
    Route::get('courses/details/{courseDetail}/questionnaires', [QuestionnairyController::class, 'index'])->name('courses.details.questionnaires.index');
    Route::get('courses/details/{courseDetail}/questionnaires/create', [QuestionnairyController::class, 'create'])->name('courses.details.questionnaires.create');
    Route::post('courses/details/{courseDetail}/questionnaires', [QuestionnairyController::class, 'store'])->name('courses.details.questionnaires.store');
    Route::get('courses/details/questionnaires/{questionnairy}/edit', [QuestionnairyController::class, 'edit'])->name('courses.details.questionnaires.edit');
    Route::put('courses/details/questionnaires/{questionnairy}', [QuestionnairyController::class, 'update'])->name('courses.details.questionnaires.update');
    Route::delete('courses/details/questionnaires/{questionnairy}', [QuestionnairyController::class, 'destroy'])->name('courses.details.questionnaires.destroy');
    //Learning Category Questionnairies
    Route::get('courses/details/questionnaires/{questionnairy}/category', [LearningCategoryQuestionnairyController::class, 'index'])->name('courses.details.questionnaires.category.index');
    Route::get('courses/details/questionnaires/{questionnairy}/category/create', [LearningCategoryQuestionnairyController::class, 'create'])->name('courses.details.questionnaires.category.create');
    Route::post('courses/details/questionnaires/{questionnairy}/category', [LearningCategoryQuestionnairyController::class, 'store'])->name('courses.details.questionnaires.category.store');
    Route::get('courses/details/questionnaires/category/{learningCategoryQuestionnairy}/edit', [LearningCategoryQuestionnairyController::class, 'edit'])->name('courses.details.questionnaires.category.edit');
    Route::put('courses/details/questionnaires/category/{learningCategoryQuestionnairy}', [LearningCategoryQuestionnairyController::class, 'update'])->name('courses.details.questionnaires.category.update');
    Route::delete('courses/details/questionnaires/category/{learningCategoryQuestionnairy}', [LearningCategoryQuestionnairyController::class, 'destroy'])->name('courses.details.questionnaires.category.destroy');
});

require __DIR__.'/auth.php';
