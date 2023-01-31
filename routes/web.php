<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Teacher\PagesController;
use App\Http\Controllers\Teacher\TextbookController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SiteController;
use Database\Seeders\Admin;

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

Route::get('/',[SiteController::class, 'index'])->name('home');
Route::get('/all',[SiteController::class, 'all'])->name('all');
Route::get('filter/all/{id}',[SiteController::class, 'filter_all'])->name('filter_all');
Route::get('/single_course/{id}',[SiteController::class, 'single_course'])->name('single_course');
Route::get('/contact',[SiteController::class, 'contact'])->name('contact');
Route::get('/faq',[SiteController::class, 'faq'])->name('faq');
Route::get('/search',[SiteController::class, 'search'])->name('search');
Route::get('/about',[SiteController::class, 'about'])->name('about');
Route::get('/workers',[SiteController::class, 'workers'])->name('workers');
Route::get('/pages',[SiteController::class, 'pages'])->name('pages');

Route::get('/artisan/{name}',[SiteController::class, 'artisan'])->name('artisan');

Route::get('/complate_course/{id}/{course_id}',[SiteController::class, 'complate_course'])->middleware(['auth:client'])->name('complate_course');


// Admin  routes
Route::get('/dashboard', function () {
    return redirect()->route('admin.home');
})->middleware(['auth'])->name('dashboard');

Route::get('admin/home', function () {
    return view('admin.layouts.dashboard');
})->middleware(['auth'])->name('admin.home');

Route::resource('categories', CategoryController::class)->middleware(['auth']);
Route::resource('admins', AdminController::class)->middleware(['auth']);
Route::get('edit/admin/password/{id}', [AdminController::class, 'edit_password'])->middleware(['auth'])->name('edit.admin.password');
Route::resource('courses', CourseController::class)->middleware(['auth']);
Route::resource('teachers', TeacherController::class)->middleware(['auth']);
Route::resource('clients', ClientController::class)->middleware(['auth']);
Route::resource('faqs', FaqController::class)->middleware(['auth']);
Route::get('members_new', [ClientController::class, 'new_members'])->middleware(['auth'])->name('members_new');


// Teacher routes
Route::get('teacher/dashboard', [PagesController::class, 'index'])->middleware(['auth:teacher'])->name('teacher.dashboard');

Route::get('teacher/edit', [PagesController::class, 'edit'])->middleware(['auth:teacher'])->name('teacher.edit');
Route::put('teacher/edit/{id}', [PagesController::class, 'update'])->middleware(['auth:teacher'])->name('teacher.update');

Route::get('teacher/edit/password', [PagesController::class, 'edit_password'])->middleware(['auth:teacher'])->name('teacher.edit.password');
Route::put('teacher/edit/password/{id}', [PagesController::class, 'update_password'])->middleware(['auth:teacher'])->name('teacher.update.password');

Route::get('new_members', [PagesController::class, 'members'])->middleware(['auth:teacher'])->name('new_members');
Route::get('show_new_members/{id}', [PagesController::class, 'show_members'])->middleware(['auth:teacher'])->name('show_new_members');

Route::resource('textbooks', TextbookController::class)->middleware(['auth:teacher']);


// Client routes
Route::get('client/dashboard', [StudentController::class, 'index'])->name('client.dashboard')->middleware(['auth:client']);
Route::get('client/my_courses', [StudentController::class, 'my_courses'])->name('client.my_courses')->middleware(['auth:client']);

Route::get('client/edit', [StudentController::class, 'edit'])->middleware(['auth:client'])->name('client.edit');
Route::put('client/edit/{id}', [StudentController::class, 'update'])->middleware(['auth:client'])->name('client.update');

Route::get('client/edit/password', [StudentController::class, 'edit_password'])->middleware(['auth:client'])->name('client.edit.password');
Route::put('client/edit/password/{id}', [StudentController::class, 'update_password'])->middleware(['auth:client'])->name('client.update.password');

Route::get('/full_course/{id}/{course_id}',[StudentController::class, 'full_course'])->middleware(['auth:client'])->name('full_course');





require __DIR__.'/auth.php';
