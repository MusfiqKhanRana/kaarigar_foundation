<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminDashBoardController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\IndexController;
use App\Models\AdminDashBoard;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::resource('/',IndexController::class);
Route::resource('about',AboutController::class);
Route::post('blog/blog_posts/update',[BlogController::class,'blog_posts_update'])->name('blog.blog_posts.update');
Route::get('blog/blog_posts/delete/{id}',[BlogController::class,'blog_posts_delete'])->name('blog.blog_posts.delete');
Route::post('blog/blog_posts',[BlogController::class,'blog_posts'])->name('blog.blog_posts');
Route::resource('blog',BlogController::class);
Route::get('admindashboard/donate_show',[AdminDashBoardController::class,'donate_page'])->name('admindashboard.show.donate');
Route::get('admindashboard/contact_show',[AdminDashBoardController::class,'contact_page'])->name('admindashboard.show.contact');
Route::get('admindashboard/blog',[AdminDashBoardController::class,'blog_page_edit'])->name('admindashboard.edit.blog_page');
Route::get('admindashboard/about',[AdminDashBoardController::class,'about_page_edit'])->name('admindashboard.edit.about_page');
Route::get('admindashboard/projects',[AdminDashBoardController::class,'projects_page_edit'])->name('admindashboard.edit.projects_page');
Route::get('admindashboard/get_involved',[AdminDashBoardController::class,'get_involve_page_edit'])->name('admindashboard.edit.get_involve_page');
Route::get('admindashboard/programs',[AdminDashBoardController::class,'programs_page_edit'])->name('admindashboard.edit.programs_page');
Route::get('admindashboard/index',[AdminDashBoardController::class,'index_page_edit'])->name('admindashboard.edit.index_page');
Route::get('admindashboard/pages',[AdminDashBoardController::class,'pages'])->name('admindashboard.pages');
Route::resource('admindashboard',AdminDashBoardController::class);
Route::post('contact/store',[ContactController::class,'contact_store'])->name('contacts.store');
Route::resource('contact',ContactController::class);
Route::get('donation-Show/{id}',[IndexController::class,'show_donation'])->name('donation.show');
Route::get('Donate',[IndexController::class,'donate'])->name('donate');
Route::get('disaster',[IndexController::class,'disaster'])->name('programs.disaster');
Route::get('women',[IndexController::class,'women'])->name('programs.women');
Route::get('child',[IndexController::class,'child'])->name('programs.child');
Route::get('parenting',[IndexController::class,'parenting'])->name('programs.parenting');
Route::get('campaign',[IndexController::class,'campaign'])->name('get_involved.campaign');
Route::get('ambagpathshala',[IndexController::class,'ambagpathshala'])->name('projects.ambagpathshala');
Route::get('sewingmachine',[IndexController::class,'sewingmachine'])->name('projects.sewingmachine');
Route::get('oxygenbank',[IndexController::class,'oxygenbank'])->name('projects.oxygenbank');
Route::get('zakatdistribution',[IndexController::class,'zakatdistribution'])->name('projects.zakatdistribution');
Route::get('ramadanproject',[IndexController::class,'ramadanproject'])->name('projects.ramadanproject');
Route::get('disastersnothers',[IndexController::class,'disastersnothers'])->name('projects.disastersnothers');
Route::post('donate/submit',[IndexController::class,'donate_submit'])->name('donate.submit');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
