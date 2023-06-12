<div>

    <x-slot name="breadCrumb">
        <nav aria-label="breadcrumb" class="-intro-x mr-auto hidden sm:flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Frota</a></li>
                <li class="breadcrumb-item">Dashboard</li>
                <li class="breadcrumb-item">Grupo de Empresa</li>
                <li class="breadcrumb-item active" aria-current="page">Editar</li>
            </ol>
        </nav>
    </x-slot>

    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Editar Grupo de Empresas </h2>
        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
        </div>
    </div>
    <!-- Editar -->
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2 mt-2">

        <div class="overflow-x-auto scrollbar-hidden">
            <div class="shadow-sm mt-3 bg-white p-4 col-lg-12">
                <form wire:submit.prevent="updateGroup" wire:loading.class="opacity-50 pointer-events-none">
                    <div class="modal-body grid grid-cols-12 gap-4 gap-y-3">
                        @if (session()->has('error'))
                            <div class="xl:col-span-12 col-span-12 sm:col-span-6 mb-2">
                                <div class="alert alert-danger alert-dismissible show flex items-center mb-2"
                                    role="alert">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" icon-name="alert-octagon"
                                        data-lucide="alert-octagon" class="lucide lucide-alert-octagon w-6 h-6 mr-2">
                                        <polygon
                                            points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2">
                                        </polygon>
                                        <line x1="12" y1="8" x2="12" y2="12"></line>
                                        <line x1="12" y1="16" x2="12.01" y2="16"></line>
                                    </svg>
                                    {{ session('error') }}
                                    <button type="button" class="btn-close" data-tw-dismiss="alert" aria-label="Close">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" icon-name="x"
                                            data-lucide="x" class="lucide lucide-x w-4 h-4 text-white">
                                            <line x1="18" y1="6" x2="6" y2="18">
                                            </line>
                                            <line x1="6" y1="6" x2="18" y2="18">
                                            </line>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        @endif



                        <div class="col-span-12 sm:col-span-6">
                            <label for="modal-form-1" class="form-label">{{ strtoupper('Nome:') }}</label>
                            <input wire:model="name" id="modal-form-1" type="text" name="name"
                                class="form-control" placeholder="FIRMA.GOV.AO"
                                style="border:{{ (sizeof($errors) > 0 && strlen($name) < 3) || strlen($name) >= 50 ? '0.5px solid red' : '1px solid #0000001a' }}">
                            @error('name')
                                <span class="error" style="color:red;"> {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-span-12 sm:col-span-6">
                            <label for="modal-form-2" class="form-label">Data de constituição</label>
                            <input wire:model="started_at" id="modal-form-2" type="date" name="started_at"
                                class="form-control"
                                style="border:{{ sizeof($errors) > 0 && strlen($started_at) < 3 ? '0.5px solid red' : '1px solid #0000001a' }}">
                            @error('started_at')
                                <span class="error" style="color:red;"> {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-span-12 sm:col-span-6">
                            <label for="modal-form-3" class="form-label">País</label>
                            <input wire:model="country" id="modal-form-3" type="text" name="country"
                                class="form-control" placeholder="Angola"
                                style="border:{{ sizeof($errors) > 0 && strlen($country) < 3 ? '0.5px solid red' : '1px solid #0000001a' }}">
                            @error('country')
                                <span class="error" style="color:red;"> {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-span-12 sm:col-span-6">
                            <label for="modal-form-4" class="form-label">Industria</label>
                            <input wire:model="industry" id="modal-form-4" type="text" name="industry"
                                class="form-control" placeholder="Tecnológica & Afins"
                                style="border:{{ sizeof($errors) > 0 && strlen($industry) < 3 ? '0.5px solid red' : '1px solid #0000001a' }}">
                            @error('industry')
                                <span class="error" style="color:red;"> {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-span-12 sm:col-span-6">
                            <label for="modal-form-5" class="form-label">Descrição</label>
                            <textarea wire:model="description" id="modal-form-5" name="description"
                                style="border:{{ sizeof($errors) > 0 && strlen($description) < 10 ? '0.5px solid red' : '1px solid #0000001a' }}"
                                cols="78" rows="5"></textarea>
                            @error('description')
                                <span class="error" style="color:red;"> {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-span-12 sm:col-span-6">
                            <label for="modal-form-5" class="form-label">Contacto</label>
                            <input wire:model="contact" id="modal-form-5" type="text" name="contact"
                                class="form-control" placeholder="933839298"
                                style="border:{{ sizeof($errors) > 0 && strlen($contact) < 3 ? '0.5px solid red' : '1px solid #0000001a' }}">
                            @error('contact')
                                <span class="error" style="color:red;"> {{ $message }}</span>
                            @enderror
                        </div>

                    </div>

                    <!-- BEGIN: Modal Footer -->
                    <div class="modal-footer" style="display: flex;justify-content:flex-end">
                        <button type="button" class="btn btn-outline-secondary w-20 mr-1">
                            <a href="{{ route('admin.group-companies.index') }}">
                                Voltar
                            </a>
                        </button>
                        <button type="submit" class="btn btn-primary w-20">Atualizar</button>

                    </div>
                    <!-- END: Modal Footer -->
                </form>
            </div>
        </div>

    </div>

    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Empresas Associadas </h2>
        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
        </div>
    </div>

    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
            <button class="btn btn-primary shadow-md mr-2">Cadastrar Empresa</button>
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
            <div class="hidden md:block mx-auto text-slate-500">Mostrando 1 á 10 de 3 resultados</div>
            <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
                <div class="w-56 relative text-slate-500">
                    <input type="text" class="form-control w-56 box pr-10" placeholder="Search...">
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
            <table class="table table-report -mt-2">
                <thead>
                    <tr>
                        <th class="whitespace-nowrap">#</th>
                        <th class="whitespace-nowrap">NOME</th>
                        <th class="text-center whitespace-nowrap">NIF</th>
                        <th class="text-center whitespace-nowrap">ENDEREÇO</th>
                        <th class="text-center whitespace-nowrap">CONTACTO</th>
                        <th class="text-center whitespace-nowrap">ACÇÕES</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($companies as $key => $company)
                        <tr class="intro-x">
                            <td class="text-center">{{ $key + 1 }}</td>

                            <td>
                                <a href="" class="font-medium whitespace-nowrap"> {{ $company->name }}</a>
                                <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">Tech &amp; Infra</div>
                            </td>
                            <td class="text-center">{{ $company->nif }}</td>
                            <td class="text-center">{{ $company->address }}</td>
                            <td class="text-center">{{ $company->contact }}</td>
                           
                            <td class="table-report__action w-56">
                                <div class="flex justify-center items-center">
                                    <a class="flex items-center mr-3" href="{{ route('admin.company.update', $company->id) }}"> <svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            icon-name="check-square" data-lucide="check-square"
                                            class="lucide lucide-check-square w-4 h-4 mr-1">
                                            <polyline points="9 11 12 14 22 4"></polyline>
                                            <path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"></path>
                                        </svg> 
                                        Editar 
                                    </a>
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
                                        </svg> 
                                        Deletar
                                     </a>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <x-table.row>
                            <x-table.cell colspan="7">
                                <p class="alert alert-warning"><i class="fa fa-exclamation-x-table.rowiangle">
                                    </i> Não
                                    existem dados a pra serem apresentados </p>
                            </x-table.cell>

                        </x-table.row>
                    @endforelse
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
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                icon-name="chevron-left" class="lucide lucide-chevron-left w-4 h-4"
                                data-lucide="chevron-left">
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
