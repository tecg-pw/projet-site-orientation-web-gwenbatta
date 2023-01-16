<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ActualityController;
use App\Http\Controllers\AgencyContactController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CommentController;
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
use App\Http\Controllers\OtherUserController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\RegisterSessionController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\StudentContactController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeachAlumniController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TechnicalController;
use App\Http\Controllers\ToolController;
use App\Http\Controllers\TutoController;
use App\Http\Controllers\UserController;
use App\Models\Project;
use App\Models\ProjetTranslation;
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

Route::get('/{locale?}', [HomeController::class, 'index'])->middleware('locale');

Route::get('/{locale?}/legals',[LegalController::class, 'index'])->middleware('locale');
Route::get('/{locale?}/search',[SearchController::class, 'index'])->middleware('locale');
//Route::get('/{locale?}/search/ajax',[SearchController::class, 'index'])->middleware('locale');


Route::get('/{locale?}/about', [AboutController::class, 'index'])->middleware('locale');
Route::get('/{locale?}/about/job/{job:slug}', [JobController::class, 'show'])->middleware('locale');

Route::get('/{locale?}/project/index', [ProjectController::class, 'index'])->middleware('locale');
Route::get('/{locale?}/project/index/ajax', [ProjectController::class, 'ajax'])->middleware('locale');
Route::get('/{locale?}/project/{project:slug}', [ProjectController::class, 'show'])->middleware('locale');

Route::get('/{locale?}/technical/index', [TechnicalController::class, 'index'])->middleware('locale');
Route::get('/{locale?}/technical/books/{book:slug}', [BookController::class, 'show'])->middleware('locale');

Route::get('/{locale?}/technical/glossary', [GlossaryController::class, 'index'])->middleware('locale');
Route::get('/{locale?}/technical/glossary/ajax', [GlossaryController::class, 'ajax'])->middleware('locale');
Route::get('/{locale?}/technical/tuto', [TutoController::class, 'index'])->middleware('locale');
Route::get('/{locale?}/technical/tuto/ajax', [TutoController::class, 'ajax'])->middleware('locale');
Route::get('/{locale?}/technical/docandtool/doc', [DocController::class, 'index', BookController::class, 'index'])->middleware('locale');
Route::get('/{locale?}/technical/docandtool/tool', [ToolController::class, 'index', BookController::class, 'index'] )->middleware('locale');
Route::post('/{locale?}/technical/tuto/favorite/{tuto:id}', [TutoController::class, 'favorite'])->middleware(['locale','auth']);


Route::get('/{locale?}/entreprise/partner', [PartnerController::class, 'index'])->middleware('locale');
Route::get('/{locale?}/entreprise/partner/ajax', [PartnerController::class, 'ajax'])->middleware('locale');
Route::get('/{locale?}/entreprise/partner/{partner:slug}', [PartnerController::class, 'show'])->middleware('locale');
Route::get('/{locale?}/entreprise/internship', [OfferController::class, 'index'])->middleware('locale');
Route::get('/{locale?}/entreprise/internship/ajax', [OfferController::class, 'ajax'])->middleware('locale');
Route::get('/{locale?}/entreprise/internship/{offer:slug}', [OfferController::class, 'show'])->middleware('locale');


Route::get('/{locale?}/bottin', [PersonController::class, 'index'])->middleware('locale');
Route::get('/{locale?}/bottin/ajax', [PersonController::class, 'ajax'])->middleware('locale');
Route::get('/{locale?}/bottin/alumni', [AlumniController::class, 'index'])->middleware('locale');
Route::get('/{locale?}/bottin/alumni/ajax', [AlumniController::class, 'ajax'])->middleware('locale');
Route::get('/{locale?}/bottin/alumni/{alumni:slug}', [AlumniController::class, 'show'])->middleware('locale');
Route::get('/{locale?}/bottin/teacher/{teacher:slug}', [TeacherController::class, 'show'])->middleware('locale');
Route::get('/{locale?}/bottin/teachalumni/{teachalumni:slug}', [TeachAlumniController::class, 'show'])->middleware('locale');
Route::get('/{locale?}/bottin/student/{student:slug}', [StudentController::class, 'show'])->middleware('locale');

Route::get('/{locale?}/cours/{course:slug}', [CourseController::class, 'show'])->middleware('locale');

Route::get('/{locale?}/user/password', [ResetPasswordController::class, 'create'])->middleware(['guest','locale']);
Route::post('/{locale?}/user/password', [ResetPasswordController::class, 'store'])->middleware(['guest','locale']);
Route::get('/{locale?}/user/login', [AuthenticatedSessionController::class, 'create'])->name('login')->middleware(['guest','locale']);
Route::get('/{locale?}/user/register', [RegisterSessionController::class, 'create'])->name('register')->middleware(['guest','locale']);
Route::post('/{locale?}/login', [AuthenticatedSessionController::class, 'store'])->middleware(['guest','locale']);
Route::post('/{locale?}/register', [RegisterSessionController::class, 'store'])->middleware(['guest','locale']);
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->middleware('auth');
Route::get('/{locale?}/user/profile/{user:slug}', [OtherUserController::class, 'show'])->middleware('locale');
Route::get('/{locale?}/user/profile', [UserController::class, 'show'])->middleware(['auth','locale']);
Route::get('/{locale?}/user/profile/modify/form', [UserController::class, 'edit'])->middleware(['auth','locale']);
Route::post('/{locale?}/user/modify', [UserController::class, 'update'])->middleware(['auth','locale']);
Route::get('/{locale?}/user/reset-password/{token}', [ResetPasswordController::class, 'edit'])->middleware('guest', 'locale')->name('password.reset');
Route::post('/{locale?}/user/reset-password', [ResetPasswordController::class, 'update'])->middleware('guest', 'locale')->name('password.reset');


Route::get('/{locale?}/contact/student', [StudentContactController::class, 'create'])->middleware('locale');
Route::post('/{locale?}/contact/student', [StudentContactController::class, 'store'])->middleware('locale');
Route::get('/{locale?}/contact/agency', [AgencyContactController::class, 'create'])->middleware('locale');
Route::post('/{locale?}/contact/agency', [AgencyContactController::class, 'store'])->middleware('locale');



Route::get('/{locale?}/forum/index', [LatestSubjectController::class, 'index'])->middleware('locale');
Route::get('/{locale?}/forum/index/ajax', [LatestSubjectController::class, 'ajax'])->middleware('locale');
Route::get('/{locale?}/forum/latest-answers', [LatestAnswerController::class, 'index'])->middleware('locale');
Route::get('/{locale?}/forum/latest-answers/ajax', [LatestAnswerController::class, 'ajax'])->middleware('locale');
Route::get('/{locale?}/forum/my-subject', [MySubjectController::class, 'index'])->middleware('locale');
Route::get('/{locale?}/forum/my-subject/ajax', [MySubjectController::class, 'ajax'])->middleware('locale');
Route::get('/{locale?}/forum/my-talks', [MyAnswerController::class, 'index'])->middleware('locale');
Route::get('/{locale?}/forum/my-talks/ajax', [MyAnswerController::class, 'ajax'])->middleware('locale');
Route::get('/{locale?}/forum/show/{subject:slug}', [ForumController::class, 'show'])->middleware('locale');
Route::get('/{locale?}/forum/question', [ForumController::class, 'create'])->middleware(['auth','locale']);
Route::get('/{locale?}/forum/question/modify/{subject:slug}', [ForumController::class, 'edit'])->middleware(['auth','locale']);
Route::get('/{locale?}/modify', [ForumController::class, 'update'])->middleware(['auth','locale']);
Route::post('/{locale?}/subject', [ForumController::class, 'store'])->middleware(['auth','locale']);
Route::post('/{locale?}/forum/subject/destroy/{subject:id}', [ForumController::class, 'destroy'])->middleware(['auth','locale']);



Route::get('/{locale?}/forum/show/{subject:slug}', [CommentController::class, 'create'])->middleware('locale');
Route::post('/{locale?}/forum/show/{subject:slug}', [CommentController::class, 'store'])->middleware(['auth','locale']);
Route::post('/{locale?}/forum/show/{subject:slug}/comment/{comment:id}', [CommentController::class, 'update'])->middleware(['auth','locale']);
Route::post('/{locale?}/forum/show/{subject:slug}/comment/destroy/{comment:id}', [CommentController::class, 'destroy'])->middleware('auth');
Route::post('/{locale?}/forum/show/{subject:slug}/comment/like/{comment:id}', [CommentController::class, 'like'])->middleware(['auth','locale']);


Route::get('/{locale?}/news/index', [ActualityController::class, 'index'])->middleware('locale');
Route::get('/{locale?}/news/index/ajax', [ActualityController::class, 'ajax'])->middleware('locale');
Route::get('/{locale?}/news/{new:slug}', [ActualityController::class, 'show'])->middleware('locale');
