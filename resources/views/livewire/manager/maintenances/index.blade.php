<div>

    <x-slot name="breadCrumb">
        <nav aria-label="breadcrumb" class="-intro-x mr-auto hidden sm:flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Frota</a></li>
                <li class="breadcrumb-item">Dashboard</li>
                <li class="breadcrumb-item active" aria-current="page">Empresas</li>
            </ol>
        </nav>
    </x-slot>

    <div class="error-section">
        @if ($errors->any())
            <ul class="error-list">
                @foreach ($errors->all() as $error)
                    <li class="error-item">{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </div>


    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
            <x-blue-primary-button class="btn btn-primary shadow-md mr-2" >
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    icon-name="plus" class="lucide lucide-plus w-4 h-4" data-lucide="plus">
                    <line x1="12" y1="5" x2="12" y2="19"></line>
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                </svg>
                Manutenção
            </x-blue-primary-button>
            <div class="dropdown">
                <button class="dropdown-toggle btn px-2 box" aria-expanded="false" data-tw-toggle="dropdown">
                    <span class="w-5 h-5 flex items-center justify-center"> <svg xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="plus"
                            class="lucide lucide-plus w-4 h-4" data-lucide="plus">
                            <line x1="12" y1="5" x2="12" y2="19"></line>
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                        </svg> </span>
                </button>
                <div class="dropdown-menu w-40">
                    <ul class="dropdown-content">
                        <li>
                            <a href="" class="dropdown-item"> <svg xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" icon-name="printer" data-lucide="printer"
                                    class="lucide lucide-printer w-4 h-4 mr-2">
                                    <polyline points="6 9 6 2 18 2 18 9"></polyline>
                                    <path d="M6 18H4a2 2 0 01-2-2v-5a2 2 0 012-2h16a2 2 0 012 2v5a2 2 0 01-2 2h-2">
                                    </path>
                                    <rect x="6" y="14" width="12" height="8"></rect>
                                </svg> Print </a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item"> <svg xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" icon-name="file-text" data-lucide="file-text"
                                    class="lucide lucide-file-text w-4 h-4 mr-2">
                                    <path d="M14.5 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V7.5L14.5 2z"></path>
                                    <polyline points="14 2 14 8 20 8"></polyline>
                                    <line x1="16" y1="13" x2="8" y2="13"></line>
                                    <line x1="16" y1="17" x2="8" y2="17"></line>
                                    <line x1="10" y1="9" x2="8" y2="9"></line>
                                </svg> Export to Excel </a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item"> <svg xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" icon-name="file-text" data-lucide="file-text"
                                    class="lucide lucide-file-text w-4 h-4 mr-2">
                                    <path d="M14.5 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V7.5L14.5 2z"></path>
                                    <polyline points="14 2 14 8 20 8"></polyline>
                                    <line x1="16" y1="13" x2="8" y2="13"></line>
                                    <line x1="16" y1="17" x2="8" y2="17"></line>
                                    <line x1="10" y1="9" x2="8" y2="9"></line>
                                </svg> Export to PDF </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="hidden md:block mx-auto text-slate-500"></div>
            <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
                <div class="w-56 relative text-slate-500">
                    <input type="text" class="form-control w-56 box pr-10" placeholder="pesquisar...">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" icon-name="search"
                        class="lucide lucide-search w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0"
                        data-lucide="search">
                        <circle cx="11" cy="11" r="8"></circle>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    </svg>
                </div>
            </div>
        </div>

        <!-- BEGIN: Data List -->
        <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
            <x-table>
                <x-slot name="head">
                    <x-table.heading>
                        #
                    </x-table.heading>
                    <x-table.heading sortable wire:click="sortBy('nif')" :direction="$sortField === 'nif' ? $sortDirection : null">
                        REF
                    </x-table.heading>
                    <x-table.heading sortable wire:click="sortBy('name')" :direction="$sortField === 'title' ? $sortDirection : null">
                        VEÍCULO
                    </x-table.heading>
                    <x-table.heading sortable wire:click="sortBy('nif')" :direction="$sortField === 'nif' ? $sortDirection : null">
                        MATRÍCULA
                    </x-table.heading>
                    <x-table.heading sortable wire:click="sortBy('address')" :direction="$sortField === 'address' ? $sortDirection : null">
                        KILOMETRAGEM
                    </x-table.heading>
                    <x-table.heading sortable wire:click="sortBy('email')" :direction="$sortField === 'email' ? $sortDirection : null">
                        RESPONSÁVEL
                    </x-table.heading>
                    <x-table.heading sortable wire:click="sortBy('contact')" :direction="$sortField === 'contact' ? $sortDirection : null">
                        DATA/MARCAÇÃO
                    </x-table.heading>
                    <x-table.heading sortable wire:click="sortBy('contact')" :direction="$sortField === 'contact' ? $sortDirection : null">
                        DATA/REALIZADA
                    </x-table.heading>
                    <x-table.heading sortable wire:click="sortBy('contact')" :direction="$sortField === 'contact' ? $sortDirection : null">
                        STATUS
                    </x-table.heading>
                    <x-table.heading class="text-center">
                        Acções
                    </x-table.heading>

                </x-slot>

                <x-slot name="body">
                    @forelse ($maintenances as $key => $maintenance)
                        <x-table.row class="intro-x">
                            <x-table.cell class="w-10">
                                {{ $key + 1 }}
                            </x-table.cell>
                            <x-table.cell class="text-center"> {{ $maintenance->ref }}</x-table.cell>
                            <x-table.cell>
                                <a href="" class="font-medium whitespace-nowrap">{{ $maintenance->vehicle->brand }}</a>
                                <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">{{ $maintenance->vehicle->model }}</div>
                            </x-table.cell>
                            <x-table.cell class="text-center">{{ $maintenance->vehicle->license_plate }}</x-table.cell>
                            <x-table.cell class="text-center">{{ $maintenance->mileage }}km</x-table.cell>
                            <x-table.cell class="text-center">{{ $maintenance->responsible }}</x-table.cell>
                            <x-table.cell class="text-center">{{ $maintenance->service->unit_cost }}kz</x-table.cell>
                            <x-table.cell class="text-center">{{ $maintenance->date_scheduled }}</x-table.cell>
                            <x-table.cell class="text-center">{{ $maintenance->date_held }}</x-table.cell>
                            <x-table.cell class="w-10">
                                <div class="flex items-center justify-center text-{{$maintenance->status_color}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" icon-name="check-square"
                                        data-lucide="check-square" class="lucide lucide-check-square w-4 h-4 mr-2">
                                        <polyline points="9 11 12 14 22 4"></polyline>
                                        <path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"></path>
                                    </svg> {{ $maintenance->status == "done"? "realizada":"agendada" }}
                                </div>
                            </x-table.cell>
                            <x-table.cell class="table-report__action w-56">
                                <div class="flex justify-center items-center">
                                    <a class="flex items-center mr-3" href="{{route("manager.maintenance.update", ['maintenanceId' => $maintenance->id])}}"> <svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            icon-name="check-square" data-lucide="check-square"
                                            class="lucide lucide-check-square w-4 h-4 mr-1">
                                            <polyline points="9 11 12 14 22 4"></polyline>
                                            <path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"></path>
                                        </svg> detalhes </a>
                                    <a class="flex items-center text-danger" href="javascript:;"
                                        data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal"> <svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            icon-name="trash-2" data-lucide="trash-2"
                                            class="lucide lucide-trash-2 w-4 h-4 mr-1">
                                            <polyline points="3 6 5 6 21 6"></polyline>
                                            <path
                                                d="M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a2 2 0 012-2h4a2 2 0 012 2v2">
                                            </path>
                                            <line x1="10" y1="11" x2="10" y2="17">
                                            </line>
                                            <line x1="14" y1="11" x2="14" y2="17">
                                            </line>
                                        </svg> Remover </a>
                                </div>
                            </x-table.cell>
                        </x-table.row>
                    @empty
                        <x-table.row class="intro-x">
                            <x-table.cell class="table-report__action w-56" colspan="7">
                                <p class="alert alert-warning">
                                    <i class="fa fa-exclamation-x-table.rowiangle"></i>
                                    Não existem dados a pra serem apresentados
                                </p>
                            </x-table.cell>
                        </x-table.row>
                    @endforelse
                </x-slot>
            </x-table>
            {{ $maintenances->links() }}
        </div>
        <!-- END: Data List -->


        <!-- BEGIN: Pagination -->
       
        <!-- END: Pagination -->
    </div>

</div>
