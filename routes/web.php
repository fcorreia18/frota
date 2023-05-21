<?php

use App\Http\Controllers\ProfileController;
use App\Http\Livewire\AdminDashboardComponent;
use App\Http\Livewire\ManagerDashboardComponent;
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




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware("auth")->group(function(){
    Route::get("/manager/dashboard", ManagerDashboardComponent::class)->name("manager.dashboard");
});

Route::middleware(["auth", "is_admin"])->group(function(){
    Route::get("/admin", AdminDashboardComponent::class)->name("admin.dashboard");

});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin', function () {
        return "Painel de Admin";
    })->middleware('check.role:admin');

    Route::get('/manager', function () {
        return "Painel de Manager";
    })->middleware('check.role:manager');

    Route::get('/employee', function () {
        return "Painel de Employee";
    })->middleware('check.role:employee');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
