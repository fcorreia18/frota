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



    <ul class="nav nav-boxed-tabs" role="tablist">
        <li id="example-3-tab" class="nav-item flex-1" role="presentation">
            <button class="nav-link w-full py-2 active" style="border-radius:0px" data-tw-toggle="pill"
                data-tw-target="#example-tab-3" type="button" role="tab" aria-controls="example-tab-3"
                aria-selected="true">
                Listagem de projetos
            </button>
        </li>
        <li id="example-4-tab" class="nav-item flex-1" role="presentation">
            <button class="nav-link w-full py-2" style="border-radius:0px" data-tw-toggle="pill"
                data-tw-target="#example-tab-4" type="button" role="tab" aria-controls="example-tab-4"
                aria-selected="false">
                Cadastrar novo projeto
            </button>
        </li>
    </ul>



    <div class="tab-content mt-5">
        <div id="example-tab-3" class="tab-pane leading-relaxed active" role="tabpanel" aria-labelledby="example-3-tab">
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
                                class="form-select w-full sm:w-32 2xl:w-full mt-2 sm:mt-0 sm:w-auto"
                                wire:model="searchField">
                                <option value="name" selected>Nome</option>
                                <option value="nif">NIF</option>
                                <option value="email">Email</option>
                            </select>
                        </div>

                        <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
                            <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Valor</label>
                            <x-text-input class="sm:w-40 2xl:w-full mt-2 sm:mt-0 py-2 mb-2"
                                style="border:1px solid rgba(94, 94, 94, 0.48)" placeholder="digite..."
                                wire:model="search" name="search" id="search" />

                        </div>
                        <div class="mt-2 xl:mt-0">

                            <button id="tabulator-html-filter-reset" type="button"
                                class="btn btn-pending-soft w-24 mr-1 mb-2" wire:click="resetSearch">limpar</button>
                        </div>
                    </form>
                    <div class="flex mt-5 sm:mt-0">
                        <button id="tabulator-print" class="btn btn-outline-secondary w-1/2 sm:w-auto mr-2"
                            onclick="window.print()">
                            <i data-lucide="printer" class="w-4 h-4 mr-2"></i> Imprimir
                        </button>
                        <div class="dropdown w-1/2 sm:w-auto">
                            <button class="dropdown-toggle btn btn-outline-secondary w-full sm:w-auto"
                                aria-expanded="false" data-tw-toggle="dropdown">
                                <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Exportar <i
                                    data-lucide="chevron-down" class="w-4 h-4 ml-auto sm:ml-2"></i>
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
                                    <x-table.heading sortable wire:click="sortBy('nif')" :direction="$sortField === 'nif' ? $sortDirection : null">
                                        NOME
                                    </x-table.heading>
                                    <x-table.heading sortable wire:click="sortBy('name')" :direction="$sortField === 'title' ? $sortDirection : null">
                                        DESCRIÇÃO
                                    </x-table.heading>
                                    <x-table.heading sortable wire:click="sortBy('nif')" :direction="$sortField === 'nif' ? $sortDirection : null">
                                        STATUS
                                    </x-table.heading>
                                    <x-table.heading class="text-center">
                                        Acções
                                    </x-table.heading>

                                </x-slot>

                                <x-slot name="body">
                                    @forelse ($projects as $key => $project)
                                        <x-table.row>
                                            <x-table.cell>
                                                {{ $key + 1 }}
                                            </x-table.cell>
                                            <x-table.cell>
                                                {{ $project->name}}
                                            </x-table.cell>
                                          
                                            <x-table.cell>
                                                {{ $project->description }}
                                            </x-table.cell>
                                            <x-table.cell class="text-success">
                                                {{ $project->status }}
                                            </x-table.cell>
                                          
                                            <x-table.cell>
                                                <div class="flex lg:justify-center items-center">
                                                    <button class="btn btn-primary-soft mr-2 mb-2 text-gray-600">
                                                        <a
                                                            href="{{ route('manager.project.update', ['projectId' => $project->id]) }}">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                icon-name="edit" data-lucide="edit"
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

                                                    <button class="btn btn-danger mr-1 mb-2"
                                                        onclick="deleteConfirm(event)">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            icon-name="trash" data-lucide="trash"
                                                            class="lucide lucide-trash w-5 h-5">
                                                            <polyline points="3 6 5 6 21 6"></polyline>
                                                            <path
                                                                d="M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a2 2 0 012-2h4a2 2 0 012 2v2">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </x-table.cell>

                                        </x-table.row>
                                    @empty
                                        <x-table.row>
                                            <x-table.cell colspan="7">
                                                <p class="alert alert-warning"><i
                                                        class="fa fa-exclamation-x-table.rowiangle">
                                                    </i> Não
                                                    existem dados a pra serem apresentados </p>
                                            </x-table.cell>

                                        </x-table.row>
                                    @endforelse
                                </x-slot>
                            </x-table>
                            {{ $projects->links() }}
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <div id="example-tab-4" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="example-4-tab">
            <livewire:manager.projects.create :companies="$companies"  :wire:key="'companies-'.$companies"/>

        </div>
    </div>
</div>



<x-slot name="scripts">
    <script>
        const myTabEl = document.getElementById('example-tab-4')
        myTabEl.addEventListener('hide.tw.tab', function(event) {
            console.log("ola")
        })
    </script>
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
                let closeModal = document.querySelector('#add-project').remove()
                Swal.fire({
                    icon: 'success',
                    text: message,
                    title: 'Cadastro bem sucedido',
                    showConfirmButton: false,
                    timer: 1500
                })
            });

            Livewire.on('show-error-message', function(message) {

                let closeModal = document.querySelector('#add-project').remove();


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
                    // document.querySelector('#add-project').remove()
                })
            });
        });
    </script>

   

</x-slot>
