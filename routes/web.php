<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\CandidateController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\job_typeController;
use App\Http\Controllers\Backend\jobController;
use App\Http\Controllers\Backend\cadidateInfoController;
use App\Http\Controllers\frontend\PostjobController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\frontJobsController;
use App\Http\Controllers\frontend\Export_infoController;
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
    return view('main.home');
});
// all front end routes 
Route::get('/', [HomeController::class,'Index']);
// the routes for jobs 
Route::get('/jobs/page', [frontJobsController::class,'Index'])->name('jobs');

Route::get('/jobs/detail/{id}', [frontJobsController::class,'JobDetail'])->name('jobs.detail');
//route for applying jobs
Route::get('/apply/job/{id}', [frontJobsController::class,'applyJob'])->name('apply.jobs');
Route::post('/apply/form',[frontJobsController::class,'applyJobs'])->name('submit.info');
// route for export to excel
Route::get('/export/info',[Export_infoController::class,'Export'])->name('export');

//end of front routes

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('dashboard');
});
// admin logout
Route::get('/admin/logout', [AdminController::class,'LogOut'])->name('admin.logout');
// all Categories Route
Route::get('/Categories',[CategoryController::class,'Index'])->name('categories');
Route::get('/add/Categories',[CategoryController::class,'AddCategory'])->name('add.category');
Route::post('/store/Categories',[CategoryController::class,'StoreCategory'])->name('store.category');
Route::get('/edit/Categories/{id}',[CategoryController::class,'EditCategory'])->name('edit.category');
Route::post('/update/Categories/{id}',[CategoryController::class,'UpdateCategory'])->name('update.category');
Route::get('/delete/Categories/{id}',[CategoryController::class,'DeleteCategory'])->name('delete.category');

// all job types route
Route::get('/job_types',[job_typeController::class,'Index'])->name('job.types');
Route::get('/add/job_types',[job_typeController::class,'AddJobTypes'])->name('add.jobs_type');
Route::post('/store/job_types',[job_typeController::class,'StoreJobTypes'])->name('store.job_types');
Route::get('/edit/job_types/{id}',[job_typeController::class,'EditJobTypes'])->name('edit.job_type');
Route::post('/update/job_types/{id}',[job_typeController::class,'UpdateJobTypes'])->name('update.job_type');
Route::get('/delete/job_types/{id}',[job_typeController::class,'DeleteJobTypes'])->name('delete.job_type');
// All create jobs Route
Route::get('/alljobs',[jobController::class,'Index'])->name('all.jobs');
Route::get('/createjobs',[jobController::class,'Create'])->name('create.jobs');
Route::post('/store/jobs_types',[jobController::class,'StoreJobs'])->name('store.jobs');
Route::get('/edit/jobs/{id}',[jobController::class,'EditJobs'])->name('edit.job');
Route::post('/update/jobs/{id}',[job_typeController::class,'UpdateJob'])->name('update.jobs');
Route::get('/delete/jobs/{id}',[jobController::class,'DeleteJobs'])->name('delete.job');
//Candidate info route
Route::get('/show/info',[cadidateInfoController::class,'ShowInfo'])->name('show.info');
 Route::get('/download/{file}',[cadidateInfoController::class,'downloadInfo']);
Route::get('/view/{id}',[cadidateInfoController::class,'ViewInfo']);

 
// all frotn route
// this is  not working yet so i comment out it Route::get('/createjobs',[PostjobController::class,'Createjob'])->name('create.job'); 


