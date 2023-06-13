<div>

    <x-slot name="breadCrumb">
        <nav aria-label="breadcrumb" class="-intro-x mr-auto hidden sm:flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Frota</a></li>
                <li class="breadcrumb-item">Dashboard</li>
                <li class="breadcrumb-item active" aria-current="page">Grupo de Empresa</li>
            </ol>
        </nav>
    </x-slot>

    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Lista de Grupo de Empresas </h2>
        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">

            <x-blue-primary-button class="btn btn-primary shadow-md mr-2" data-tw-toggle="modal"
                wire:click="$emit('toggleForm')">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    icon-name="plus" class="lucide lucide-plus w-4 h-4" data-lucide="plus">
                    <line x1="12" y1="5" x2="12" y2="19"></line>
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                </svg>
                Novo Grupo
            </x-blue-primary-button>

        </div>
    </div>

    <div class="intro-y box p-5 mt-5">
        <div class="flex flex-col sm:flex-row sm:items-end xl:items-start">
            <form id="tabulator-html-filter-form" class="xl:flex sm:mr-auto">
                <div class="sm:flex items-center sm:mr-4">
                    <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Campos</label>
                    <select id="tabulator-html-filter-field"
                        class="form-select w-full sm:w-32 2xl:w-full mt-2 sm:mt-0 sm:w-auto" wire:model="searchField">
                        <option value="name" selected>Nome</option>

                    </select>
                </div>

                <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
                    <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Valor</label>
                    <x-text-input class="sm:w-40 2xl:w-full mt-2 sm:mt-0 py-2 mb-2"
                        style="border:1px solid rgba(94, 94, 94, 0.48)" placeholder="digite..." wire:model="search"
                        name="search" id="search" />

                </div>
                <div class="mt-2 xl:mt-0">

                    <button id="tabulator-html-filter-reset" type="button"
                        class="btn alert-warning w-24 mr-1 mb-2 text-white" wire:click="resetSearch">limpar</button>
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
                            <x-table.heading>
                                #
                            </x-table.heading>

                            <x-table.heading sortable wire:click="sortBy('name')" :direction="$sortField === 'title' ? $sortDirection : null">
                                Nome
                            </x-table.heading>
                            <x-table.heading sortable wire:click="sortBy('description')" :direction="$sortField === 'title' ? $sortDirection : null">
                                Descrição
                            </x-table.heading>
                            <x-table.heading sortable wire:click="sortBy('started_at')" :direction="$sortField === 'title' ? $sortDirection : null">
                                Data Constituição
                            </x-table.heading>
                            <x-table.heading sortable wire:click="sortBy('country')" :direction="$sortField === 'title' ? $sortDirection : null">
                                País
                            </x-table.heading>
                            <x-table.heading sortable wire:click="sortBy('industry')" :direction="$sortField === 'title' ? $sortDirection : null">
                                Industria
                            </x-table.heading>
                            <x-table.heading sortable wire:click="sortBy('status')" :direction="$sortField === 'title' ? $sortDirection : null">
                                Status
                            </x-table.heading>
                            <x-table.heading class="text-center">
                                Acções
                            </x-table.heading>

                        </x-slot>

                        <x-slot name="body">
                            {{-- {{dd($groupCompanies)}} --}}
                            @forelse ($groupCompanies as $key => $groupCompany)
                                <x-table.row>
                                    <x-table.cell>
                                        {{ $key + 1 }}
                                    </x-table.cell>
                                    <x-table.cell>
                                        {{ $groupCompany->name }}
                                    </x-table.cell>
                                    <x-table.cell>
                                        {{ $groupCompany->description }}
                                    </x-table.cell>
                                    <x-table.cell>
                                        {{ $groupCompany->started_at }}
                                    </x-table.cell>
                                    <x-table.cell>
                                        {{ $groupCompany->country }}
                                    </x-table.cell>
                                    <x-table.cell>
                                        {{ $groupCompany->industry }}
                                    </x-table.cell>
                                    <x-table.cell>
                                        {{ $groupCompany->status }}
                                    </x-table.cell>
                                    <x-table.cell>
                                        <div class="flex lg:justify-center items-center">
                                            {{-- redirecionar para pagina de detalhes --}}
                                            <button class="btn btn-primary-soft mr-2 mb-2 text-gray-600">
                                                <a href="{{ route('admin.group-company.update', ['groupId' => $groupCompany->id,]) }}">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" icon-name="edit" data-lucide="edit"
                                                        class="lucide lucide-edit w-5 h-5">
                                                        <path
                                                            d="M11 4H4a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2v-7">
                                                        </path>
                                                        <path
                                                            d="M18.5 2.5a2.121 2.121 0 013 3L12 15l-4 1 1-4 9.5-9.5z">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </button>
                                            <livewire:admin.group-companies.destroy :groupCompany="$groupCompany"
                                                :wire:key="'group-company-'.$groupCompany->id" />
                                        </div>
                                    </x-table.cell>
                                </x-table.row>
                            @empty
                                <x-table.row>
                                    <x-table.cell colspan="8">
                                        <p class="alert alert-warning text-center text-white font-bold text-base"><i
                                                class="fa fa-exclamation-x-table.rowiangle">
                                            </i> Não
                                            existem dados a pra serem apresentados </p>
                                    </x-table.cell>

                                </x-table.row>
                            @endforelse
                        </x-slot>
                    </x-table>
                    {{ $groupCompanies->links() }}
                </div>
            </div>
        </div>
    </div>

    <x-slot name="scripts">
        <script>
            window.deleteConfirm = function(event, id) {
                event.preventDefault();
                console.log(event, id)
                let deleteButton = document.getElementById(`deleteGroup-${id}`);

                Swal.fire({
                    title: 'Tem certeza?',
                    text: "Essa acção é irreversível!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonText: 'cancelar',
                    cancelButtonColor: '#d33',
                    confirmButtonText: `sim, apagar o Grupo ${deleteButton.innerHTML}!`
                }).then((result) => {
                    if (result.isConfirmed) {
                        deleteButton.click()
                    }
                })
            }
        </script>
        <script>
            document.addEventListener('livewire:load', function() {
                Livewire.on('groupAdd', function(message) {
                    Swal.fire({
                        icon: 'success',
                        text: message,
                        title: 'Cadastro bem sucedido',
                        showConfirmButton: false,
                        timer: 1500
                    })
                });
                Livewire.on('companyAdd', function(message) {
                Swal.fire({
                    icon: 'success',
                    text: message,
                    title: 'Cadastro bem sucedido',
                    showConfirmButton: false,
                    timer: 1500
                })
            });
            });
        </script>
        
    </x-slot>

    {{-- Início Adicionar Grupo de Empresa --}}
    <livewire:admin.group-companies.create />
    {{-- Fim Adicionar Grupo de Empresa --}}
    
</div>
