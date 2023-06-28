<?php


use App\Http\Livewire\AdminDashboardComponent;
use App\Http\Livewire\Admin\Companies\CompaniesComponent;
use App\Http\Livewire\Admin\Companies\CreateFromGroup;
use App\Http\Livewire\Admin\Companies\Store as CompanyStore;
use App\Http\Livewire\Admin\Companies\Update as CompaniesUpdate;
use App\Http\Livewire\Admin\Users\UserComponent;
use App\Http\Livewire\Admin\Users\Update as UserUpdate;
use App\Http\Livewire\Admin\GroupCompanies\Create;
use App\Http\Livewire\Admin\GroupCompanies\GroupCompaniesComponent;
use App\Http\Livewire\Admin\GroupCompanies\Update;
use App\Http\Livewire\Admin\Profile;
use App\Http\Livewire\Admin\Vehicles\VehicleComponent;
use App\Http\Livewire\Manager\Companies\Index as CompaniesIndex;
use App\Http\Livewire\Manager\ManagerDashboardComponent;
use App\Http\Livewire\Manager\Employees\Index;
use App\Http\Livewire\Manager\Employees\Update as EmployeesUpdate;
use App\Http\Livewire\Manager\Projects\Create as ProjectsCreate;
use App\Http\Livewire\Manager\Vehicles\Create as VehiclesCreate;
use App\Http\Livewire\Manager\Vehicles\Index as VehiclesIndex;
use App\Http\Livewire\Manager\Vehicles\Update as VehiclesUpdate;
use Illuminate\Support\Facades\Route;



Route::prefix('admin')->middleware(['auth', 'check.role:admin'])->group(function () {
    Route::get("/", AdminDashboardComponent::class)->name("admin.dashboard");
    Route::get('/profile', Profile::class)->name("admin.profile");

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

    Route::prefix('users')->group(function () {
        Route::get('/', UserComponent::class)->name('admin.users.index');
        Route::get('/update/{userId}', UserUpdate::class)->name('admin.user.update');
    });


});

Route::prefix('manager')->middleware(['auth', 'check.role:manager'])->group(function () {

    Route::get('/', ManagerDashboardComponent::class)->name('manager.dashboard');
    Route::get('/profile', ManagerDashboardComponent::class)->name('manager.profile');

    Route::prefix('companies')->group(function () {
        Route::get('/', CompaniesIndex::class)->name('manager.companies.index');
        Route::post('/add-company', [CompanyStore::class])->name('manager.company.store');
        Route::put('/update-company/{id}', [CompaniesComponent::class, 'update'])->name('manager.company.update');
        
    });
    //->middleware('middleware_subgrupo'); in case to assign one more middleware or array of middleware
    
    Route::prefix('employees')->group(function () {

        Route::get('/', Index::class)->name('manager.employees.index');
        Route::post('/add-employee', ProjectsCreate::class)->name('manager.employee.create');
        Route::put('/update-employee/{id}', [EmployeesUpdate::class, 'update'])->name('manager.employee.update');
    });

    Route::prefix('vehicles')->group(function () {
        Route::get('/', VehiclesIndex::class)->name('manager.vehicles.index');
        Route::post('/add-vehicle', [VehiclesCreate::class])->name('manager.vehicle.create');
        Route::put('/update-vehicle/{id}', [VehiclesUpdate::class, 'update'])->name('manager.vehicle.update');
        
    });

    // Route::prefix('maintenances')->group(function () {
    //     Route::get('/', index::class)->name('manager.vehicles.index');
    //     Route::post('/add-vehicle', [VehiclesCreate::class])->name('manager.vehicle.create');
    //     Route::put('/update-vehicle/{id}', [VehiclesUpdate::class, 'update'])->name('manager.vehicle.update');
        
    // });

    // Route::prefix('incidents')->group(function () {
    //     Route::get('/', VehiclesIndex::class)->name('manager.vehicles.index');
    //     Route::post('/add-vehicle', [VehiclesCreate::class])->name('manager.vehicle.create');
    //     Route::put('/update-vehicle/{id}', [VehiclesUpdate::class, 'update'])->name('manager.vehicle.update');
        
    // });
    
});

Route::prefix('fleet-manager')->middleware(['auth', 'check.role:fleet_manager'])->group(function () {
    Route::get("/", AdminDashboardComponent::class)->name("fleet_manager.dashboard");
    Route::get("/profile", AdminDashboardComponent::class)->name("fleet_manager.profile");
});

Route::prefix('employee')->middleware(['auth', 'check.role:employee'])->group(function () {
    Route::get("/", AdminDashboardComponent::class)->name("employee.dashboard");
    Route::get("/profile", AdminDashboardComponent::class)->name("employee.profile");
});

// Route::prefix('reports')->group(function () {

    //     Route::get('/reports/abastecimento', \App\Http\Livewire\Reports\Abastecimento::class)->name('reports.abastecimento');

    //     Route::get('/reports/manutencao', \App\Http\Livewire\Reports\Manutencao::class)->name('reports.manutencao');

    //     Route::get('/reports/incidentes', \App\Http\Livewire\Reports\Incidentes::class)->name('reports.incidentes');
        
    //     Route::get('/reports/gastos-projeto', \App\Http\Livewire\Reports\GastosProjeto::class)->name('reports.gastos-projeto');

    //     Route::get('/reports/gastos-veiculo-projeto', \App\Http\Livewire\Reports\GastosVeiculoProjeto::class)->name('reports.gastos-veiculo-projeto');
    
// });


require __DIR__ . '/auth.php';
