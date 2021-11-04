<?php

use App\Http\Controllers\HomeController;
use App\Http\Livewire\AboutusComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Consultant\ConsultantDashboardComponent;
use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\CoursesComponent;
use App\Http\Livewire\FAQsComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\User\UserDashboardComponent;
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
/*
Route::get('/', function () {
    return view('welcome');
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
*/


Route::get('/',HomeComponent::class);
Route::get('/FAQs',FAQsComponent::class);
Route::get('/contact',ContactComponent::class);
Route::get('/about_us',AboutusComponent::class);
Route::get('/courses',CoursesComponent::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard',[
    HomeController::class,"index"])->name('dashboard');

//for user
Route::middleware(['auth:sanctum', 'verified'])->group(function (){
    Route::get('/user/dashboard',UserDashboardComponent::class)->name('user.dashboard');
});

//for admin
Route::middleware(['auth:sanctum', 'verified','authadmin' ])->group(function (){
    Route::get('/admin/dashboard',AdminDashboardComponent::class)->name('admin.dashboard');

});

//for consultant
Route::middleware(['auth:sanctum', 'verified','authconsultant'])->group(function (){
    Route::get('/consultant/dashboard',ConsultantDashboardComponent::class)->name('consultant.dashboard');

});


