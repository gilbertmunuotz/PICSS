<?php

use App\Http\Controllers\Admincontroller;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\Staffcontroller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {return view('auth.login');});

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {
Route::get('/dashboard', function () { return view('dashboard'); })->name('dashboard');});

Route::get('/redirects', [Homecontroller::class, 'redirecting']); //Loads & Redirects The User Type Account


Route::get('/MyProblems', [Homecontroller::class, 'show_probz']); //User Views Reported Problems
Route::get('/RegisterDevices', [Homecontroller::class, 'registers']); //Views The Register Device sheet
Route::post('/RegisterDevice', [Homecontroller::class, 'device_register']); //Registers A new Device
Route::get('/ReportProblem', [Homecontroller::class, 'report']); //Views Report Problem Page
Route::post('/Reportingprobs', [Homecontroller::class, 'reporting_problems']); //Registers a reported Problem
Route::get('/RequestDevice', [Homecontroller::class, 'requesting']); //Shows Request Device Page
Route::post('/RequestingDevice', [Homecontroller::class, 'registers_requests']); //Registers Requests sent By users
Route::post('/UpdatingStatus/{id}', [Homecontroller::class, 'updatestatus']); //Estate Officer Updates Device Status


Route::get('/Homepage', [Staffcontroller::class, 'homee']); //Returns Estates Homepage
Route::get('/MyDevices', [Staffcontroller::class, 'devices']); //Returns all Devices Available
Route::get('/EditDevices/{id}', [Staffcontroller::class, 'edit_devices']); //Returns the Edit Devices Page/View

Route::get('/MyTasks', [Staffcontroller::class, 'tasks']); //Returns The Reported Tasks view Page
Route::get('/DeleteMyTasks/{id}', [Staffcontroller::class, 'delete_tasks']); //Estate Deletes Tasks
Route::get('/EditTasks/{id}', [Staffcontroller::class, 'edit_tasks']); //Returns Edit Tasks Page/View 
Route::post('/UpdateMyTasks/{id}', [Staffcontroller::class, 'update_mytask']); //Estate Officer Updates His Tasks

Route::get('/RequestedDevices', [Staffcontroller::class, 'requested_devices']); //Returns The Requested Devices Page
Route::get('/EditReqDevices/{id}', [Staffcontroller::class, 'mydevices']);//Returns The Edit Devices Page
Route::post('/EditRequestedDevices/{id}',[Staffcontroller::class, 'editRDevices']);//Estate Officer Edits Requested Devices


Route::get('/systemusers', [Admincontroller::class, 'sys_users']);//Returns The System Users Page
Route::get('/DeleteUsers/{id}',[Admincontroller::class, 'delete_users']);//Deletes system Users