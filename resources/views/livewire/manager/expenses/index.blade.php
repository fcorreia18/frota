<h2 class="intro-y text-lg font-medium mt-10">
    Despesas
</h2>

<div class="grid grid-cols-12 gap-6 mt-5">
    <div class="intro-y col-span-12 flex flex-wrap xl:flex-nowrap items-center mt-2">
        <div class="flex w-full sm:w-auto">
            <div class="w-48 relative text-slate-500">
                <input type="text" class="form-control w-48 box pr-10" placeholder="buscar por...">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    icon-name="search" class="lucide lucide-search w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0"
                    data-lucide="search">
                    <circle cx="11" cy="11" r="8"></circle>
                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                </svg>
            </div>
            <select class="form-select box ml-2">
                <option>Status</option>
                <option>Waiting Payment</option>
                <option>Confirmed</option>
                <option>Packing</option>
                <option>Delivered</option>
                <option>conluido</option>
            </select>
        </div>
        <div class="hidden xl:block mx-auto text-slate-500">mostrando 1 de 10 de 3 entradas</div>
        <div class="w-full xl:w-auto flex items-center mt-3 xl:mt-0">
            <button class="btn btn-primary shadow-md mr-2"> <svg xmlns="http://www.w3.org/2000/svg" width="24"
                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round" icon-name="file-text" data-lucide="file-text"
                    class="lucide lucide-file-text w-4 h-4 mr-2">
                    <path d="M14.5 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V7.5L14.5 2z"></path>
                    <polyline points="14 2 14 8 20 8"></polyline>
                    <line x1="16" y1="13" x2="8" y2="13"></line>
                    <line x1="16" y1="17" x2="8" y2="17"></line>
                    <line x1="10" y1="9" x2="8" y2="9"></line>
                </svg> Exportar para Excel </button>
            <button class="btn btn-primary shadow-md mr-2"> <svg xmlns="http://www.w3.org/2000/svg" width="24"
                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round" icon-name="file-text" data-lucide="file-text"
                    class="lucide lucide-file-text w-4 h-4 mr-2">
                    <path d="M14.5 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V7.5L14.5 2z"></path>
                    <polyline points="14 2 14 8 20 8"></polyline>
                    <line x1="16" y1="13" x2="8" y2="13"></line>
                    <line x1="16" y1="17" x2="8" y2="17"></line>
                    <line x1="10" y1="9" x2="8" y2="9"></line>
                </svg> Exportar para PDF </button>
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
                                    stroke-linejoin="round" icon-name="arrow-left-right"
                                    data-lucide="arrow-left-right"
                                    class="lucide lucide-arrow-left-right w-4 h-4 mr-2">
                                    <polyline points="17 11 21 7 17 3"></polyline>
                                    <line x1="21" y1="7" x2="9" y2="7"></line>
                                    <polyline points="7 21 3 17 7 13"></polyline>
                                    <line x1="15" y1="17" x2="3" y2="17"></line>
                                </svg> mudar estado </a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item"> <svg xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" icon-name="bookmark" data-lucide="bookmark"
                                    class="lucide lucide-bookmark w-4 h-4 mr-2">
                                    <path d="M19 21l-7-4-7 4V5a2 2 0 012-2h10a2 2 0 012 2v16z"></path>
                                </svg> Bookmark </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- BEGIN: Data List -->
    <div class="intro-y col-span-12 overflow-auto 2xl:overflow-visible">
        <table class="table table-report -mt-2">
            <thead>
                <tr>
                    <th class="whitespace-nowrap">
                        <input class="form-check-input" type="checkbox">
                    </th>
                    <th class="whitespace-nowrap">SAÍDA</th>
                    <th class="whitespace-nowrap">SERVIÇO</th>
                    <th class="text-center whitespace-nowrap">STATUS</th>
                    <th class="whitespace-nowrap">VEÍCULO</th>
                    <th class="text-right whitespace-nowrap">
                        <div class="pr-16">TOTAL GASTO</div>
                    </th>
                    <th class="text-center whitespace-nowrap">ACÇÕES</th>
                </tr>
            </thead>
            <tbody>
                <tr class="intro-x">
                    <td class="w-10">
                        <input class="form-check-input" type="checkbox">
                    </td>
                    <td class="w-40 !py-4"> <a href=""
                            class="underline decoration-dotted whitespace-nowrap">#INV-72807556</a> </td>
                    <td class="w-40">
                        <a href="" class="font-medium whitespace-nowrap">Manutenção</a>
                        <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">luanda, Angola</div>
                    </td>
                    <td class="text-center">
                        <div class="flex items-center justify-center whitespace-nowrap text-success"> <svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" icon-name="check-square" data-lucide="check-square"
                                class="lucide lucide-check-square w-4 h-4 mr-2">
                                <polyline points="9 11 12 14 22 4"></polyline>
                                <path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"></path>
                            </svg> conluido </div>
                    </td>
                    <td>
                        <div class="whitespace-nowrap">Nissan Quashai</div>
                        <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">27 Maio, 12:55</div>
                    </td>
                    <td class="w-40 text-right">
                        <div class="pr-16">72,000,00</div>
                    </td>
                    <td class="table-report__action">
                        <div class="flex justify-center items-center">
                            <a class="flex items-center text-primary whitespace-nowrap mr-5" href="javascript:;"> <svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" icon-name="check-square"
                                    data-lucide="check-square" class="lucide lucide-check-square w-4 h-4 mr-1">
                                    <polyline points="9 11 12 14 22 4"></polyline>
                                    <path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"></path>
                                </svg> detalhes </a>
                            <a class="flex items-center text-primary whitespace-nowrap" href="javascript:;"
                                data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal"> <svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" icon-name="arrow-left-right"
                                    data-lucide="arrow-left-right"
                                    class="lucide lucide-arrow-left-right w-4 h-4 mr-1">
                                    <polyline points="17 11 21 7 17 3"></polyline>
                                    <line x1="21" y1="7" x2="9" y2="7"></line>
                                    <polyline points="7 21 3 17 7 13"></polyline>
                                    <line x1="15" y1="17" x2="3" y2="17"></line>
                                </svg> mudar estado </a>
                        </div>
                    </td>
                </tr>
                <tr class="intro-x">
                    <td class="w-10">
                        <input class="form-check-input" type="checkbox">
                    </td>
                    <td class="w-40 !py-4"> <a href=""
                            class="underline decoration-dotted whitespace-nowrap">#INV-24807556</a> </td>
                    <td class="w-40">
                        <a href="" class="font-medium whitespace-nowrap">Manutenção</a>
                        <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">Luanda, LD</div>
                    </td>
                    <td class="text-center">
                        <div class="flex items-center justify-center whitespace-nowrap text-pending"> <svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" icon-name="check-square" data-lucide="check-square"
                                class="lucide lucide-check-square w-4 h-4 mr-2">
                                <polyline points="9 11 12 14 22 4"></polyline>
                                <path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"></path>
                            </svg> pendente </div>
                    </td>
                    <td>
                        <div class="whitespace-nowrap">Renault Sandero</div>
                        <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">06 junho, 11:00</div>
                    </td>
                    <td class="w-40 text-right">
                        <div class="pr-16">24,000,00</div>
                    </td>
                    <td class="table-report__action">
                        <div class="flex justify-center items-center">
                            <a class="flex items-center text-primary whitespace-nowrap mr-5" href="javascript:;"> <svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" icon-name="check-square"
                                    data-lucide="check-square" class="lucide lucide-check-square w-4 h-4 mr-1">
                                    <polyline points="9 11 12 14 22 4"></polyline>
                                    <path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"></path>
                                </svg> detalhes </a>
                            <a class="flex items-center text-primary whitespace-nowrap" href="javascript:;"
                                data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal"> <svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" icon-name="arrow-left-right"
                                    data-lucide="arrow-left-right"
                                    class="lucide lucide-arrow-left-right w-4 h-4 mr-1">
                                    <polyline points="17 11 21 7 17 3"></polyline>
                                    <line x1="21" y1="7" x2="9" y2="7"></line>
                                    <polyline points="7 21 3 17 7 13"></polyline>
                                    <line x1="15" y1="17" x2="3" y2="17"></line>
                                </svg> mudar estado </a>
                        </div>
                    </td>
                </tr>
                <tr class="intro-x">
                    <td class="w-10">
                        <input class="form-check-input" type="checkbox">
                    </td>
                    <td class="w-40 !py-4"> <a href=""
                            class="underline decoration-dotted whitespace-nowrap">#INV-47807556</a> </td>
                    <td class="w-40">
                        <a href="" class="font-medium whitespace-nowrap">Manutenção</a>
                        <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">luanda, luanda</div>
                    </td>
                    <td class="text-center">
                        <div class="flex items-center justify-center whitespace-nowrap text-success"> <svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" icon-name="check-square" data-lucide="check-square"
                                class="lucide lucide-check-square w-4 h-4 mr-2">
                                <polyline points="9 11 12 14 22 4"></polyline>
                                <path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"></path>
                            </svg> conluido </div>
                    </td>
                    <td>
                        <div class="whitespace-nowrap">Nissan Quashai</div>
                        <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">27 Maio, 12:55</div>
                    </td>
                    <td class="w-40 text-right">
                        <div class="pr-16">47,000,00</div>
                    </td>
                    <td class="table-report__action">
                        <div class="flex justify-center items-center">
                            <a class="flex items-center text-primary whitespace-nowrap mr-5" href="javascript:;"> <svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" icon-name="check-square"
                                    data-lucide="check-square" class="lucide lucide-check-square w-4 h-4 mr-1">
                                    <polyline points="9 11 12 14 22 4"></polyline>
                                    <path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"></path>
                                </svg> detalhes </a>
                            <a class="flex items-center text-primary whitespace-nowrap" href="javascript:;"
                                data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal"> <svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" icon-name="arrow-left-right"
                                    data-lucide="arrow-left-right"
                                    class="lucide lucide-arrow-left-right w-4 h-4 mr-1">
                                    <polyline points="17 11 21 7 17 3"></polyline>
                                    <line x1="21" y1="7" x2="9" y2="7"></line>
                                    <polyline points="7 21 3 17 7 13"></polyline>
                                    <line x1="15" y1="17" x2="3" y2="17"></line>
                                </svg> mudar estado </a>
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
