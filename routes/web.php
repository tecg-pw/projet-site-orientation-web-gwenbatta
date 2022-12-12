<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ActualityController;
use App\Http\Controllers\AgencyContactController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DocController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\GlossaryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\LatestAnswerController;
use App\Http\Controllers\LatestSubjectController;
use App\Http\Controllers\LegalController;
use App\Http\Controllers\MyAnswerController;
use App\Http\Controllers\MySubjectController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\RegisterSessionController;
use App\Http\Controllers\StudentContactController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeachAlumniController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TechnicalController;
use App\Http\Controllers\ToolController;
use App\Http\Controllers\TutoController;
use App\Http\Controllers\UserController;
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
    $locale = substr(Request::server('HTTP_ACCEPT_LANGUAGE'), 0, 2);
    return redirect('/' . $locale);
});

Route::get('/{locale?}', [HomeController::class, 'index']);

Route::get('/{locale?}/legals',[LegalController::class, 'index']);


Route::get('/{locale?}/about', [AboutController::class, 'index']);
Route::get('/{locale?}/about/job/{job:slug}', [JobController::class, 'show']);

Route::get('/{locale?}/project/index', [ProjectController::class, 'index']);
Route::get('/{locale?}/project/{project:slug}', [ProjectController::class, 'show']);

Route::get('/{locale?}/technical/index', [TechnicalController::class, 'index']);
Route::get('/{locale?}/technical/books/{book:slug}', [BookController::class, 'show']);

Route::get('/{locale?}/technical/glossary', [GlossaryController::class, 'index']);
Route::get('/{locale?}/technical/tuto', [TutoController::class, 'index']);
Route::get('/{locale?}/technical/docandtool/doc', [DocController::class, 'index', BookController::class, 'index']);
Route::get('/{locale?}/technical/docandtool/tool', [ToolController::class, 'index', BookController::class, 'index'] );


Route::get('/{locale?}/entreprise/partner', [PartnerController::class, 'index']);
Route::get('/{locale?}/entreprise/partner/{partner:slug}', [PartnerController::class, 'show']);
Route::get('/{locale?}/entreprise/internship', [OfferController::class, 'index']);
Route::get('/{locale?}/entreprise/internship/{offer:slug}', [OfferController::class, 'show']);


Route::get('/{locale?}/bottin', [PersonController::class, 'index']);
Route::get('/{locale?}/bottin/alumni', [AlumniController::class, 'index']);
Route::get('/{locale?}/bottin/alumni/{alumni:slug}', [AlumniController::class, 'show']);
Route::get('/{locale?}/bottin/teacher/{teacher:slug}', [TeacherController::class, 'show']);
Route::get('/{locale?}/bottin/teachalumni/{teachalumni:slug}', [TeachAlumniController::class, 'show']);
Route::get('/{locale?}/bottin/student/{student:slug}', [StudentController::class, 'show']);

Route::get('/{locale?}/cours/{course:slug}', [CourseController::class, 'show']);


Route::get('/{locale?}/user/login', [AuthenticatedSessionController::class, 'create'])->name('login')->middleware('guest');
Route::get('/{locale?}/user/register', [RegisterSessionController::class, 'create'])->name('register')->middleware('guest');
Route::post('/login', [AuthenticatedSessionController::class, 'store'])->middleware('guest');
Route::post('/register', [RegisterSessionController::class, 'store'])->middleware('guest');
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->middleware('auth');
Route::get('/{locale?}/user/profile/{user:slug}', [UserController::class, 'show'])->middleware('auth');
Route::get('/{locale?}/user/profile/modify/{user:slug}', [UserController::class, 'edit'])->middleware('auth');
Route::get('/{locale?}/user/password', function () {
    return view('user.password');
});


Route::get('/{locale?}/contact/student', [StudentContactController::class, 'index']);
Route::get('/{locale?}/contact/agency', [AgencyContactController::class, 'index']);


Route::get('/{locale?}/forum/question', [ForumController::class, 'create'])->middleware('auth');
Route::post('/subject', [ForumController::class, 'store'])->middleware('auth');
Route::get('/{locale?}/forum/index', [LatestSubjectController::class, 'index']);
Route::get('/{locale?}/forum/latest-answers', [LatestAnswerController::class, 'index']);
Route::get('/{locale?}/forum/my-subject', [MySubjectController::class, 'index']);
Route::get('/{locale?}/forum/my-talks', [MyAnswerController::class, 'index']);
Route::get('/{locale?}/forum/{subject:slug}', [ForumController::class, 'show']);


Route::get('/{locale?}/news/index', [ActualityController::class, 'index']);
Route::get('/{locale?}/news/{new:slug}', [ActualityController::class, 'show']);
