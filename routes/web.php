<?php

use App\Http\Controllers\ProfileController;
use App\Http\Livewire\Admin\Companies\Save;
use App\Http\Livewire\AdminDashboardComponent;
use App\Http\Livewire\Admin\Companies\AdminCompanyComponent;
use App\Http\Livewire\Admin\Employees\ManageEmployee;
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






Route::prefix('admin')->middleware(['auth', 'check.role:admin'])->group(function () {
    Route::get("/", AdminDashboardComponent::class)->name("admin.dashboard");
    Route::get("/profile", [AdminDashboardComponent::class, 'profile'])->name("admin.profile");

   
    //ADMIN/COMPANIES ROUTES
    Route::prefix('companies')->group(function () {
     
        Route::get('/', AdminCompanyComponent::class)->name('admin.companies.index');
        Route::post('/add-company', [Save::class])->name('admin.company.store');
        Route::put('/edit-company/{id}', [AdminCompanyComponent::class, 'update'])->name('admin.company.update');
        Route::delete('/delete-company/{id}', [AdminCompanyComponent::class, 'destroy'])->name('admin.company.destroy');
    
    });
    //->middleware('middleware_subgrupo'); in case to assign one more middleware

    
    //ADMIN/EMPLOYEES ROUTES
    Route::prefix('employees')->group(function () {

        Route::get('/', ManageEmployee::class)->name('admin.employees.index');
        Route::post('/add-employee', [ManageEmployee::class, 'store'])->name('admin.employee.store');
        Route::put('/edit-employee/{id}', [ManageEmployee::class, 'update'])->name('admin.employee.update');
        Route::delete('/delete-employee/{id}', [ManageEmployee::class, 'destroy'])->name('admin.employee.destroy');
    
        
    });

    //ADMIN/MANAGER ROUTES
    Route::prefix('manager')->group(function () {

        Route::get('/', function () {
            return 'Página inicial do subgrupo do admin';
        })->name('admin.subgrupo.dashboard');
    });
});


require __DIR__ . '/auth.php';
