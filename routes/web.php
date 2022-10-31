<?php

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
Route::get('/user/login', function () {
    return view('user.login');
});
Route::get('/user/register', function () {
    return view('user.register');
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
Route::get('/project/index', function () {
    return view('project.index');
});
Route::get('/project/{project:slug}/single', function () {
    return view('project.single');
});
Route::get('/news/index', function () {
    return view('news.index');
});
Route::get('/news/{news:slug}/single', function () {
    return view('news.single');
});
