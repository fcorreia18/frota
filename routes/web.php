<?php


use App\Http\Livewire\AdminDashboardComponent;
use App\Http\Livewire\Admin\Companies\CompaniesComponent;
use App\Http\Livewire\Admin\Companies\Store as CompanyStore;
use App\Http\Livewire\Admin\Employees\EmployeeComponent;
use App\Http\Livewire\Admin\Employees\Store  as EmployeeStore;
use App\Http\Livewire\Admin\GroupCompanies\AddCompaniesToGroup;
use App\Http\Livewire\Admin\GroupCompanies\Create;
use App\Http\Livewire\Admin\GroupCompanies\GroupCompaniesComponent;
use App\Http\Livewire\Admin\GroupCompanies\Store;
use App\Http\Livewire\Admin\GroupCompanies\Update;
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

    Route::prefix('group-companies')->group(function () {

        Route::get('/', GroupCompaniesComponent::class)->name('admin.group-companies.index');
        Route::get('/create-group', Create::class)->name('admin.group-companies.create');
        Route::post('/add-group', [Store::class])->name('admin.company.store');
        Route::put('/update-group/{id}', [Update::class, 'update'])->name('admin.group-company.update');
        Route::delete('/delete-group/{id}', [GroupCompaniesComponent::class, 'destroy'])->name('admin.group-company.destroy');
        Route::get('/{grupoId}/add-companies', AddCompaniesToGroup::class)->name('admin.group-company.companies.add');
    });

    Route::prefix('companies')->group(function () {

        Route::get('/', CompaniesComponent::class)->name('admin.companies.index');
        Route::post('/add-company', [CompanyStore::class])->name('admin.company.store');
        Route::put('/update-company/{id}', [CompaniesComponent::class, 'update'])->name('admin.company.update');
        Route::delete('/delete-company/{id}', [CompaniesComponent::class, 'destroy'])->name('admin.company.destroy');
    });
    //->middleware('middleware_subgrupo'); in case to assign one more middleware

    Route::prefix('employees')->group(function () {

        Route::get('/', EmployeeComponent::class)->name('admin.employees.index');
        Route::post('/add-employee', EmployeeStore::class)->name('admin.employee.store');
        Route::put('/update-employee/{id}', [EmployeeComponent::class, 'update'])->name('admin.employee.update');
        Route::delete('/delete-employee/{id}', [EmployeeComponent::class, 'destroy'])->name('admin.employee.destroy');
    });


});




Route::prefix('manager')->middleware(['auth', 'check.role:manager'])->group(function () {

    Route::prefix('group-companies')->group(function () {

        Route::get('/', GroupCompaniesComponent::class)->name('admin.group-companies.index');
        Route::get('/create-group', Create::class)->name('admin.group-companies.create');
        Route::post('/add-group', [Store::class])->name('admin.company.store');
        Route::put('/update-group/{id}', [Update::class, 'update'])->name('admin.group-company.update');
        Route::delete('/delete-group/{id}', [GroupCompaniesComponent::class, 'destroy'])->name('admin.group-company.destroy');
        Route::get('/{grupoId}/add-companies', AddCompaniesToGroup::class)->name('admin.group-company.companies.add');
    });

    Route::prefix('companies')->group(function () {

        Route::get('/', CompaniesComponent::class)->name('admin.companies.index');
        Route::post('/add-company', [CompanyStore::class])->name('admin.company.store');
        Route::put('/update-company/{id}', [CompaniesComponent::class, 'update'])->name('admin.company.update');
        Route::delete('/delete-company/{id}', [CompaniesComponent::class, 'destroy'])->name('admin.company.destroy');


        //ADMIN/EMPLOYEES ROUTES
        Route::prefix('employees')->group(function () {

            Route::get('/', EmployeeComponent::class)->name('admin.employees.index');
            Route::post('/add-employee', EmployeeStore::class)->name('admin.employee.store');
            Route::put('/update-employee/{id}', [EmployeeComponent::class, 'update'])->name('admin.employee.update');
            Route::delete('/delete-employee/{id}', [EmployeeComponent::class, 'destroy'])->name('admin.employee.destroy');
        });
    });
    //->middleware('middleware_subgrupo'); in case to assign one more middleware


    // Route::prefix('reports')->group(function () {

    //     Route::get('/reports/abastecimento', \App\Http\Livewire\Relatorios\Abastecimento::class)->name('relatorios.abastecimento');

    //     Route::get('/reports/manutencao', \App\Http\Livewire\Relatorios\Manutencao::class)->name('relatorios.manutencao');

    //     Route::get('/reports/incidentes', \App\Http\Livewire\Relatorios\Incidentes::class)->name('relatorios.incidentes');
        
    //     Route::get('/relatorios/gastos-projeto', \App\Http\Livewire\Relatorios\GastosProjeto::class)->name('relatorios.gastos-projeto');

    //     Route::get('/relatorios/gastos-veiculo-projeto', \App\Http\Livewire\Relatorios\GastosVeiculoProjeto::class)->name('relatorios.gastos-veiculo-projeto');
    
    // });
});




require __DIR__ . '/auth.php';
