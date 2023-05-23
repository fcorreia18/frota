<?php

use App\Http\Controllers\ProfileController;
use App\Http\Livewire\AdminDashboardComponent;
use App\Http\Livewire\Admin\Companies\Show;
use App\Http\Livewire\ManagerDashboardComponent;
use App\Http\Livewire\Teste;
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



// Route::group(['middleware' => 'auth'], function () {
//     Route::get('/admin', [AdminDashboardComponent::class, 'render'])->middleware('check.role:admin');

//     Route::get('/manager', function () {
//         return "Painel de Manager";
//     })->middleware('check.role:manager')->name("manager.dashboard");

//     Route::get('/employee', function () {
//         return "Painel de Employee";
//     })->middleware('check.role:employee')->name("employee.dashboard");
// });
Route::get("/teste", Teste::class);

Route::prefix('admin')->middleware(['auth', 'check.role:admin'])->group(function () {
    Route::get("/", AdminDashboardComponent::class)->name("admin.dashboard");
    Route::get("/profile", [AdminDashboardComponent::class, 'profile'])->name("admin.profile");

   
    //ADMIN/COMPANIES ROUTES
    Route::prefix('companies')->group(function () {
     
        Route::get('/', Show::class)->name('admin.companies.index');
        Route::get('/add-company', [CompanyComponent::class, 'create'])->name('admin.company.create');
        Route::post('/add-company', [CompanyComponent::class, 'store'])->name('admin.company.store');
        Route::get('/edit-company/{id}', [CompanyComponent::class, 'edit'])->name('admin.company.edit');
        Route::put('/edit-company/{id}', [CompanyComponent::class, 'update'])->name('admin.company.update');
        Route::delete('/delete-company/{id}', [CompanyComponent::class, 'destroy'])->name('admin.company.destroy');
    
    });
    //->middleware('middleware_subgrupo');

    
    //ADMIN/EMPLOYEES ROUTES
    Route::prefix('employees')->group(function () {

        Route::get('/', [EmployeeComponent::class, 'index'])->name('admin.employees.index');
        
    });

    //ADMIN/MANAGER ROUTES
    Route::prefix('manager')->group(function () {

        Route::get('/', function () {
            return 'Página inicial do subgrupo do admin';
        })->name('admin.subgrupo.dashboard');
    });
});


require __DIR__ . '/auth.php';
