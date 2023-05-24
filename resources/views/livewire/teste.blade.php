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
            <th class="text-center">
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
                    <button class="btn btn-primary-soft mr-2 mb-2 text-gray-600" data-tw-toggle="modal" data-tw-target="#header-footer-modal-preview-company{{$company->id}}">
                        <i data-lucide="edit" class="w-5 h-5"></i>
                    </button>
                   
                    <form action="{{route("admin.company.destroy", $company->id)}}" method="post">
                        @method("delete")
                        @csrf
                        <button class="btn btn-danger mr-1 mb-2" onclick="deleteConfirm(event)">
                            <i data-lucide="trash" class="w-5 h-5"></i>
                        </button>
                    </form>
                </div>
            </td>

        </tr>
        @include('livewire.admin.companies.show',['company' => $company])
    {{-- 
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



{{-- TABULATOR
    
 <div class="overflow-x-auto scrollbar-hidden">
                                <div id="tabulator" class="mt-5 table-report table-report--tabulator tabulator"
                                    role="grid" tabulator-layout="fitColumns">
                                    <div class="tabulator-header" style="padding-right: 0px; margin-left: 0px;">
                                        <div class="tabulator-headers" style="margin-left: 0px;">
                                            <div class="tabulator-col" role="columnheader" aria-sort="none"
                                                style="min-width: 30px; width: 40px; display: none; height: 44px;"
                                                title="">
                                                <div class="tabulator-col-content">
                                                    <div class="tabulator-col-title-holder">
                                                        <div class="tabulator-col-title">&nbsp;</div>
                                                    </div>
                                                </div>
                                                <div class="tabulator-col-resize-handle"></div>
                                                <div class="tabulator-col-resize-handle prev"></div>
                                            </div>
                                            <div class="tabulator-col tabulator-sortable" role="columnheader"
                                                aria-sort="desc" tabulator-field="name"
                                                style="min-width: 200px; width: 312px; height: 44px;" title="">
                                                <div class="tabulator-col-content">
                                                    <div class="tabulator-col-title-holder">
                                                        <div class="tabulator-col-title">PRODUCT NAME</div>
                                                        <div class="tabulator-col-sorter">
                                                            <div class="tabulator-arrow"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tabulator-col-resize-handle"></div>
                                                <div class="tabulator-col-resize-handle prev"></div>
                                            </div>
                                            <div class="tabulator-col tabulator-sortable" role="columnheader"
                                                aria-sort="none" tabulator-field="images"
                                                style="min-width: 200px; width: 312px; height: 44px;" title="">
                                                <div class="tabulator-col-content">
                                                    <div class="tabulator-col-title-holder">
                                                        <div class="tabulator-col-title">IMAGES</div>
                                                        <div class="tabulator-col-sorter">
                                                            <div class="tabulator-arrow"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tabulator-col-resize-handle"></div>
                                                <div class="tabulator-col-resize-handle prev"></div>
                                            </div>
                                            <div class="tabulator-col tabulator-sortable" role="columnheader"
                                                aria-sort="none" tabulator-field="remaining_stock"
                                                style="min-width: 200px; width: 312px; height: 44px;" title="">
                                                <div class="tabulator-col-content">
                                                    <div class="tabulator-col-title-holder">
                                                        <div class="tabulator-col-title">REMAINING STOCK</div>
                                                        <div class="tabulator-col-sorter">
                                                            <div class="tabulator-arrow"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tabulator-col-resize-handle"></div>
                                                <div class="tabulator-col-resize-handle prev"></div>
                                            </div>
                                            <div class="tabulator-col tabulator-sortable" role="columnheader"
                                                aria-sort="none" tabulator-field="status"
                                                style="min-width: 200px; width: 312px; height: 44px;" title="">
                                                <div class="tabulator-col-content">
                                                    <div class="tabulator-col-title-holder">
                                                        <div class="tabulator-col-title">STATUS</div>
                                                        <div class="tabulator-col-sorter">
                                                            <div class="tabulator-arrow"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tabulator-col-resize-handle"></div>
                                                <div class="tabulator-col-resize-handle prev"></div>
                                            </div>
                                            <div class="tabulator-col tabulator-sortable" role="columnheader"
                                                aria-sort="none" tabulator-field="actions"
                                                style="min-width: 200px; width: 312px; height: 44px;" title="">
                                                <div class="tabulator-col-content">
                                                    <div class="tabulator-col-title-holder">
                                                        <div class="tabulator-col-title">ACTIONS</div>
                                                        <div class="tabulator-col-sorter">
                                                            <div class="tabulator-arrow"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tabulator-col-resize-handle"></div>
                                                <div class="tabulator-col-resize-handle prev"></div>
                                            </div>
                                            <div class="tabulator-col tabulator-sortable" role="columnheader"
                                                aria-sort="none" style="display: none; min-width: 40px; height: 44px;"
                                                tabulator-field="name" title="">
                                                <div class="tabulator-col-content">
                                                    <div class="tabulator-col-title-holder">
                                                        <div class="tabulator-col-title">PRODUCT NAME</div>
                                                        <div class="tabulator-col-sorter">
                                                            <div class="tabulator-arrow"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tabulator-col-resize-handle"></div>
                                                <div class="tabulator-col-resize-handle prev"></div>
                                            </div>
                                            <div class="tabulator-col tabulator-sortable" role="columnheader"
                                                aria-sort="none" style="display: none; min-width: 40px; height: 44px;"
                                                tabulator-field="category" title="">
                                                <div class="tabulator-col-content">
                                                    <div class="tabulator-col-title-holder">
                                                        <div class="tabulator-col-title">CATEGORY</div>
                                                        <div class="tabulator-col-sorter">
                                                            <div class="tabulator-arrow"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tabulator-col-resize-handle"></div>
                                                <div class="tabulator-col-resize-handle prev"></div>
                                            </div>
                                            <div class="tabulator-col tabulator-sortable" role="columnheader"
                                                aria-sort="none" style="display: none; min-width: 40px; height: 44px;"
                                                tabulator-field="remaining_stock" title="">
                                                <div class="tabulator-col-content">
                                                    <div class="tabulator-col-title-holder">
                                                        <div class="tabulator-col-title">REMAINING STOCK</div>
                                                        <div class="tabulator-col-sorter">
                                                            <div class="tabulator-arrow"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tabulator-col-resize-handle"></div>
                                                <div class="tabulator-col-resize-handle prev"></div>
                                            </div>
                                            <div class="tabulator-col tabulator-sortable" role="columnheader"
                                                aria-sort="none" style="display: none; min-width: 40px; height: 44px;"
                                                tabulator-field="status" title="">
                                                <div class="tabulator-col-content">
                                                    <div class="tabulator-col-title-holder">
                                                        <div class="tabulator-col-title">STATUS</div>
                                                        <div class="tabulator-col-sorter">
                                                            <div class="tabulator-arrow"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tabulator-col-resize-handle"></div>
                                                <div class="tabulator-col-resize-handle prev"></div>
                                            </div>
                                            <div class="tabulator-col tabulator-sortable" role="columnheader"
                                                aria-sort="none" style="display: none; min-width: 40px; height: 44px;"
                                                tabulator-field="images" title="">
                                                <div class="tabulator-col-content">
                                                    <div class="tabulator-col-title-holder">
                                                        <div class="tabulator-col-title">IMAGE 1</div>
                                                        <div class="tabulator-col-sorter">
                                                            <div class="tabulator-arrow"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tabulator-col-resize-handle"></div>
                                                <div class="tabulator-col-resize-handle prev"></div>
                                            </div>
                                            <div class="tabulator-col tabulator-sortable" role="columnheader"
                                                aria-sort="none" style="display: none; min-width: 40px; height: 44px;"
                                                tabulator-field="images" title="">
                                                <div class="tabulator-col-content">
                                                    <div class="tabulator-col-title-holder">
                                                        <div class="tabulator-col-title">IMAGE 2</div>
                                                        <div class="tabulator-col-sorter">
                                                            <div class="tabulator-arrow"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tabulator-col-resize-handle"></div>
                                                <div class="tabulator-col-resize-handle prev"></div>
                                            </div>
                                            <div class="tabulator-col tabulator-sortable" role="columnheader"
                                                aria-sort="none" style="display: none; min-width: 40px; height: 44px;"
                                                tabulator-field="images" title="">
                                                <div class="tabulator-col-content">
                                                    <div class="tabulator-col-title-holder">
                                                        <div class="tabulator-col-title">IMAGE 3</div>
                                                        <div class="tabulator-col-sorter">
                                                            <div class="tabulator-arrow"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tabulator-col-resize-handle"></div>
                                                <div class="tabulator-col-resize-handle prev"></div>
                                            </div>
                                        </div>
                                        <div class="tabulator-frozen-rows-holder"></div>
                                    </div>
                                    <div class="tabulator-tableHolder" tabindex="0" style="height: 658px;">
                                        <div class="tabulator-table" style="padding-top: 0px; padding-bottom: 0px;">
                                            <div class="tabulator-row tabulator-selectable tabulator-row-odd"
                                                role="row" style="padding-left: 0px;">
                                                <div class="tabulator-cell tabulator-row-handle" role="gridcell"
                                                    style="width: 40px; text-align: center; height: 64px; display: none;"
                                                    title="">
                                                    <div class="tabulator-responsive-collapse-toggle open"><span
                                                            class="tabulator-responsive-collapse-toggle-open">+</span><span
                                                            class="tabulator-responsive-collapse-toggle-close">-</span>
                                                    </div>
                                                    <div class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    style="width: 312px; display: inline-flex; align-items: center; height: 64px;"
                                                    tabulator-field="name" title="">
                                                    <div>
                                                        <div class="font-medium whitespace-nowrap">Sony A7 III</div>
                                                        <div class="text-slate-500 text-xs whitespace-nowrap">
                                                            Photography</div>
                                                    </div>
                                                    <div class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    style="width: 312px; text-align: center; display: inline-flex; align-items: center; justify-content: center; height: 64px;"
                                                    tabulator-field="images" title="">
                                                    <div class="flex lg:justify-center">
                                                        <div class="intro-x w-10 h-10 image-fit">
                                                            <img alt="Midone - HTML Admin Template"
                                                                class="rounded-full" src="/dist/images/preview-7.jpg">
                                                        </div>
                                                        <div class="intro-x w-10 h-10 image-fit -ml-5">
                                                            <img alt="Midone - HTML Admin Template"
                                                                class="rounded-full"
                                                                src="/dist/images/preview-14.jpg">
                                                        </div>
                                                        <div class="intro-x w-10 h-10 image-fit -ml-5">
                                                            <img alt="Midone - HTML Admin Template"
                                                                class="rounded-full" src="/dist/images/preview-5.jpg">
                                                        </div>
                                                    </div>
                                                    <div class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    style="width: 312px; text-align: center; display: inline-flex; align-items: center; justify-content: center; height: 64px;"
                                                    tabulator-field="remaining_stock" title="">50<div
                                                        class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    style="width: 312px; text-align: center; display: inline-flex; align-items: center; justify-content: center; height: 64px;"
                                                    tabulator-field="status" title="">
                                                    <div class="flex items-center lg:justify-center text-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            icon-name="check-square" data-lucide="check-square"
                                                            class="lucide lucide-check-square w-4 h-4 mr-2">
                                                            <polyline points="9 11 12 14 22 4"></polyline>
                                                            <path
                                                                d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11">
                                                            </path>
                                                        </svg> Active
                                                    </div>
                                                    <div class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    style="width: 312px; text-align: center; display: inline-flex; align-items: center; justify-content: center; height: 64px;"
                                                    tabulator-field="actions" title="">
                                                    <div class="flex lg:justify-center items-center">
                                                        <a class="edit flex items-center mr-3" href="javascript:;">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                icon-name="check-square" data-lucide="check-square"
                                                                class="lucide lucide-check-square w-4 h-4 mr-1">
                                                                <polyline points="9 11 12 14 22 4"></polyline>
                                                                <path
                                                                    d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11">
                                                                </path>
                                                            </svg> Edit
                                                        </a>
                                                        <a class="delete flex items-center text-danger"
                                                            href="javascript:;">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                icon-name="trash-2" data-lucide="trash-2"
                                                                class="lucide lucide-trash-2 w-4 h-4 mr-1">
                                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                                <path
                                                                    d="M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a2 2 0 012-2h4a2 2 0 012 2v2">
                                                                </path>
                                                                <line x1="10" y1="11" x2="10"
                                                                    y2="17"></line>
                                                                <line x1="14" y1="11" x2="14"
                                                                    y2="17"></line>
                                                            </svg> Delete
                                                        </a>
                                                    </div>
                                                    <div class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell" tabulator-field="name"
                                                    style="display: none; height: 64px;" title="">Sony A7 III
                                                    <div class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    tabulator-field="category" style="display: none; height: 64px;"
                                                    title="">Photography<div
                                                        class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    tabulator-field="remaining_stock"
                                                    style="display: none; height: 64px;" title="">50<div
                                                        class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell" tabulator-field="status"
                                                    style="display: none; height: 64px;" title="">1<div
                                                        class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell" tabulator-field="images"
                                                    style="display: none; height: 64px;" title="">
                                                    preview-7.jpg,preview-14.jpg,preview-5.jpg<div
                                                        class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell" tabulator-field="images"
                                                    style="display: none; height: 64px;" title="">
                                                    preview-7.jpg,preview-14.jpg,preview-5.jpg<div
                                                        class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell" tabulator-field="images"
                                                    style="display: none; height: 64px;" title="">
                                                    preview-7.jpg,preview-14.jpg,preview-5.jpg<div
                                                        class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-responsive-collapse"></div>
                                            </div>
                                            <div class="tabulator-row tabulator-selectable tabulator-row-even"
                                                role="row" style="padding-left: 0px;">
                                                <div class="tabulator-cell tabulator-row-handle" role="gridcell"
                                                    style="width: 40px; text-align: center; height: 64px; display: none;"
                                                    title="">
                                                    <div class="tabulator-responsive-collapse-toggle open"><span
                                                            class="tabulator-responsive-collapse-toggle-open">+</span><span
                                                            class="tabulator-responsive-collapse-toggle-close">-</span>
                                                    </div>
                                                    <div class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    style="width: 312px; display: inline-flex; align-items: center; height: 64px;"
                                                    tabulator-field="name" title="">
                                                    <div>
                                                        <div class="font-medium whitespace-nowrap">Sony A7 III</div>
                                                        <div class="text-slate-500 text-xs whitespace-nowrap">
                                                            Photography</div>
                                                    </div>
                                                    <div class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    style="width: 312px; text-align: center; display: inline-flex; align-items: center; justify-content: center; height: 64px;"
                                                    tabulator-field="images" title="">
                                                    <div class="flex lg:justify-center">
                                                        <div class="intro-x w-10 h-10 image-fit">
                                                            <img alt="Midone - HTML Admin Template"
                                                                class="rounded-full" src="/dist/images/preview-4.jpg">
                                                        </div>
                                                        <div class="intro-x w-10 h-10 image-fit -ml-5">
                                                            <img alt="Midone - HTML Admin Template"
                                                                class="rounded-full"
                                                                src="/dist/images/preview-13.jpg">
                                                        </div>
                                                        <div class="intro-x w-10 h-10 image-fit -ml-5">
                                                            <img alt="Midone - HTML Admin Template"
                                                                class="rounded-full"
                                                                src="/dist/images/preview-13.jpg">
                                                        </div>
                                                    </div>
                                                    <div class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    style="width: 312px; text-align: center; display: inline-flex; align-items: center; justify-content: center; height: 64px;"
                                                    tabulator-field="remaining_stock" title="">50<div
                                                        class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    style="width: 312px; text-align: center; display: inline-flex; align-items: center; justify-content: center; height: 64px;"
                                                    tabulator-field="status" title="">
                                                    <div class="flex items-center lg:justify-center text-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            icon-name="check-square" data-lucide="check-square"
                                                            class="lucide lucide-check-square w-4 h-4 mr-2">
                                                            <polyline points="9 11 12 14 22 4"></polyline>
                                                            <path
                                                                d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11">
                                                            </path>
                                                        </svg> Active
                                                    </div>
                                                    <div class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    style="width: 312px; text-align: center; display: inline-flex; align-items: center; justify-content: center; height: 64px;"
                                                    tabulator-field="actions" title="">
                                                    <div class="flex lg:justify-center items-center">
                                                        <a class="edit flex items-center mr-3" href="javascript:;">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                icon-name="check-square" data-lucide="check-square"
                                                                class="lucide lucide-check-square w-4 h-4 mr-1">
                                                                <polyline points="9 11 12 14 22 4"></polyline>
                                                                <path
                                                                    d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11">
                                                                </path>
                                                            </svg> Edit
                                                        </a>
                                                        <a class="delete flex items-center text-danger"
                                                            href="javascript:;">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                icon-name="trash-2" data-lucide="trash-2"
                                                                class="lucide lucide-trash-2 w-4 h-4 mr-1">
                                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                                <path
                                                                    d="M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a2 2 0 012-2h4a2 2 0 012 2v2">
                                                                </path>
                                                                <line x1="10" y1="11" x2="10"
                                                                    y2="17"></line>
                                                                <line x1="14" y1="11" x2="14"
                                                                    y2="17"></line>
                                                            </svg> Delete
                                                        </a>
                                                    </div>
                                                    <div class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell" tabulator-field="name"
                                                    style="display: none; height: 64px;" title="">Sony A7 III
                                                    <div class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    tabulator-field="category" style="display: none; height: 64px;"
                                                    title="">Photography<div
                                                        class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    tabulator-field="remaining_stock"
                                                    style="display: none; height: 64px;" title="">50<div
                                                        class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell" tabulator-field="status"
                                                    style="display: none; height: 64px;" title="">1<div
                                                        class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell" tabulator-field="images"
                                                    style="display: none; height: 64px;" title="">
                                                    preview-4.jpg,preview-13.jpg,preview-13.jpg<div
                                                        class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell" tabulator-field="images"
                                                    style="display: none; height: 64px;" title="">
                                                    preview-4.jpg,preview-13.jpg,preview-13.jpg<div
                                                        class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell" tabulator-field="images"
                                                    style="display: none; height: 64px;" title="">
                                                    preview-4.jpg,preview-13.jpg,preview-13.jpg<div
                                                        class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-responsive-collapse"></div>
                                            </div>
                                            <div class="tabulator-row tabulator-selectable tabulator-row-odd"
                                                role="row" style="padding-left: 0px;">
                                                <div class="tabulator-cell tabulator-row-handle" role="gridcell"
                                                    style="width: 40px; text-align: center; height: 64px; display: none;"
                                                    title="">
                                                    <div class="tabulator-responsive-collapse-toggle open"><span
                                                            class="tabulator-responsive-collapse-toggle-open">+</span><span
                                                            class="tabulator-responsive-collapse-toggle-close">-</span>
                                                    </div>
                                                    <div class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    style="width: 312px; display: inline-flex; align-items: center; height: 64px;"
                                                    tabulator-field="name" title="">
                                                    <div>
                                                        <div class="font-medium whitespace-nowrap">Sony A7 III</div>
                                                        <div class="text-slate-500 text-xs whitespace-nowrap">
                                                            Photography</div>
                                                    </div>
                                                    <div class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    style="width: 312px; text-align: center; display: inline-flex; align-items: center; justify-content: center; height: 64px;"
                                                    tabulator-field="images" title="">
                                                    <div class="flex lg:justify-center">
                                                        <div class="intro-x w-10 h-10 image-fit">
                                                            <img alt="Midone - HTML Admin Template"
                                                                class="rounded-full"
                                                                src="/dist/images/preview-15.jpg">
                                                        </div>
                                                        <div class="intro-x w-10 h-10 image-fit -ml-5">
                                                            <img alt="Midone - HTML Admin Template"
                                                                class="rounded-full" src="/dist/images/preview-7.jpg">
                                                        </div>
                                                        <div class="intro-x w-10 h-10 image-fit -ml-5">
                                                            <img alt="Midone - HTML Admin Template"
                                                                class="rounded-full" src="/dist/images/preview-1.jpg">
                                                        </div>
                                                    </div>
                                                    <div class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    style="width: 312px; text-align: center; display: inline-flex; align-items: center; justify-content: center; height: 64px;"
                                                    tabulator-field="remaining_stock" title="">50<div
                                                        class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    style="width: 312px; text-align: center; display: inline-flex; align-items: center; justify-content: center; height: 64px;"
                                                    tabulator-field="status" title="">
                                                    <div class="flex items-center lg:justify-center text-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            icon-name="check-square" data-lucide="check-square"
                                                            class="lucide lucide-check-square w-4 h-4 mr-2">
                                                            <polyline points="9 11 12 14 22 4"></polyline>
                                                            <path
                                                                d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11">
                                                            </path>
                                                        </svg> Active
                                                    </div>
                                                    <div class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    style="width: 312px; text-align: center; display: inline-flex; align-items: center; justify-content: center; height: 64px;"
                                                    tabulator-field="actions" title="">
                                                    <div class="flex lg:justify-center items-center">
                                                        <a class="edit flex items-center mr-3" href="javascript:;">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                icon-name="check-square" data-lucide="check-square"
                                                                class="lucide lucide-check-square w-4 h-4 mr-1">
                                                                <polyline points="9 11 12 14 22 4"></polyline>
                                                                <path
                                                                    d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11">
                                                                </path>
                                                            </svg> Edit
                                                        </a>
                                                        <a class="delete flex items-center text-danger"
                                                            href="javascript:;">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                icon-name="trash-2" data-lucide="trash-2"
                                                                class="lucide lucide-trash-2 w-4 h-4 mr-1">
                                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                                <path
                                                                    d="M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a2 2 0 012-2h4a2 2 0 012 2v2">
                                                                </path>
                                                                <line x1="10" y1="11" x2="10"
                                                                    y2="17"></line>
                                                                <line x1="14" y1="11" x2="14"
                                                                    y2="17"></line>
                                                            </svg> Delete
                                                        </a>
                                                    </div>
                                                    <div class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell" tabulator-field="name"
                                                    style="display: none; height: 64px;" title="">Sony A7 III
                                                    <div class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    tabulator-field="category" style="display: none; height: 64px;"
                                                    title="">Photography<div
                                                        class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    tabulator-field="remaining_stock"
                                                    style="display: none; height: 64px;" title="">50<div
                                                        class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell" tabulator-field="status"
                                                    style="display: none; height: 64px;" title="">1<div
                                                        class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell" tabulator-field="images"
                                                    style="display: none; height: 64px;" title="">
                                                    preview-15.jpg,preview-7.jpg,preview-1.jpg<div
                                                        class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell" tabulator-field="images"
                                                    style="display: none; height: 64px;" title="">
                                                    preview-15.jpg,preview-7.jpg,preview-1.jpg<div
                                                        class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell" tabulator-field="images"
                                                    style="display: none; height: 64px;" title="">
                                                    preview-15.jpg,preview-7.jpg,preview-1.jpg<div
                                                        class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-responsive-collapse"></div>
                                            </div>
                                            <div class="tabulator-row tabulator-selectable tabulator-row-even"
                                                role="row" style="padding-left: 0px;">
                                                <div class="tabulator-cell tabulator-row-handle" role="gridcell"
                                                    style="width: 40px; text-align: center; height: 64px; display: none;"
                                                    title="">
                                                    <div class="tabulator-responsive-collapse-toggle open"><span
                                                            class="tabulator-responsive-collapse-toggle-open">+</span><span
                                                            class="tabulator-responsive-collapse-toggle-close">-</span>
                                                    </div>
                                                    <div class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    style="width: 312px; display: inline-flex; align-items: center; height: 64px;"
                                                    tabulator-field="name" title="">
                                                    <div>
                                                        <div class="font-medium whitespace-nowrap">Samsung Q90 QLED TV
                                                        </div>
                                                        <div class="text-slate-500 text-xs whitespace-nowrap">
                                                            Electronic</div>
                                                    </div>
                                                    <div class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    style="width: 312px; text-align: center; display: inline-flex; align-items: center; justify-content: center; height: 64px;"
                                                    tabulator-field="images" title="">
                                                    <div class="flex lg:justify-center">
                                                        <div class="intro-x w-10 h-10 image-fit">
                                                            <img alt="Midone - HTML Admin Template"
                                                                class="rounded-full"
                                                                src="/dist/images/preview-10.jpg">
                                                        </div>
                                                        <div class="intro-x w-10 h-10 image-fit -ml-5">
                                                            <img alt="Midone - HTML Admin Template"
                                                                class="rounded-full" src="/dist/images/preview-4.jpg">
                                                        </div>
                                                        <div class="intro-x w-10 h-10 image-fit -ml-5">
                                                            <img alt="Midone - HTML Admin Template"
                                                                class="rounded-full" src="/dist/images/preview-5.jpg">
                                                        </div>
                                                    </div>
                                                    <div class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    style="width: 312px; text-align: center; display: inline-flex; align-items: center; justify-content: center; height: 64px;"
                                                    tabulator-field="remaining_stock" title="">70<div
                                                        class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    style="width: 312px; text-align: center; display: inline-flex; align-items: center; justify-content: center; height: 64px;"
                                                    tabulator-field="status" title="">
                                                    <div class="flex items-center lg:justify-center text-danger">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            icon-name="check-square" data-lucide="check-square"
                                                            class="lucide lucide-check-square w-4 h-4 mr-2">
                                                            <polyline points="9 11 12 14 22 4"></polyline>
                                                            <path
                                                                d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11">
                                                            </path>
                                                        </svg> Inactive
                                                    </div>
                                                    <div class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    style="width: 312px; text-align: center; display: inline-flex; align-items: center; justify-content: center; height: 64px;"
                                                    tabulator-field="actions" title="">
                                                    <div class="flex lg:justify-center items-center">
                                                        <a class="edit flex items-center mr-3" href="javascript:;">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                icon-name="check-square" data-lucide="check-square"
                                                                class="lucide lucide-check-square w-4 h-4 mr-1">
                                                                <polyline points="9 11 12 14 22 4"></polyline>
                                                                <path
                                                                    d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11">
                                                                </path>
                                                            </svg> Edit
                                                        </a>
                                                        <a class="delete flex items-center text-danger"
                                                            href="javascript:;">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                icon-name="trash-2" data-lucide="trash-2"
                                                                class="lucide lucide-trash-2 w-4 h-4 mr-1">
                                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                                <path
                                                                    d="M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a2 2 0 012-2h4a2 2 0 012 2v2">
                                                                </path>
                                                                <line x1="10" y1="11" x2="10"
                                                                    y2="17"></line>
                                                                <line x1="14" y1="11" x2="14"
                                                                    y2="17"></line>
                                                            </svg> Delete
                                                        </a>
                                                    </div>
                                                    <div class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell" tabulator-field="name"
                                                    style="display: none; height: 64px;" title="">Samsung Q90
                                                    QLED TV<div class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    tabulator-field="category" style="display: none; height: 64px;"
                                                    title="">Electronic<div class="tabulator-col-resize-handle">
                                                    </div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    tabulator-field="remaining_stock"
                                                    style="display: none; height: 64px;" title="">70<div
                                                        class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell" tabulator-field="status"
                                                    style="display: none; height: 64px;" title="">0<div
                                                        class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell" tabulator-field="images"
                                                    style="display: none; height: 64px;" title="">
                                                    preview-10.jpg,preview-4.jpg,preview-5.jpg<div
                                                        class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell" tabulator-field="images"
                                                    style="display: none; height: 64px;" title="">
                                                    preview-10.jpg,preview-4.jpg,preview-5.jpg<div
                                                        class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell" tabulator-field="images"
                                                    style="display: none; height: 64px;" title="">
                                                    preview-10.jpg,preview-4.jpg,preview-5.jpg<div
                                                        class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-responsive-collapse"></div>
                                            </div>
                                            <div class="tabulator-row tabulator-selectable tabulator-row-odd"
                                                role="row" style="padding-left: 0px;">
                                                <div class="tabulator-cell tabulator-row-handle" role="gridcell"
                                                    style="width: 40px; text-align: center; height: 64px; display: none;"
                                                    title="">
                                                    <div class="tabulator-responsive-collapse-toggle open"><span
                                                            class="tabulator-responsive-collapse-toggle-open">+</span><span
                                                            class="tabulator-responsive-collapse-toggle-close">-</span>
                                                    </div>
                                                    <div class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    style="width: 312px; display: inline-flex; align-items: center; height: 64px;"
                                                    tabulator-field="name" title="">
                                                    <div>
                                                        <div class="font-medium whitespace-nowrap">Samsung Q90 QLED TV
                                                        </div>
                                                        <div class="text-slate-500 text-xs whitespace-nowrap">
                                                            Electronic</div>
                                                    </div>
                                                    <div class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    style="width: 312px; text-align: center; display: inline-flex; align-items: center; justify-content: center; height: 64px;"
                                                    tabulator-field="images" title="">
                                                    <div class="flex lg:justify-center">
                                                        <div class="intro-x w-10 h-10 image-fit">
                                                            <img alt="Midone - HTML Admin Template"
                                                                class="rounded-full" src="/dist/images/preview-6.jpg">
                                                        </div>
                                                        <div class="intro-x w-10 h-10 image-fit -ml-5">
                                                            <img alt="Midone - HTML Admin Template"
                                                                class="rounded-full"
                                                                src="/dist/images/preview-11.jpg">
                                                        </div>
                                                        <div class="intro-x w-10 h-10 image-fit -ml-5">
                                                            <img alt="Midone - HTML Admin Template"
                                                                class="rounded-full" src="/dist/images/preview-1.jpg">
                                                        </div>
                                                    </div>
                                                    <div class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    style="width: 312px; text-align: center; display: inline-flex; align-items: center; justify-content: center; height: 64px;"
                                                    tabulator-field="remaining_stock" title="">195<div
                                                        class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    style="width: 312px; text-align: center; display: inline-flex; align-items: center; justify-content: center; height: 64px;"
                                                    tabulator-field="status" title="">
                                                    <div class="flex items-center lg:justify-center text-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            icon-name="check-square" data-lucide="check-square"
                                                            class="lucide lucide-check-square w-4 h-4 mr-2">
                                                            <polyline points="9 11 12 14 22 4"></polyline>
                                                            <path
                                                                d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11">
                                                            </path>
                                                        </svg> Active
                                                    </div>
                                                    <div class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    style="width: 312px; text-align: center; display: inline-flex; align-items: center; justify-content: center; height: 64px;"
                                                    tabulator-field="actions" title="">
                                                    <div class="flex lg:justify-center items-center">
                                                        <a class="edit flex items-center mr-3" href="javascript:;">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                icon-name="check-square" data-lucide="check-square"
                                                                class="lucide lucide-check-square w-4 h-4 mr-1">
                                                                <polyline points="9 11 12 14 22 4"></polyline>
                                                                <path
                                                                    d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11">
                                                                </path>
                                                            </svg> Edit
                                                        </a>
                                                        <a class="delete flex items-center text-danger"
                                                            href="javascript:;">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                icon-name="trash-2" data-lucide="trash-2"
                                                                class="lucide lucide-trash-2 w-4 h-4 mr-1">
                                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                                <path
                                                                    d="M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a2 2 0 012-2h4a2 2 0 012 2v2">
                                                                </path>
                                                                <line x1="10" y1="11" x2="10"
                                                                    y2="17"></line>
                                                                <line x1="14" y1="11" x2="14"
                                                                    y2="17"></line>
                                                            </svg> Delete
                                                        </a>
                                                    </div>
                                                    <div class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell" tabulator-field="name"
                                                    style="display: none; height: 64px;" title="">Samsung Q90
                                                    QLED TV<div class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    tabulator-field="category" style="display: none; height: 64px;"
                                                    title="">Electronic<div
                                                        class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    tabulator-field="remaining_stock"
                                                    style="display: none; height: 64px;" title="">195<div
                                                        class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    tabulator-field="status" style="display: none; height: 64px;"
                                                    title="">1<div class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    tabulator-field="images" style="display: none; height: 64px;"
                                                    title="">preview-6.jpg,preview-11.jpg,preview-1.jpg<div
                                                        class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    tabulator-field="images" style="display: none; height: 64px;"
                                                    title="">preview-6.jpg,preview-11.jpg,preview-1.jpg<div
                                                        class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    tabulator-field="images" style="display: none; height: 64px;"
                                                    title="">preview-6.jpg,preview-11.jpg,preview-1.jpg<div
                                                        class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-responsive-collapse"></div>
                                            </div>
                                            <div class="tabulator-row tabulator-selectable tabulator-row-even"
                                                role="row" style="padding-left: 0px;">
                                                <div class="tabulator-cell tabulator-row-handle" role="gridcell"
                                                    style="width: 40px; text-align: center; height: 64px; display: none;"
                                                    title="">
                                                    <div class="tabulator-responsive-collapse-toggle open"><span
                                                            class="tabulator-responsive-collapse-toggle-open">+</span><span
                                                            class="tabulator-responsive-collapse-toggle-close">-</span>
                                                    </div>
                                                    <div class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    style="width: 312px; display: inline-flex; align-items: center; height: 64px;"
                                                    tabulator-field="name" title="">
                                                    <div>
                                                        <div class="font-medium whitespace-nowrap">Samsung Galaxy S20
                                                            Ultra</div>
                                                        <div class="text-slate-500 text-xs whitespace-nowrap">
                                                            Smartphone &amp; Tablet</div>
                                                    </div>
                                                    <div class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    style="width: 312px; text-align: center; display: inline-flex; align-items: center; justify-content: center; height: 64px;"
                                                    tabulator-field="images" title="">
                                                    <div class="flex lg:justify-center">
                                                        <div class="intro-x w-10 h-10 image-fit">
                                                            <img alt="Midone - HTML Admin Template"
                                                                class="rounded-full"
                                                                src="/dist/images/preview-12.jpg">
                                                        </div>
                                                        <div class="intro-x w-10 h-10 image-fit -ml-5">
                                                            <img alt="Midone - HTML Admin Template"
                                                                class="rounded-full"
                                                                src="/dist/images/preview-10.jpg">
                                                        </div>
                                                        <div class="intro-x w-10 h-10 image-fit -ml-5">
                                                            <img alt="Midone - HTML Admin Template"
                                                                class="rounded-full"
                                                                src="/dist/images/preview-5.jpg">
                                                        </div>
                                                    </div>
                                                    <div class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    style="width: 312px; text-align: center; display: inline-flex; align-items: center; justify-content: center; height: 64px;"
                                                    tabulator-field="remaining_stock" title="">128<div
                                                        class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    style="width: 312px; text-align: center; display: inline-flex; align-items: center; justify-content: center; height: 64px;"
                                                    tabulator-field="status" title="">
                                                    <div class="flex items-center lg:justify-center text-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            icon-name="check-square" data-lucide="check-square"
                                                            class="lucide lucide-check-square w-4 h-4 mr-2">
                                                            <polyline points="9 11 12 14 22 4"></polyline>
                                                            <path
                                                                d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11">
                                                            </path>
                                                        </svg> Active
                                                    </div>
                                                    <div class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    style="width: 312px; text-align: center; display: inline-flex; align-items: center; justify-content: center; height: 64px;"
                                                    tabulator-field="actions" title="">
                                                    <div class="flex lg:justify-center items-center">
                                                        <a class="edit flex items-center mr-3" href="javascript:;">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                icon-name="check-square" data-lucide="check-square"
                                                                class="lucide lucide-check-square w-4 h-4 mr-1">
                                                                <polyline points="9 11 12 14 22 4"></polyline>
                                                                <path
                                                                    d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11">
                                                                </path>
                                                            </svg> Edit
                                                        </a>
                                                        <a class="delete flex items-center text-danger"
                                                            href="javascript:;">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                icon-name="trash-2" data-lucide="trash-2"
                                                                class="lucide lucide-trash-2 w-4 h-4 mr-1">
                                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                                <path
                                                                    d="M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a2 2 0 012-2h4a2 2 0 012 2v2">
                                                                </path>
                                                                <line x1="10" y1="11" x2="10"
                                                                    y2="17"></line>
                                                                <line x1="14" y1="11" x2="14"
                                                                    y2="17"></line>
                                                            </svg> Delete
                                                        </a>
                                                    </div>
                                                    <div class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell" tabulator-field="name"
                                                    style="display: none; height: 64px;" title="">Samsung
                                                    Galaxy S20 Ultra<div class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    tabulator-field="category" style="display: none; height: 64px;"
                                                    title="">Smartphone &amp; Tablet<div
                                                        class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    tabulator-field="remaining_stock"
                                                    style="display: none; height: 64px;" title="">128<div
                                                        class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    tabulator-field="status" style="display: none; height: 64px;"
                                                    title="">1<div class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    tabulator-field="images" style="display: none; height: 64px;"
                                                    title="">preview-12.jpg,preview-10.jpg,preview-5.jpg<div
                                                        class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    tabulator-field="images" style="display: none; height: 64px;"
                                                    title="">preview-12.jpg,preview-10.jpg,preview-5.jpg<div
                                                        class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    tabulator-field="images" style="display: none; height: 64px;"
                                                    title="">preview-12.jpg,preview-10.jpg,preview-5.jpg<div
                                                        class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-responsive-collapse"></div>
                                            </div>
                                            <div class="tabulator-row tabulator-selectable tabulator-row-odd"
                                                role="row" style="padding-left: 0px;">
                                                <div class="tabulator-cell tabulator-row-handle" role="gridcell"
                                                    style="width: 40px; text-align: center; height: 64px; display: none;"
                                                    title="">
                                                    <div class="tabulator-responsive-collapse-toggle open"><span
                                                            class="tabulator-responsive-collapse-toggle-open">+</span><span
                                                            class="tabulator-responsive-collapse-toggle-close">-</span>
                                                    </div>
                                                    <div class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    style="width: 312px; display: inline-flex; align-items: center; height: 64px;"
                                                    tabulator-field="name" title="">
                                                    <div>
                                                        <div class="font-medium whitespace-nowrap">Samsung Galaxy S20
                                                            Ultra</div>
                                                        <div class="text-slate-500 text-xs whitespace-nowrap">
                                                            Smartphone &amp; Tablet</div>
                                                    </div>
                                                    <div class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    style="width: 312px; text-align: center; display: inline-flex; align-items: center; justify-content: center; height: 64px;"
                                                    tabulator-field="images" title="">
                                                    <div class="flex lg:justify-center">
                                                        <div class="intro-x w-10 h-10 image-fit">
                                                            <img alt="Midone - HTML Admin Template"
                                                                class="rounded-full"
                                                                src="/dist/images/preview-15.jpg">
                                                        </div>
                                                        <div class="intro-x w-10 h-10 image-fit -ml-5">
                                                            <img alt="Midone - HTML Admin Template"
                                                                class="rounded-full"
                                                                src="/dist/images/preview-3.jpg">
                                                        </div>
                                                        <div class="intro-x w-10 h-10 image-fit -ml-5">
                                                            <img alt="Midone - HTML Admin Template"
                                                                class="rounded-full"
                                                                src="/dist/images/preview-9.jpg">
                                                        </div>
                                                    </div>
                                                    <div class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    style="width: 312px; text-align: center; display: inline-flex; align-items: center; justify-content: center; height: 64px;"
                                                    tabulator-field="remaining_stock" title="">139<div
                                                        class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    style="width: 312px; text-align: center; display: inline-flex; align-items: center; justify-content: center; height: 64px;"
                                                    tabulator-field="status" title="">
                                                    <div class="flex items-center lg:justify-center text-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            icon-name="check-square" data-lucide="check-square"
                                                            class="lucide lucide-check-square w-4 h-4 mr-2">
                                                            <polyline points="9 11 12 14 22 4"></polyline>
                                                            <path
                                                                d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11">
                                                            </path>
                                                        </svg> Active
                                                    </div>
                                                    <div class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    style="width: 312px; text-align: center; display: inline-flex; align-items: center; justify-content: center; height: 64px;"
                                                    tabulator-field="actions" title="">
                                                    <div class="flex lg:justify-center items-center">
                                                        <a class="edit flex items-center mr-3" href="javascript:;">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                icon-name="check-square" data-lucide="check-square"
                                                                class="lucide lucide-check-square w-4 h-4 mr-1">
                                                                <polyline points="9 11 12 14 22 4"></polyline>
                                                                <path
                                                                    d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11">
                                                                </path>
                                                            </svg> Edit
                                                        </a>
                                                        <a class="delete flex items-center text-danger"
                                                            href="javascript:;">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                icon-name="trash-2" data-lucide="trash-2"
                                                                class="lucide lucide-trash-2 w-4 h-4 mr-1">
                                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                                <path
                                                                    d="M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a2 2 0 012-2h4a2 2 0 012 2v2">
                                                                </path>
                                                                <line x1="10" y1="11" x2="10"
                                                                    y2="17"></line>
                                                                <line x1="14" y1="11" x2="14"
                                                                    y2="17"></line>
                                                            </svg> Delete
                                                        </a>
                                                    </div>
                                                    <div class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell" tabulator-field="name"
                                                    style="display: none; height: 64px;" title="">Samsung
                                                    Galaxy S20 Ultra<div class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    tabulator-field="category" style="display: none; height: 64px;"
                                                    title="">Smartphone &amp; Tablet<div
                                                        class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    tabulator-field="remaining_stock"
                                                    style="display: none; height: 64px;" title="">139<div
                                                        class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    tabulator-field="status" style="display: none; height: 64px;"
                                                    title="">1<div class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    tabulator-field="images" style="display: none; height: 64px;"
                                                    title="">preview-15.jpg,preview-3.jpg,preview-9.jpg<div
                                                        class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    tabulator-field="images" style="display: none; height: 64px;"
                                                    title="">preview-15.jpg,preview-3.jpg,preview-9.jpg<div
                                                        class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    tabulator-field="images" style="display: none; height: 64px;"
                                                    title="">preview-15.jpg,preview-3.jpg,preview-9.jpg<div
                                                        class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-responsive-collapse"></div>
                                            </div>
                                            <div class="tabulator-row tabulator-selectable tabulator-row-even"
                                                role="row" style="padding-left: 0px;">
                                                <div class="tabulator-cell tabulator-row-handle" role="gridcell"
                                                    style="width: 40px; text-align: center; height: 64px; display: none;"
                                                    title="">
                                                    <div class="tabulator-responsive-collapse-toggle open"><span
                                                            class="tabulator-responsive-collapse-toggle-open">+</span><span
                                                            class="tabulator-responsive-collapse-toggle-close">-</span>
                                                    </div>
                                                    <div class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    style="width: 312px; display: inline-flex; align-items: center; height: 64px;"
                                                    tabulator-field="name" title="">
                                                    <div>
                                                        <div class="font-medium whitespace-nowrap">Oppo Find X2 Pro
                                                        </div>
                                                        <div class="text-slate-500 text-xs whitespace-nowrap">
                                                            Smartphone &amp; Tablet</div>
                                                    </div>
                                                    <div class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    style="width: 312px; text-align: center; display: inline-flex; align-items: center; justify-content: center; height: 64px;"
                                                    tabulator-field="images" title="">
                                                    <div class="flex lg:justify-center">
                                                        <div class="intro-x w-10 h-10 image-fit">
                                                            <img alt="Midone - HTML Admin Template"
                                                                class="rounded-full"
                                                                src="/dist/images/preview-5.jpg">
                                                        </div>
                                                        <div class="intro-x w-10 h-10 image-fit -ml-5">
                                                            <img alt="Midone - HTML Admin Template"
                                                                class="rounded-full"
                                                                src="/dist/images/preview-6.jpg">
                                                        </div>
                                                        <div class="intro-x w-10 h-10 image-fit -ml-5">
                                                            <img alt="Midone - HTML Admin Template"
                                                                class="rounded-full"
                                                                src="/dist/images/preview-7.jpg">
                                                        </div>
                                                    </div>
                                                    <div class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    style="width: 312px; text-align: center; display: inline-flex; align-items: center; justify-content: center; height: 64px;"
                                                    tabulator-field="remaining_stock" title="">97<div
                                                        class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    style="width: 312px; text-align: center; display: inline-flex; align-items: center; justify-content: center; height: 64px;"
                                                    tabulator-field="status" title="">
                                                    <div class="flex items-center lg:justify-center text-danger">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            icon-name="check-square" data-lucide="check-square"
                                                            class="lucide lucide-check-square w-4 h-4 mr-2">
                                                            <polyline points="9 11 12 14 22 4"></polyline>
                                                            <path
                                                                d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11">
                                                            </path>
                                                        </svg> Inactive
                                                    </div>
                                                    <div class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    style="width: 312px; text-align: center; display: inline-flex; align-items: center; justify-content: center; height: 64px;"
                                                    tabulator-field="actions" title="">
                                                    <div class="flex lg:justify-center items-center">
                                                        <a class="edit flex items-center mr-3" href="javascript:;">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                icon-name="check-square" data-lucide="check-square"
                                                                class="lucide lucide-check-square w-4 h-4 mr-1">
                                                                <polyline points="9 11 12 14 22 4"></polyline>
                                                                <path
                                                                    d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11">
                                                                </path>
                                                            </svg> Edit
                                                        </a>
                                                        <a class="delete flex items-center text-danger"
                                                            href="javascript:;">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                icon-name="trash-2" data-lucide="trash-2"
                                                                class="lucide lucide-trash-2 w-4 h-4 mr-1">
                                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                                <path
                                                                    d="M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a2 2 0 012-2h4a2 2 0 012 2v2">
                                                                </path>
                                                                <line x1="10" y1="11" x2="10"
                                                                    y2="17"></line>
                                                                <line x1="14" y1="11" x2="14"
                                                                    y2="17"></line>
                                                            </svg> Delete
                                                        </a>
                                                    </div>
                                                    <div class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell" tabulator-field="name"
                                                    style="display: none; height: 64px;" title="">Oppo Find X2
                                                    Pro<div class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    tabulator-field="category" style="display: none; height: 64px;"
                                                    title="">Smartphone &amp; Tablet<div
                                                        class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    tabulator-field="remaining_stock"
                                                    style="display: none; height: 64px;" title="">97<div
                                                        class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    tabulator-field="status" style="display: none; height: 64px;"
                                                    title="">0<div class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    tabulator-field="images" style="display: none; height: 64px;"
                                                    title="">preview-5.jpg,preview-6.jpg,preview-7.jpg<div
                                                        class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    tabulator-field="images" style="display: none; height: 64px;"
                                                    title="">preview-5.jpg,preview-6.jpg,preview-7.jpg<div
                                                        class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    tabulator-field="images" style="display: none; height: 64px;"
                                                    title="">preview-5.jpg,preview-6.jpg,preview-7.jpg<div
                                                        class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-responsive-collapse"></div>
                                            </div>
                                            <div class="tabulator-row tabulator-selectable tabulator-row-odd"
                                                role="row" style="padding-left: 0px;">
                                                <div class="tabulator-cell tabulator-row-handle" role="gridcell"
                                                    style="width: 40px; text-align: center; height: 64px; display: none;"
                                                    title="">
                                                    <div class="tabulator-responsive-collapse-toggle open"><span
                                                            class="tabulator-responsive-collapse-toggle-open">+</span><span
                                                            class="tabulator-responsive-collapse-toggle-close">-</span>
                                                    </div>
                                                    <div class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    style="width: 312px; display: inline-flex; align-items: center; height: 64px;"
                                                    tabulator-field="name" title="">
                                                    <div>
                                                        <div class="font-medium whitespace-nowrap">Oppo Find X2 Pro
                                                        </div>
                                                        <div class="text-slate-500 text-xs whitespace-nowrap">
                                                            Smartphone &amp; Tablet</div>
                                                    </div>
                                                    <div class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    style="width: 312px; text-align: center; display: inline-flex; align-items: center; justify-content: center; height: 64px;"
                                                    tabulator-field="images" title="">
                                                    <div class="flex lg:justify-center">
                                                        <div class="intro-x w-10 h-10 image-fit">
                                                            <img alt="Midone - HTML Admin Template"
                                                                class="rounded-full"
                                                                src="/dist/images/preview-2.jpg">
                                                        </div>
                                                        <div class="intro-x w-10 h-10 image-fit -ml-5">
                                                            <img alt="Midone - HTML Admin Template"
                                                                class="rounded-full"
                                                                src="/dist/images/preview-2.jpg">
                                                        </div>
                                                        <div class="intro-x w-10 h-10 image-fit -ml-5">
                                                            <img alt="Midone - HTML Admin Template"
                                                                class="rounded-full"
                                                                src="/dist/images/preview-6.jpg">
                                                        </div>
                                                    </div>
                                                    <div class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    style="width: 312px; text-align: center; display: inline-flex; align-items: center; justify-content: center; height: 64px;"
                                                    tabulator-field="remaining_stock" title="">50<div
                                                        class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    style="width: 312px; text-align: center; display: inline-flex; align-items: center; justify-content: center; height: 64px;"
                                                    tabulator-field="status" title="">
                                                    <div class="flex items-center lg:justify-center text-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            icon-name="check-square" data-lucide="check-square"
                                                            class="lucide lucide-check-square w-4 h-4 mr-2">
                                                            <polyline points="9 11 12 14 22 4"></polyline>
                                                            <path
                                                                d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11">
                                                            </path>
                                                        </svg> Active
                                                    </div>
                                                    <div class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    style="width: 312px; text-align: center; display: inline-flex; align-items: center; justify-content: center; height: 64px;"
                                                    tabulator-field="actions" title="">
                                                    <div class="flex lg:justify-center items-center">
                                                        <a class="edit flex items-center mr-3" href="javascript:;">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                icon-name="check-square" data-lucide="check-square"
                                                                class="lucide lucide-check-square w-4 h-4 mr-1">
                                                                <polyline points="9 11 12 14 22 4"></polyline>
                                                                <path
                                                                    d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11">
                                                                </path>
                                                            </svg> Edit
                                                        </a>
                                                        <a class="delete flex items-center text-danger"
                                                            href="javascript:;">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                icon-name="trash-2" data-lucide="trash-2"
                                                                class="lucide lucide-trash-2 w-4 h-4 mr-1">
                                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                                <path
                                                                    d="M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a2 2 0 012-2h4a2 2 0 012 2v2">
                                                                </path>
                                                                <line x1="10" y1="11" x2="10"
                                                                    y2="17"></line>
                                                                <line x1="14" y1="11" x2="14"
                                                                    y2="17"></line>
                                                            </svg> Delete
                                                        </a>
                                                    </div>
                                                    <div class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell" tabulator-field="name"
                                                    style="display: none; height: 64px;" title="">Oppo Find X2
                                                    Pro<div class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    tabulator-field="category" style="display: none; height: 64px;"
                                                    title="">Smartphone &amp; Tablet<div
                                                        class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    tabulator-field="remaining_stock"
                                                    style="display: none; height: 64px;" title="">50<div
                                                        class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    tabulator-field="status" style="display: none; height: 64px;"
                                                    title="">1<div class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    tabulator-field="images" style="display: none; height: 64px;"
                                                    title="">preview-2.jpg,preview-2.jpg,preview-6.jpg<div
                                                        class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    tabulator-field="images" style="display: none; height: 64px;"
                                                    title="">preview-2.jpg,preview-2.jpg,preview-6.jpg<div
                                                        class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    tabulator-field="images" style="display: none; height: 64px;"
                                                    title="">preview-2.jpg,preview-2.jpg,preview-6.jpg<div
                                                        class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-responsive-collapse"></div>
                                            </div>
                                            <div class="tabulator-row tabulator-selectable tabulator-row-even"
                                                role="row" style="padding-left: 0px;">
                                                <div class="tabulator-cell tabulator-row-handle" role="gridcell"
                                                    style="width: 40px; text-align: center; height: 64px; display: none;"
                                                    title="">
                                                    <div class="tabulator-responsive-collapse-toggle open"><span
                                                            class="tabulator-responsive-collapse-toggle-open">+</span><span
                                                            class="tabulator-responsive-collapse-toggle-close">-</span>
                                                    </div>
                                                    <div class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    style="width: 312px; display: inline-flex; align-items: center; height: 64px;"
                                                    tabulator-field="name" title="">
                                                    <div>
                                                        <div class="font-medium whitespace-nowrap">Nikon Z6</div>
                                                        <div class="text-slate-500 text-xs whitespace-nowrap">
                                                            Photography</div>
                                                    </div>
                                                    <div class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    style="width: 312px; text-align: center; display: inline-flex; align-items: center; justify-content: center; height: 64px;"
                                                    tabulator-field="images" title="">
                                                    <div class="flex lg:justify-center">
                                                        <div class="intro-x w-10 h-10 image-fit">
                                                            <img alt="Midone - HTML Admin Template"
                                                                class="rounded-full"
                                                                src="/dist/images/preview-15.jpg">
                                                        </div>
                                                        <div class="intro-x w-10 h-10 image-fit -ml-5">
                                                            <img alt="Midone - HTML Admin Template"
                                                                class="rounded-full"
                                                                src="/dist/images/preview-5.jpg">
                                                        </div>
                                                        <div class="intro-x w-10 h-10 image-fit -ml-5">
                                                            <img alt="Midone - HTML Admin Template"
                                                                class="rounded-full"
                                                                src="/dist/images/preview-10.jpg">
                                                        </div>
                                                    </div>
                                                    <div class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    style="width: 312px; text-align: center; display: inline-flex; align-items: center; justify-content: center; height: 64px;"
                                                    tabulator-field="remaining_stock" title="">100<div
                                                        class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    style="width: 312px; text-align: center; display: inline-flex; align-items: center; justify-content: center; height: 64px;"
                                                    tabulator-field="status" title="">
                                                    <div class="flex items-center lg:justify-center text-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            icon-name="check-square" data-lucide="check-square"
                                                            class="lucide lucide-check-square w-4 h-4 mr-2">
                                                            <polyline points="9 11 12 14 22 4"></polyline>
                                                            <path
                                                                d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11">
                                                            </path>
                                                        </svg> Active
                                                    </div>
                                                    <div class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    style="width: 312px; text-align: center; display: inline-flex; align-items: center; justify-content: center; height: 64px;"
                                                    tabulator-field="actions" title="">
                                                    <div class="flex lg:justify-center items-center">
                                                        <a class="edit flex items-center mr-3" href="javascript:;">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                icon-name="check-square" data-lucide="check-square"
                                                                class="lucide lucide-check-square w-4 h-4 mr-1">
                                                                <polyline points="9 11 12 14 22 4"></polyline>
                                                                <path
                                                                    d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11">
                                                                </path>
                                                            </svg> Edit
                                                        </a>
                                                        <a class="delete flex items-center text-danger"
                                                            href="javascript:;">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                icon-name="trash-2" data-lucide="trash-2"
                                                                class="lucide lucide-trash-2 w-4 h-4 mr-1">
                                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                                <path
                                                                    d="M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a2 2 0 012-2h4a2 2 0 012 2v2">
                                                                </path>
                                                                <line x1="10" y1="11" x2="10"
                                                                    y2="17"></line>
                                                                <line x1="14" y1="11" x2="14"
                                                                    y2="17"></line>
                                                            </svg> Delete
                                                        </a>
                                                    </div>
                                                    <div class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell" tabulator-field="name"
                                                    style="display: none; height: 64px;" title="">Nikon Z6<div
                                                        class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    tabulator-field="category" style="display: none; height: 64px;"
                                                    title="">Photography<div
                                                        class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    tabulator-field="remaining_stock"
                                                    style="display: none; height: 64px;" title="">100<div
                                                        class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    tabulator-field="status" style="display: none; height: 64px;"
                                                    title="">1<div class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    tabulator-field="images" style="display: none; height: 64px;"
                                                    title="">preview-15.jpg,preview-5.jpg,preview-10.jpg<div
                                                        class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    tabulator-field="images" style="display: none; height: 64px;"
                                                    title="">preview-15.jpg,preview-5.jpg,preview-10.jpg<div
                                                        class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-cell" role="gridcell"
                                                    tabulator-field="images" style="display: none; height: 64px;"
                                                    title="">preview-15.jpg,preview-5.jpg,preview-10.jpg<div
                                                        class="tabulator-col-resize-handle"></div>
                                                    <div class="tabulator-col-resize-handle prev"></div>
                                                </div>
                                                <div class="tabulator-responsive-collapse"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tabulator-footer"><span class="tabulator-paginator"><label>Page
                                                Size</label><select class="tabulator-page-size"
                                                aria-label="Page Size" title="Page Size">
                                                <option value="10">10</option>
                                                <option value="20">20</option>
                                                <option value="30">30</option>
                                                <option value="40">40</option>
                                            </select><button class="tabulator-page" type="button" role="button"
                                                aria-label="First Page" title="First Page" data-page="first"
                                                disabled="">First</button><button class="tabulator-page"
                                                type="button" role="button" aria-label="Prev Page"
                                                title="Prev Page" data-page="prev"
                                                disabled="">Prev</button><span class="tabulator-pages"><button
                                                    class="tabulator-page active" type="button" role="button"
                                                    aria-label="Show Page 1" title="Show Page 1"
                                                    data-page="1">1</button><button class="tabulator-page"
                                                    type="button" role="button" aria-label="Show Page 2"
                                                    title="Show Page 2" data-page="2">2</button></span><button
                                                class="tabulator-page" type="button" role="button"
                                                aria-label="Next Page" title="Next Page"
                                                data-page="next">Next</button><button class="tabulator-page"
                                                type="button" role="button" aria-label="Last Page"
                                                title="Last Page" data-page="last">Last</button></span></div>
                                </div>
                            </div>    
--}}