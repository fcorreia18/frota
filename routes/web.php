<?php


use App\Http\Livewire\AdminDashboardComponent;
use App\Http\Livewire\Admin\Companies\CompaniesComponent;
use App\Http\Livewire\Admin\Companies\CreateFromGroup;
use App\Http\Livewire\Admin\Companies\Store as CompanyStore;
use App\Http\Livewire\Admin\Companies\Update as CompaniesUpdate;
use App\Http\Livewire\Admin\Users\UserComponent;
use App\Http\Livewire\Admin\Users\Update as UserUpdate;
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
        Route::get('/update/{groupId}', Update::class)->name('admin.group-company.update');
    });

    Route::prefix('companies')->group(function () {
        Route::get('/', CompaniesComponent::class)->name('admin.companies.index');
        Route::get('/create', Create::class)->name('admin.company.create');
        Route::get('/create-from-group/{groupId}', CreateFromGroup::class)->name('admin.company.create_from_group');
        Route::get('/update/{companyId}', CompaniesUpdate::class)->name('admin.company.update');
    });
    //->middleware('middleware_subgrupo'); in case to assign one more middleware

    Route::prefix('users')->group(function () {
        Route::get('/', UserComponent::class)->name('admin.users.index');
        Route::get('/update/{userId}', UserUpdate::class)->name('admin.user.update');
    });


});




Route::prefix('manager')->middleware(['auth', 'check.role:manager'])->group(function () {

    Route::prefix('group-companies')->group(function () {

        Route::get('/', GroupCompaniesComponent::class)->name('manager.group-companies.index');
        Route::get('/create-group', Create::class)->name('manager.group-companies.create');
        Route::post('/add-group', [Store::class])->name('manager.company.store');
        Route::put('/update-group/{id}', [Update::class, 'update'])->name('manager.group-company.update');
        Route::delete('/delete-group/{id}', [GroupCompaniesComponent::class, 'destroy'])->name('manager.group-company.destroy');
        Route::get('/{grupoId}/add-companies', AddCompaniesToGroup::class)->name('manager.group-company.companies.add');
    
        //NEW ROUTES 
        Route::prefix('group-companies')->group(function () {
            Route::get('/', GroupCompaniesComponent::class)->name('manager.group-companies.index');
            Route::get('/update/{groupId}', Update::class)->name('manager.group-company.update');
        });
    });

    Route::prefix('companies')->group(function () {

        Route::get('/', CompaniesComponent::class)->name('manager.companies.index');
        Route::post('/add-company', [CompanyStore::class])->name('manager.company.store');
        Route::put('/update-company/{id}', [CompaniesComponent::class, 'update'])->name('manager.company.update');
        Route::delete('/delete-company/{id}', [CompaniesComponent::class, 'destroy'])->name('manager.company.destroy');


        //manager/EMPLOYEES ROUTES
        // Route::prefix('employees')->group(function () {

        //     Route::get('/', EmployeeComponent::class)->name('manager.employees.index');
        //     Route::post('/add-employee', EmployeeStore::class)->name('manager.employee.store');
        //     Route::put('/update-employee/{id}', [EmployeeComponent::class, 'update'])->name('manager.employee.update');
        //     Route::delete('/delete-employee/{id}', [EmployeeComponent::class, 'destroy'])->name('manager.employee.destroy');
        // });
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
