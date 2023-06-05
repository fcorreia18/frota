<?php


use App\Http\Livewire\AdminDashboardComponent;
use App\Http\Livewire\Admin\Companies\CompaniesComponent;
use App\Http\Livewire\Admin\Companies\Store as CompanyStore;
use App\Http\Livewire\Admin\Employees\EmployeeComponent;
use App\Http\Livewire\Admin\Employees\Store  as EmployeeStore;
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
     
        Route::get('/', CompaniesComponent::class)->name('admin.companies.index');
        Route::post('/add-company', [CompanyStore::class])->name('admin.company.store');
        Route::put('/edit-company/{id}', [CompaniesComponent::class, 'update'])->name('admin.company.update');
        Route::delete('/delete-company/{id}', [CompaniesComponent::class, 'destroy'])->name('admin.company.destroy');
    
    });
    //->middleware('middleware_subgrupo'); in case to assign one more middleware

    
    //ADMIN/EMPLOYEES ROUTES
    Route::prefix('employees')->group(function () {

        Route::get('/', EmployeeComponent::class)->name('admin.employees.index');
        Route::post('/add-employee', EmployeeStore::class)->name('admin.employee.store');
        Route::put('/edit-employee/{id}', [EmployeeComponent::class, 'update'])->name('admin.employee.update');
        Route::delete('/delete-employee/{id}', [EmployeeComponent::class, 'destroy'])->name('admin.employee.destroy');
    
        
    });

    //ADMIN/MANAGER ROUTES
    Route::prefix('manager')->group(function () {

        Route::get('/', function () {
            return 'Página inicial do subgrupo do admin';
        })->name('admin.subgrupo.dashboard');
    });
});


require __DIR__ . '/auth.php';
