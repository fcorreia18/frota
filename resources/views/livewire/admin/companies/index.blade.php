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

            <x-blue-primary-button class="btn btn-primary shadow-md mr-2" data-tw-toggle="modal"
                data-tw-target="#add-company">
                <i class="w-4 h-4" data-lucide="plus"></i>{{ __('Nova Empresa') }}
            </x-blue-primary-button>

        </div>
    </div>
    <div class="error-section">
        @if ($errors->any())
            <ul class="error-list">
                @foreach ($errors->all() as $error)
                    <li class="error-item">{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </div>

    <div class="intro-y box p-5 mt-5">
        <div class="flex flex-col sm:flex-row sm:items-end xl:items-start">
            <form id="tabulator-html-filter-form" class="xl:flex sm:mr-auto">
                <div class="sm:flex items-center sm:mr-4">
                    <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Campos</label>
                    <select id="tabulator-html-filter-field"
                        class="form-select w-full sm:w-32 2xl:w-full mt-2 sm:mt-0 sm:w-auto" wire:model="searchField">
                        <option value="name" selected>Nome</option>
                        <option value="nif">NIF</option>
                        <option value="email">Email</option>
                    </select>
                </div>

                <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
                    <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Valor</label>
                    <x-text-input class="sm:w-40 2xl:w-full mt-2 sm:mt-0 py-2 mb-2"
                        style="border:1px solid rgba(94, 94, 94, 0.48)" placeholder="digite..." wire:model="search"
                        name="search" id="search" />

                </div>
                <div class="mt-2 xl:mt-0">

                    <button id="tabulator-html-filter-reset" type="button" class="btn btn-pending-soft w-24 mr-1 mb-2"
                        wire:click="resetSearch">limpar</button>
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
                                Empresa
                            </x-table.heading>
                            <x-table.heading sortable wire:click="sortBy('nif')" :direction="$sortField === 'nif' ? $sortDirection : null">
                                NIF
                            </x-table.heading>
                            <x-table.heading sortable wire:click="sortBy('address')" :direction="$sortField === 'address' ? $sortDirection : null">
                                Endereço
                            </x-table.heading>
                            <x-table.heading sortable wire:click="sortBy('email')" :direction="$sortField === 'email' ? $sortDirection : null">
                                Email
                            </x-table.heading>
                            <x-table.heading sortable wire:click="sortBy('contact')" :direction="$sortField === 'contact' ? $sortDirection : null">
                                Contacto
                            </x-table.heading>
                            <x-table.heading class="text-center">
                                Acções
                            </x-table.heading>

                        </x-slot>

                        <x-slot name="body">
                            @forelse ($companies as $key => $company)
                                <x-table.row>
                                    <x-table.cell>
                                        {{ $key + 1 }}
                                    </x-table.cell>
                                    <x-table.cell>
                                        {{ $company->name }}
                                    </x-table.cell>
                                    <x-table.cell>
                                        {{ $company->nif }}
                                    </x-table.cell>
                                    <x-table.cell>
                                        {{ $company->address }}
                                    </x-table.cell>
                                    <x-table.cell>
                                        {{ $company->email }}
                                    </x-table.cell>
                                    <x-table.cell>
                                        {{ $company->contact }}
                                    </x-table.cell>
                                    <x-table.cell>
                                        <div class="flex lg:justify-center items-center">
                                            <button class="btn btn-primary-soft mr-2 mb-2 text-gray-600"
                                                data-tw-toggle="modal"
                                                data-tw-target="#header-footer-modal-preview-company{{ $company->id }}">
                                                <i data-lucide="edit" class="w-5 h-5"></i>
                                            </button>

                                            <form action="{{ route('admin.company.destroy', $company->id) }}"
                                                method="post">
                                                @method('delete')
                                                @csrf
                                                <button class="btn btn-danger mr-1 mb-2" onclick="deleteConfirm(event)">
                                                    <i data-lucide="trash" class="w-5 h-5"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </x-table.cell>

                                </x-table.row>
                            @empty
                                <x-table.row>
                                    <x-table.cell colspan="7">
                                        <p class="alert alert-warning"><i class="fa fa-exclamation-x-table.rowiangle">
                                            </i> Não
                                            existem dados a pra serem apresentados </p>
                                    </x-table.cell>

                                </x-table.row>
                            @endforelse
                        </x-slot>
                    </x-table>
                    {{ $companies->links() }}
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
        <script>
            document.addEventListener('livewire:load', function() {
                Livewire.on('show-success-message', function(message) {
                    let closeModal = document.querySelector('#add-company').remove()
                    Swal.fire({
                        icon: 'success',
                        text: message,
                        title: 'Cadastro bem sucedido',
                        showConfirmButton: false,
                        timer: 1500
                    })
                });

                Livewire.on('show-error-message', function(message) {

                    let closeModal = document.querySelector('#add-company').remove();


                    Swal.fire({
                        title: '',
                        icon: 'warning',
                        html: message,
                        showCloseButton: true,
                        showCancelButton: true,
                        focusConfirm: false,
                        confirmButtonText: 'Entendi',
                        cancelButtonText: 'Fechar',
                    }).then((result) => {
                        console.log(result);
                        // document.querySelector('#add-company').remove()
                    })
                });
            });
        </script>
    </x-slot>

    {{-- Início Adicionar Funcionário --}}
    <livewire:admin.companies.store />
    {{-- Fim Adicionar Funcionário --}}

    {{-- Início Adicionar Funcionário --}}
    @if (!empty($company))
        <livewire:admin.companies.update :company="$company" :wire:key="$company->id" />
    @endif
    {{-- Fim Adicionar Funcionário --}}

</div>
