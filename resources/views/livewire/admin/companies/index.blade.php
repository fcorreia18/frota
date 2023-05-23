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
        <button class="btn btn-primary shadow-md mr-2" data-tw-toggle="modal" data-tw-target="#add-company"><i class="w-4 h-4" data-lucide="plus"></i>Nova Empresa</button>

    </div>
</div>



<div class="intro-y box p-5 mt-5">
    <div class="flex flex-col sm:flex-row sm:items-end xl:items-start">
        <form id="tabulator-html-filter-form" class="xl:flex sm:mr-auto">
            <div class="sm:flex items-center sm:mr-4">
                <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Campo</label>
                <select id="tabulator-html-filter-field"
                    class="form-select w-full sm:w-32 2xl:w-full mt-2 sm:mt-0 sm:w-auto">
                    <option value="name">Nome</option>
                    <option value="category">Nif</option>
                    <option value="remaining_stock">Email</option>
                </select>
            </div>
            <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
                <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Nivel </label>
                <select id="tabulator-html-filter-type" class="form-select w-full mt-2 sm:mt-0 sm:w-auto">
                    <option value="like" selected>filtro</option>
                    <option value="=">=</option>
                    <option value="<">&lt;</option>
                    <option value="<=">&lt;=</option>
                    <option value=">">></option>
                    <option value=">=">>=</option>
                    <option value="!=">!=</option>
                </select>
            </div>
            <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
                <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Valor</label>
                <x-text-input class="sm:w-40 2xl:w-full mt-2 sm:mt-0" placeholder="digite..." wire:model="search" name="search"/>

            </div>
            <div class="mt-2 xl:mt-0">
                <button id="tabulator-html-filter-go" type="button"
                    class="btn btn-primary w-full sm:w-16">buscar</button>
                <button id="tabulator-html-filter-reset" type="button"
                    class="btn btn-secondary w-full sm:w-16 mt-2 sm:mt-0 sm:ml-1">limpar</button>
            </div>
        </form>
        <div class="flex mt-5 sm:mt-0">
            <button id="tabulator-print" class="btn btn-outline-secondary w-1/2 sm:w-auto mr-2" onclick="window.print()">
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
                <div class="event_message" id="mess"></div>
                <table class="table table-striped" id="companys" style="width: 100%;">
                    <thead>
                        <tr>
                            <th>
                                #
                            </th>

                            <th>
                                Empresa
                            </th>
                            <th>
                                NIF
                            </th>
                            <th>
                                Endereço
                            </th>
                            <th>
                                Email
                            </th>
                            <th>
                                Contactos
                            </th>
                            <th class="text-right">
                                Acções
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                       
                        <?php if (!empty($companies) && $companies->total()) : foreach ($companies as $key => $company) : ?>
                        <tr>
                            <td>
                                <?= $key + 1 ?>
                            </td>

                            <td>
                                <?= $company->name ?>

                            </td>
                            <td>
                                <?= $company->nif ?>

                            </td>
                            <td>
                                <?= $company->address ?>

                            </td>
                            <td>
                                <?= $company->email ?>

                            </td>
                            <td>
                                <?= $company->contact ?>

                            </td>
                            <td>
                                <div class="flex lg:justify-center items-center">
                                    <a class="edit flex items-center mr-3" href="javascript:;" data-tw-toggle="modal"
                                        data-tw-target="#header-footer-modal-preview-company<?= $company->id ?>"
                                        class="btn-sm bg-padrao text-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" icon-name="check-square"
                                            data-lucide="check-square"
                                            class="lucide lucide-check-square w-4 h-4 mr-1">
                                            <polyline points="9 11 12 14 22 4"></polyline>
                                            <path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"></path>
                                        </svg> Editar
                                    </a>
                                    <a class="delete flex items-center text-danger" href="javascript:;"
                                        data-tw-toggle="modal"
                                        data-tw-target="#delete-modal-preview-company<?= $company->id ?>"
                                        class="btn btn-primary ">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
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
                                        </svg> Eliminar
                                    </a>
                                </div>
                            </td>

                        </tr>
                        {{-- 
                        $this->insert('admin/companies/edit-company', ['company' => $company]);
                        $this->insert('admin/companies/delete-company', ['company' => $company]);
                        --}}
                        <?php endforeach;
                            else : ?>
                        <tr>
                            <td colspan="7">
                                <p class="alert alert-warning"><i class="fa fa-exclamation-triangle"> </i> Não
                                    existem dados a pra serem apresentados </p>
                            </td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
