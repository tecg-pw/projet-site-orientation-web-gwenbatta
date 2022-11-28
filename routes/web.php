<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ActualityController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DocController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\GlossaryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\ProjectController;
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

Route::get('/', [HomeController::class, 'index']);


Route::get('/legals', function () {
    return view('legals');
});


Route::get('/about', [AboutController::class, 'index']);
Route::get('/about/job/{job:slug}', [JobController::class, 'show']);

Route::get('/project/index', [ProjectController::class, 'index']);
Route::get('/project/{project:slug}', [ProjectController::class, 'show']);

Route::get('/technical/index', [TechnicalController::class, 'index']);
Route::get('/technical/books/{book:slug}', [BookController::class, 'show']);

Route::get('/technical/glossary', [GlossaryController::class, 'index']);
Route::get('/technical/tuto', [TutoController::class, 'index']);
Route::get('/technical/docandtool/doc', [DocController::class, 'index', BookController::class, 'index']);
Route::get('/technical/docandtool/tool', [ToolController::class, 'index', BookController::class, 'index'] );


Route::get('/entreprise/partner', [PartnerController::class, 'index']);
Route::get('/entreprise/partner/{partner:slug}', [PartnerController::class, 'show']);
Route::get('/entreprise/internship', [OfferController::class, 'index']);
Route::get('/entreprise/internship/{offer:slug}', [OfferController::class, 'show']);


Route::get('/bottin', [PersonController::class, 'index']);
Route::get('/bottin/alumni', [PersonController::class, 'indexAlumni']);
Route::get('/bottin/alumni/{alumni:slug}', [PersonController::class, 'showAlumni']);
Route::get('/bottin/teacher/{teacher:slug}', [PersonController::class, 'showTeacher']);
Route::get('/bottin/teachalumni/{teachalumni:slug}', [PersonController::class, 'showTeachAlumni']);
Route::get('/bottin/student/{student:slug}', [PersonController::class, 'showStudent']);

Route::get('/cours/{course:slug}', [CourseController::class, 'show']);


Route::get('/user/login', function () {
    return view('user.login');
});
Route::get('/user/register', function () {
    return view('user.register');
});
Route::get('/user/profile/{user:slug}', [UserController::class, 'show']);
Route::get('/user/profile/modify/{user:slug}', [UserController::class, 'edit']);
Route::get('/user/password', function () {
    return view('user.password');
});


Route::get('/contact/student', [ContactController::class, 'indexStudent']);
Route::get('/contact/agency', [ContactController::class, 'indexAgency']);


Route::get('/forum/question', function () {
    return view('forum.question');
});
Route::get('/forum/index', [ForumController::class, 'indexLatestSubject']);
Route::get('/forum/latest-answers', [ForumController::class, 'indexLatestAnswer']);
Route::get('/forum/my-subject', [ForumController::class, 'indexMySubject']);
Route::get('/forum/my-talks', [ForumController::class, 'indexMyAnswer']);
Route::get('/forum/{subject:slug}', [ForumController::class, 'show']);


Route::get('/news/index', [ActualityController::class, 'index']);
Route::get('/news/{new:slug}', [ActualityController::class, 'show']);
