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
        <x-blue-primary-button class="btn btn-primary shadow-md mr-2" 
            wire:click="$emit('toggleForm')">
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
                        <a href="" class="dropdown-item"> <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" icon-name="printer" data-lucide="printer"
                                class="lucide lucide-printer w-4 h-4 mr-2">
                                <polyline points="6 9 6 2 18 2 18 9"></polyline>
                                <path d="M6 18H4a2 2 0 01-2-2v-5a2 2 0 012-2h16a2 2 0 012 2v5a2 2 0 01-2 2h-2"></path>
                                <rect x="6" y="14" width="12" height="8"></rect>
                            </svg> Print </a>
                    </li>
                    <li>
                        <a href="" class="dropdown-item"> <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" icon-name="file-text"
                                data-lucide="file-text" class="lucide lucide-file-text w-4 h-4 mr-2">
                                <path d="M14.5 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V7.5L14.5 2z"></path>
                                <polyline points="14 2 14 8 20 8"></polyline>
                                <line x1="16" y1="13" x2="8" y2="13"></line>
                                <line x1="16" y1="17" x2="8" y2="17"></line>
                                <line x1="10" y1="9" x2="8" y2="9"></line>
                            </svg> Export to Excel </a>
                    </li>
                    <li>
                        <a href="" class="dropdown-item"> <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" icon-name="file-text"
                                data-lucide="file-text" class="lucide lucide-file-text w-4 h-4 mr-2">
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
        <div class="hidden md:block mx-auto text-slate-500">Mostrando 1 até 3 de 15 registos</div>
        <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
            <div class="w-56 relative text-slate-500">
                <input type="text" class="form-control w-56 box pr-10" placeholder="pesquisar...">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" icon-name="search"
                    class="lucide lucide-search w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-lucide="search">
                    <circle cx="11" cy="11" r="8"></circle>
                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                </svg>
            </div>
        </div>
    </div>

    <!-- BEGIN: Data List -->
    <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
        <table class="table table-report -mt-2">
            <thead>
                <tr>
                    <th class="whitespace-nowrap">#</th>
                    <th class="text-center whitespace-nowrap">REF</th>
                    <th class="whitespace-nowrap">VEÍCULO</th>
                    <th class="text-center whitespace-nowrap">MATRÍCULA</th>
                    <th class="text-center whitespace-nowrap">KILOMETRAGEM</th>
                    <th class="text-center whitespace-nowrap">RESPONSÁVEL</th>
                    <th class="text-center whitespace-nowrap">CUSTO</th>
                    <th class="text-center whitespace-nowrap">STATUS</th>
                    <th class="text-center whitespace-nowrap">ACÇÕES</th>
                </tr>
            </thead>
            <tbody>
                <tr class="intro-x">
                    <td class="w-10">
                        1
                    </td>
                    <td class="text-center">000001</td>
                    <td>
                        <a href="" class="font-medium whitespace-nowrap">Renault</a>
                        <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">Sandero</div>
                    </td>
                    <td class="text-center">LD-19-38-FQ</td>
                    <td class="text-center">88 mil km</td>
                    <td class="text-center">Alberto Silva</td>
                    <td class="text-center">29.000,00kz</td>
                    <td class="w-10">
                        <div class="flex items-center justify-center text-success"> 
                            <svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" icon-name="check-square" data-lucide="check-square"
                            class="lucide lucide-check-square w-4 h-4 mr-2">
                            <polyline points="9 11 12 14 22 4"></polyline>
                            <path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"></path>
                        </svg> Realizada </div>
                    </td>
                    <td class="table-report__action w-56">
                        <div class="flex justify-center items-center">
                            <a class="flex items-center mr-3" href="javascript:;"> <svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" icon-name="check-square"
                                    data-lucide="check-square" class="lucide lucide-check-square w-4 h-4 mr-1">
                                    <polyline points="9 11 12 14 22 4"></polyline>
                                    <path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"></path>
                                </svg> detalhes </a>
                            <a class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal"
                                data-tw-target="#delete-confirmation-modal"> <svg xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" icon-name="trash-2" data-lucide="trash-2"
                                    class="lucide lucide-trash-2 w-4 h-4 mr-1">
                                    <polyline points="3 6 5 6 21 6"></polyline>
                                    <path d="M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a2 2 0 012-2h4a2 2 0 012 2v2">
                                    </path>
                                    <line x1="10" y1="11" x2="10" y2="17"></line>
                                    <line x1="14" y1="11" x2="14" y2="17"></line>
                                </svg> Remover </a>
                        </div>
                    </td>
                </tr> 
                <tr class="intro-x">
                    <td class="w-10">
                       2
                    </td>
                    <td class="text-center">000002</td>
                    <td>
                        <a href="" class="font-medium whitespace-nowrap">Nissan</a>
                        <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">Quashai</div>
                    </td>
                    <td class="text-center">LD-02-38-IH</td>
                    <td class="text-center">70 mil km</td>
                    <td class="text-center">Eduardo Costa</td>
                    <td class="text-center">26.000,00kz</td>
                    <td class="w-10">
                        <div class="flex items-center justify-center text-warning"> <svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" icon-name="check-square" data-lucide="check-square"
                                class="lucide lucide-check-square w-4 h-4 mr-2">
                                <polyline points="9 11 12 14 22 4"></polyline>
                                <path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"></path>
                            </svg> Pendente </div>
                    </td>
                    <td class="table-report__action w-56">
                        <div class="flex justify-center items-center">
                            <a class="flex items-center mr-3" href="javascript:;"> <svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" icon-name="check-square"
                                    data-lucide="check-square" class="lucide lucide-check-square w-4 h-4 mr-1">
                                    <polyline points="9 11 12 14 22 4"></polyline>
                                    <path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"></path>
                                </svg> Editar </a>
                            <a class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal"
                                data-tw-target="#delete-confirmation-modal"> <svg xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" icon-name="trash-2" data-lucide="trash-2"
                                    class="lucide lucide-trash-2 w-4 h-4 mr-1">
                                    <polyline points="3 6 5 6 21 6"></polyline>
                                    <path d="M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a2 2 0 012-2h4a2 2 0 012 2v2">
                                    </path>
                                    <line x1="10" y1="11" x2="10" y2="17"></line>
                                    <line x1="14" y1="11" x2="14" y2="17"></line>
                                </svg> Remover </a>
                        </div>
                    </td>
                </tr>
                <tr class="intro-x">
                    <td class="w-10">
                       3
                    </td>
                    <td class="text-center">000003</td>

                    <td>
                        <a href="" class="font-medium whitespace-nowrap">Toyota</a>
                        <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">Hilux</div>
                    </td>
                    <td class="text-center">LD-04-12-GD</td>
                    <td class="text-center">120 mil km</td>
                    <td class="text-center">Alberto Silva</td>
                    <td class="text-center">33.000,00kz</td>
                    <td class="w-10">
                        <div class="flex items-center justify-center text-warning"> <svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" icon-name="check-square" data-lucide="check-square"
                            class="lucide lucide-check-square w-4 h-4 mr-2">
                            <polyline points="9 11 12 14 22 4"></polyline>
                            <path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"></path>
                        </svg> Pendente </div>
                    </td>
                    <td class="table-report__action w-56">
                        <div class="flex justify-center items-center">
                            <a class="flex items-center mr-3" href="javascript:;"> <svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" icon-name="check-square"
                                    data-lucide="check-square" class="lucide lucide-check-square w-4 h-4 mr-1">
                                    <polyline points="9 11 12 14 22 4"></polyline>
                                    <path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"></path>
                                </svg> Editar </a>
                            <a class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal"
                                data-tw-target="#delete-confirmation-modal"> <svg xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" icon-name="trash-2" data-lucide="trash-2"
                                    class="lucide lucide-trash-2 w-4 h-4 mr-1">
                                    <polyline points="3 6 5 6 21 6"></polyline>
                                    <path d="M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a2 2 0 012-2h4a2 2 0 012 2v2">
                                    </path>
                                    <line x1="10" y1="11" x2="10" y2="17"></line>
                                    <line x1="14" y1="11" x2="14" y2="17"></line>
                                </svg> Remover </a>
                        </div>
                    </td>
                </tr>    

            </tbody>
        </table>
    </div>
    <!-- END: Data List -->


    <!-- BEGIN: Pagination -->
    <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap items-center">
        <nav class="w-full sm:w-auto sm:mr-auto">
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            icon-name="chevrons-left" class="lucide lucide-chevrons-left w-4 h-4"
                            data-lucide="chevrons-left">
                            <polyline points="11 17 6 12 11 7"></polyline>
                            <polyline points="18 17 13 12 18 7"></polyline>
                        </svg> </a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="chevron-left"
                            class="lucide lucide-chevron-left w-4 h-4" data-lucide="chevron-left">
                            <polyline points="15 18 9 12 15 6"></polyline>
                        </svg> </a>
                </li>
                <li class="page-item"> <a class="page-link" href="#">...</a> </li>
                <li class="page-item"> <a class="page-link" href="#">1</a> </li>
                <li class="page-item active"> <a class="page-link" href="#">2</a> </li>
                <li class="page-item"> <a class="page-link" href="#">3</a> </li>
                <li class="page-item"> <a class="page-link" href="#">...</a> </li>
                <li class="page-item">
                    <a class="page-link" href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            icon-name="chevron-right" class="lucide lucide-chevron-right w-4 h-4"
                            data-lucide="chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg> </a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            icon-name="chevrons-right" class="lucide lucide-chevrons-right w-4 h-4"
                            data-lucide="chevrons-right">
                            <polyline points="13 17 18 12 13 7"></polyline>
                            <polyline points="6 17 11 12 6 7"></polyline>
                        </svg> </a>
                </li>
            </ul>
        </nav>

        <select class="w-20 form-select box mt-3 sm:mt-0">
            <option>10</option>
            <option>25</option>
            <option>35</option>
            <option>50</option>
        </select>
    </div>
    <!-- END: Pagination -->
</div>

</div>
