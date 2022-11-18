<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ActualityController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\ProjectController;
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
    return view('home');
});


Route::get('/legals', function () {
    return view('legals');
});


Route::get('/about', [AboutController::class, 'index']);
Route::get('/about/job/single', function () {
    return view('about.job.single');
});

Route::get('/project/index', [ProjectController::class, 'index']);
Route::get('/project/{project:slug}', [ProjectController::class, 'show']);

Route::get('/technical/index', function () {
    return view('technical.index');
});
Route::get('/technical/books/single', function () {
    return view('technical.books.single');
});
Route::get('/technical/glossary', function () {
    return view('technical.glossary');
});
Route::get('/technical/tuto', function () {
    return view('technical.tuto');
});
Route::get('/technical/docandtool/doc', function () {
    return view('technical.doc');
});
Route::get('/technical/docandtool/tool', function () {
    return view('technical.tool');
});


Route::get('/entreprise/partner', function () {
    return view('entreprise.partner');
});
Route::get('/entreprise/partner/single', function () {
    return view('entreprise.partner.single');
});
Route::get('/entreprise/internship', function () {
    return view('entreprise.internship');
});
Route::get('/entreprise/internship/single', function () {
    return view('entreprise.internship.single');
});


Route::get('/bottin', [PersonController::class, 'index']);
Route::get('/bottin/alumni', [PersonController::class, 'indexAlumni']);
Route::get('/bottin/alumni/name', function () {
    return view('bottin.alumni.name');
});
Route::get('/bottin/teacher/{teacher:slug}', [PersonController::class, 'showTeacher']);
Route::get('/bottin/teachalumni/{teacher:slug}', [PersonController::class, 'showTeachAlumni']);
Route::get('/bottin/student/name', function () {
    return view('bottin.student.name');
});

Route::get('/cours/show', function () {
    return view('cours.show');
});


Route::get('/user/login', function () {
    return view('user.login');
});
Route::get('/user/register', function () {
    return view('user.register');
});
Route::get('/user/profile', function () {
    return view('user.profile');
});
Route::get('/user/profile/modify', function () {
    return view('user.profile.modify');
});
Route::get('/user/password', function () {
    return view('user.password');
});


Route::get('/contact/student', function () {
    return view('contact.student');
});
Route::get('/contact/agency', function () {
    return view('contact.agency');
});


Route::get('/forum/question', function () {
    return view('forum.question');
});
Route::get('/forum/index', function () {
    return view('forum.index');
});
Route::get('/forum/show', function () {
    return view('forum.show');
});
Route::get('/forum/latest-answers', function () {
    return view('forum.latest_answers');
});
Route::get('/forum/my-subject', function () {
    return view('forum.my_subject');
});
Route::get('/forum/my-talks', function () {
    return view('forum.my_talks');
});





Route::get('/news/index', [ActualityController::class, 'index']);
Route::get('/news/single', function () {
    return view('news.single');
});
