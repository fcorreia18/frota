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


    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Lista de Empresas</h2>
        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">


            <x-blue-primary-button x-data=""
                x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')" data-tw-toggle="modal"
                data-tw-target="#add-company"><i class="w-4 h-4" data-lucide="plus"></i>{{ __('Nova Empresa') }}
            </x-blue-primary-button>
        </div>
    </div>


    <div class="intro-y box p-5 mt-5">
        <div class="flex flex-col sm:flex-row sm:items-end xl:items-start">
            <form id="tabulator-html-filter-form" class="xl:flex sm:mr-auto">
                <div class="sm:flex items-center sm:mr-4">
                    <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Campos</label>
                    <select id="tabulator-html-filter-field"
                        class="form-select w-full sm:w-32 2xl:w-full mt-2 sm:mt-0 sm:w-auto">
                        <option value="name">Nome</option>
                        <option value="category">NIF</option>
                        <option value="remaining_stock">Email</option>
                    </select>
                </div>

                <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
                    <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Valor</label>
                    <x-text-input class="sm:w-40 2xl:w-full mt-2 sm:mt-0 py-2 mb-2"
                        style="border:1px solid rgba(94, 94, 94, 0.48)" placeholder="digite..." wire:model="search"
                        name="search" />

                </div>
                <div class="mt-2 xl:mt-0">

                    <button id="tabulator-html-filter-reset" type="button"
                        class="btn btn-pending-soft w-24 mr-1 mb-2">limpar</button>
                </div>
            </form>
            <div class="flex mt-5 sm:mt-0">
                <button id="tabulator-print" class="btn btn-outline-secondary w-1/2 sm:w-auto mr-2"
                    onclick="window.print()">
                    <i data-lucide="printer" class="w-4 h-4 mr-2"></i> Imprimir
                </button>
                <div class="dropdown w-1/2 sm:w-auto">
                    <button class="dropdown-toggle btn btn-outline-secondary w-full sm:w-auto" aria-expanded="false"
                        data-tw-toggle="dropdown">
                        <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Exportar <i data-lucide="chevron-down"
                            class="w-4 h-4 ml-auto sm:ml-2"></i>
                    </button>
                    <div class="dropdown-menu w-40">
                        <ul class="dropdown-content">
                            <li>
                                <a id="tabulator-export-csv" href="javascript:;" class="dropdown-item">
                                    <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Exportar CSV
                                </a>
                            </li>
                            <li>
                                <a id="tabulator-export-pdf" href="javascript:;" class="dropdown-item">
                                    <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Exportar PDF
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="overflow-x-auto scrollbar-hidden">
            <div class="shadow-sm mt-3 bg-white p-4 col-lg-12">
                <div class="table-responsive">
                    {{-- MESSAGE --}}
                    
                    <x-table>
                        <x-slot name="head">
                            <x-table.heading >
                                #
                            </x-table.heading >
                
                            <x-table.heading sortable>
                                Empresa
                            </x-table.heading >
                            <x-table.heading sortable>
                                NIF
                            </x-table.heading >
                            <x-table.heading sortable>
                                Endereço
                            </x-table.heading >
                            <x-table.heading sortable>
                                Email
                            </x-table.heading >
                            <x-table.heading sortable>
                                Contactos
                            </x-table.heading >
                            <x-table.heading class="text-center">
                                Acções
                            </x-table.heading >

                        </x-slot>

                        <x-slot name="body">
                            <x-table.row>
                                <x-table.cell>
                                    One
                                </x-table.cell>
                                <x-table.cell>
                                    Two
                                </x-table.cell>
                                <x-table.cell>
                                    d
                                </x-table.cell>
                                <x-table.cell>
                                    Twogh
                                </x-table.cell>
                                <x-table.cell>
                                    Twog
                                </x-table.cell>
                                <x-table.cell>
                                    f
                                </x-table.cell>
                                <x-table.cell>
                                    Twoh
                                </x-table.cell>

                            </x-table.row>

                        </x-slot>

                    </x-table>
                </div>
            </div>
        </div>
    </div>




    <x-slot name="scripts">
        <script>
            window.deleteConfirm = function(event) {
                event.preventDefault();
                let form = event.target.form;
                Swal.fire({
                    title: 'Tem certeza?',
                    text: "Essa acção é irreversível!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonText: 'cancelar',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'sim, apagar!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                })
            }
        </script>
    </x-slot>
</div>
