<div class="grid grid-cols-12 gap-6">
    <div class="col-span-12 2xl:col-span-9">
        <div class="grid grid-cols-12 gap-6">
            <!-- BEGIN: General Report -->
            <div class="col-span-12 xl:col-span-9 mt-8">
                <div class="intro-y flex items-center h-10">
                    <h2 class="text-lg font-medium truncate mr-5">
                        DASHBOARD
                    </h2>
                    <a href="" class="ml-auto text-primary truncate">Ver Mais</a>
                </div>
                <div class="report-box-2 intro-y mt-5">
                    <div class="box grid grid-cols-12">
                        <div class="col-span-12 lg:col-span-4 px-8 py-12 flex flex-col justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" icon-name="pie-chart" data-lucide="pie-chart"
                                class="lucide lucide-pie-chart w-10 h-10 text-pending">
                                <path d="M21.21 15.89A10 10 0 118 2.83"></path>
                                <path d="M22 12A10 10 0 0012 2v10z"></path>
                            </svg>
                            <div class="justify-start flex items-center text-slate-600 dark:text-slate-300 mt-12"> Total
                                gastos <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" icon-name="alert-circle"
                                    data-lucide="alert-circle"
                                    class="lucide lucide-alert-circle tooltip w-4 h-4 ml-1.5">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <line x1="12" y1="8" x2="12" y2="12"></line>
                                    <line x1="12" y1="16" x2="12.01" y2="16"></line>
                                </svg> </div>
                            <div class="flex items-center justify-start mt-4">
                                <div class="relative text-2xl font-medium pl-3 ml-0.5"> <span
                                        class="absolute text-xl font-medium top-0 left-0 -ml-0.5">$</span> 1,413,102.02
                                </div>
                                <a class="text-slate-500 ml-4" href=""> <svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" icon-name="refresh-ccw" data-lucide="refresh-ccw"
                                        class="lucide lucide-refresh-ccw w-4 h-4">
                                        <path d="M3 2v6h6"></path>
                                        <path d="M21 12A9 9 0 006 5.3L3 8"></path>
                                        <path d="M21 22v-6h-6"></path>
                                        <path d="M3 12a9 9 0 0015 6.7l3-2.7"></path>
                                    </svg> </a>
                            </div>
                            <div class="mt-4 text-slate-500 text-xs">Ultima atualização a 1h atrás</div>
                            <button class="btn btn-outline-secondary relative justify-start rounded-full mt-12">
                                Ver mais
                                <span
                                    class="w-8 h-8 absolute flex justify-center items-center bg-primary text-white rounded-full right-0 top-0 bottom-0 my-auto ml-auto mr-0.5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" icon-name="arrow-right"
                                        data-lucide="arrow-right" class="lucide lucide-arrow-right w-4 h-4">
                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                        <polyline points="12 5 19 12 12 19"></polyline>
                                    </svg> </span>
                            </button>
                        </div>
                        <div
                            class="col-span-12 lg:col-span-8 p-8 border-t lg:border-t-0 lg:border-l border-slate-200 dark:border-darkmode-300 border-dashed">
                            <ul class=" nav nav-pills w-60 border border-slate-300 dark:border-darkmode-300 border-dashed rounded-md mx-auto p-1 mb-8 "
                                role="tablist">
                                <li id="weekly-report-tab" class="nav-item flex-1" role="presentation">
                                    <button class="nav-link w-full py-1.5 px-2 active" data-tw-toggle="pill"
                                        data-tw-target="#weekly-report" type="button" role="tab"
                                        aria-controls="weekly-report" aria-selected="true"> Semanal </button>
                                </li>
                                <li id="monthly-report-tab" class="nav-item flex-1" role="presentation">
                                    <button class="nav-link w-full py-1.5 px-2" data-tw-toggle="pill"
                                        data-tw-target="#monthly-report" type="button" role="tab"
                                        aria-selected="false"> Mensal </button>
                                </li>
                            </ul>
                            <div class="tab-content px-5 pb-5">
                                <div class="tab-pane grid grid-cols-12 gap-y-8 gap-x-10 active" id="weekly-report"
                                    role="tabpanel" aria-labelledby="weekly-report-tab" style="width: 530px;">
                                    <div class="col-span-6 sm:col-span-6 md:col-span-4">
                                        <div class="text-slate-500">Unpaid Loan</div>
                                        <div class="mt-1.5 flex items-center">
                                            <div class="text-base">4.501</div>
                                            <div
                                                class="text-danger flex text-xs font-medium tooltip cursor-pointer ml-2">
                                                2% <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" icon-name="chevron-down"
                                                    data-lucide="chevron-down"
                                                    class="lucide lucide-chevron-down w-4 h-4 ml-0.5">
                                                    <polyline points="6 9 12 15 18 9"></polyline>
                                                </svg> </div>
                                        </div>
                                    </div>
                                    <div class="col-span-12 sm:col-span-6 md:col-span-4">
                                        <div class="text-slate-500">Active Partner</div>
                                        <div class="mt-1.5 flex items-center">
                                            <div class="text-base">2</div>
                                        </div>
                                    </div>
                                    <div class="col-span-12 sm:col-span-6 md:col-span-4">
                                        <div class="text-slate-500">Paid Installment</div>
                                        <div class="mt-1.5 flex items-center">
                                            <div class="text-base">$72.000</div>
                                        </div>
                                    </div>
                                    <div class="col-span-12 sm:col-span-6 md:col-span-4">
                                        <div class="text-slate-500">Disbursement</div>
                                        <div class="mt-1.5 flex items-center">
                                            <div class="text-base">$54.000</div>
                                        </div>
                                    </div>
                                    <div class="col-span-12 sm:col-span-6 md:col-span-4">
                                        <div class="text-slate-500">Success Payment</div>
                                        <div class="mt-1.5 flex items-center">
                                            <div class="text-base">2.500</div>
                                            <div
                                                class="text-success flex text-xs font-medium tooltip cursor-pointer ml-2">
                                                52% <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" icon-name="chevron-up"
                                                    data-lucide="chevron-up"
                                                    class="lucide lucide-chevron-up w-4 h-4 ml-0.5">
                                                    <polyline points="18 15 12 9 6 15"></polyline>
                                                </svg> </div>
                                        </div>
                                    </div>
                                    <div class="col-span-12 sm:col-span-6 md:col-span-4">
                                        <div class="text-slate-500">Unpaid Loan</div>
                                        <div class="mt-1.5 flex items-center">
                                            <div class="text-base">$72.000</div>
                                        </div>
                                    </div>
                                    <div class="col-span-12 sm:col-span-6 md:col-span-4">
                                        <div class="text-slate-500">Posted Campaign</div>
                                        <div class="mt-1.5 flex items-center">
                                            <div class="text-base">4.501</div>
                                        </div>
                                    </div>
                                    <div class="col-span-12 sm:col-span-6 md:col-span-4">
                                        <div class="text-slate-500">Social Media</div>
                                        <div class="mt-1.5 flex items-center">
                                            <div class="text-base">2</div>
                                        </div>
                                    </div>
                                    <div class="col-span-12 sm:col-span-6 md:col-span-4">
                                        <div class="text-slate-500">Net Margin</div>
                                        <div class="mt-1.5 flex items-center">
                                            <div class="text-base">$72.000</div>
                                            <div
                                                class="text-success flex text-xs font-medium tooltip cursor-pointer ml-2">
                                                49% <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" icon-name="chevron-up"
                                                    data-lucide="chevron-up"
                                                    class="lucide lucide-chevron-up w-4 h-4 ml-0.5">
                                                    <polyline points="18 15 12 9 6 15"></polyline>
                                                </svg> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: General Report -->
            <!-- BEGIN: Sales Report -->
            <div
                class="col-span-12 md:col-span-6 lg:col-span-4 xl:col-span-3 row-start-4 lg:row-start-3 xl:row-start-auto mt-6 xl:mt-8">
                <div class="intro-y flex items-center h-10">
                    <h2 class="text-lg font-medium truncate mr-5">
                        Gráfico estatistico
                    </h2>
                </div>
                <div class="report-box-2 before:hidden xl:before:block intro-y mt-5">
                    <div class="box p-5">
                        <div class="mt-3">
                            <div class="h-[196px]">
                                <canvas id="report-donut-chart"
                                    style="display: block; box-sizing: border-box; height: 196px; width: 241px;"
                                    width="241" height="196"></canvas>
                            </div>
                        </div>
                        <div class="w-52 sm:w-auto mx-auto mt-8">
                            <div class="flex items-center">
                                <div class="w-2 h-2 bg-primary rounded-full mr-3"></div>
                                <span class="truncate">17 - 30 Years old</span> <span
                                    class="font-medium ml-auto">62%</span>
                            </div>
                            <div class="flex items-center mt-4">
                                <div class="w-2 h-2 bg-pending rounded-full mr-3"></div>
                                <span class="truncate">31 - 50 Years old</span> <span
                                    class="font-medium ml-auto">33%</span>
                            </div>
                            <div class="flex items-center mt-4">
                                <div class="w-2 h-2 bg-warning rounded-full mr-3"></div>
                                <span class="truncate">&gt;= 50 Years old</span> <span
                                    class="font-medium ml-auto">10%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Sales Report -->
            <div class="h-[400px] col-span-12 xl:col-span-12 mt-8 box" style="height:35rem"> <canvas
                    id="vertical-bar-chart-widget"></canvas> </div>
        </div>
    </div>
    <div class="col-span-12 2xl:col-span-3">
        <div class="2xl:border-l -mb-10 pb-10">
            <div class="2xl:pl-6 grid grid-cols-12 gap-x-6 2xl:gap-x-0 gap-y-6">

                <!-- BEGIN: Recent Activities -->
                <div class="col-span-12 md:col-span-6 xl:col-span-4 2xl:col-span-12 mt-3">
                    <div class="intro-x flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">
                            Atividades Recentes
                        </h2>
                        <a href="" class="ml-auto text-primary truncate">Ver mais</a>
                    </div>
                    <div
                        class="mt-5 relative before:block before:absolute before:w-px before:h-[85%] before:bg-slate-200 before:dark:bg-darkmode-400 before:ml-5 before:mt-5">
                        <div class="intro-x relative flex items-center mb-3">
                            <div
                                class="before:block before:absolute before:w-20 before:h-px before:bg-slate-200 before:dark:bg-darkmode-400 before:mt-5 before:ml-5">
                                <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                    <img alt="Midone - HTML Admin Template" src="dist/images/profile-5.jpg">
                                </div>
                            </div>
                            <div class="box px-5 py-3 ml-4 flex-1 zoom-in">
                                <div class="flex items-center">
                                    <div class="font-medium">Tom Cruise</div>
                                    <div class="text-xs text-slate-500 ml-auto">07:00 PM</div>
                                </div>
                                <div class="text-slate-500 mt-1">Has joined the team</div>
                            </div>
                        </div>
                        <div class="intro-x relative flex items-center mb-3">
                            <div
                                class="before:block before:absolute before:w-20 before:h-px before:bg-slate-200 before:dark:bg-darkmode-400 before:mt-5 before:ml-5">
                                <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                    <img alt="Midone - HTML Admin Template" src="dist/images/profile-1.jpg">
                                </div>
                            </div>
                            <div class="box px-5 py-3 ml-4 flex-1 zoom-in">
                                <div class="flex items-center">
                                    <div class="font-medium">Johnny Depp</div>
                                    <div class="text-xs text-slate-500 ml-auto">07:00 PM</div>
                                </div>
                                <div class="text-slate-500">
                                    <div class="mt-1">Added 3 new photos</div>
                                    <div class="flex mt-2">
                                        <div class="tooltip w-8 h-8 image-fit mr-1 zoom-in">
                                            <img alt="Midone - HTML Admin Template"
                                                class="rounded-md border border-white"
                                                src="dist/images/preview-6.jpg">
                                        </div>
                                        <div class="tooltip w-8 h-8 image-fit mr-1 zoom-in">
                                            <img alt="Midone - HTML Admin Template"
                                                class="rounded-md border border-white"
                                                src="dist/images/preview-7.jpg">
                                        </div>
                                        <div class="tooltip w-8 h-8 image-fit mr-1 zoom-in">
                                            <img alt="Midone - HTML Admin Template"
                                                class="rounded-md border border-white"
                                                src="dist/images/preview-15.jpg">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="intro-x text-slate-500 text-xs text-center my-4">12 November</div>
                        <div class="intro-x relative flex items-center mb-3">
                            <div
                                class="before:block before:absolute before:w-20 before:h-px before:bg-slate-200 before:dark:bg-darkmode-400 before:mt-5 before:ml-5">
                                <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                    <img alt="Midone - HTML Admin Template" src="dist/images/profile-9.jpg">
                                </div>
                            </div>
                            <div class="box px-5 py-3 ml-4 flex-1 zoom-in">
                                <div class="flex items-center">
                                    <div class="font-medium">Denzel Washington</div>
                                    <div class="text-xs text-slate-500 ml-auto">07:00 PM</div>
                                </div>
                                <div class="text-slate-500 mt-1">Has changed <a class="text-primary"
                                        href="">Samsung Galaxy S20 Ultra</a> price and description</div>
                            </div>
                        </div>
                        <div class="intro-x relative flex items-center mb-3">
                            <div
                                class="before:block before:absolute before:w-20 before:h-px before:bg-slate-200 before:dark:bg-darkmode-400 before:mt-5 before:ml-5">
                                <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                    <img alt="Midone - HTML Admin Template" src="dist/images/profile-14.jpg">
                                </div>
                            </div>
                            <div class="box px-5 py-3 ml-4 flex-1 zoom-in">
                                <div class="flex items-center">
                                    <div class="font-medium">Alberto Miguel</div>
                                    <div class="text-xs text-slate-500 ml-auto">07:00 PM</div>
                                </div>
                                <div class="text-slate-500 mt-1">Has changed <a class="text-primary"
                                        href="">Oppo Find X2 Pro</a> description</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Recent Activities -->
                <!-- BEGIN: Transactions -->
                <div class="col-span-12 md:col-span-6 xl:col-span-4 2xl:col-span-12 mt-3">
                    <div class="intro-x flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">
                            Transações
                        </h2>
                    </div>
                    <div class="mt-5">
                        <div class="intro-x">
                            <div class="box px-5 py-3 mb-3 flex items-center zoom-in">
                                <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                    <img alt="Midone - HTML Admin Template" src="dist/images/profile-9.jpg">
                                </div>
                                <div class="ml-4 mr-auto">
                                    <div class="font-medium">Eduardo Costa</div>
                                    <div class="text-slate-500 text-xs mt-0.5">20 Julho 2022</div>
                                </div>
                                <div class="text-success">+$94</div>
                            </div>
                        </div>
                        <div class="intro-x">
                            <div class="box px-5 py-3 mb-3 flex items-center zoom-in">
                                <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                    <img alt="Midone - HTML Admin Template" src="dist/images/profile-9.jpg">
                                </div>
                                <div class="ml-4 mr-auto">
                                    <div class="font-medium">Mário Gonçalves</div>
                                    <div class="text-slate-500 text-xs mt-0.5">10 Setembro 2021</div>
                                </div>
                                <div class="text-success">+$33</div>
                            </div>
                        </div>
                        <div class="intro-x">
                            <div class="box px-5 py-3 mb-3 flex items-center zoom-in">
                                <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                    <img alt="Midone - HTML Admin Template" src="dist/images/profile-14.jpg">
                                </div>
                                <div class="ml-4 mr-auto">
                                    <div class="font-medium">Alberto Miguel</div>
                                    <div class="text-slate-500 text-xs mt-0.5">10 Fevereiro 2021</div>
                                </div>
                                <div class="text-danger">-$188</div>
                            </div>
                        </div>
                        <div class="intro-x">
                            <div class="box px-5 py-3 mb-3 flex items-center zoom-in">
                                <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                    <img alt="Midone - HTML Admin Template" src="dist/images/profile-11.jpg">
                                </div>
                                <div class="ml-4 mr-auto">
                                    <div class="font-medium">Alberto Miguel</div>
                                    <div class="text-slate-500 text-xs mt-0.5">22 Fevereiro 2021</div>
                                </div>
                                <div class="text-danger">-$22</div>
                            </div>
                        </div>
                        <div class="intro-x">
                            <div class="box px-5 py-3 mb-3 flex items-center zoom-in">
                                <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                    <img alt="Midone - HTML Admin Template" src="dist/images/profile-2.jpg">
                                </div>
                                <div class="ml-4 mr-auto">
                                    <div class="font-medium">Eduardo Costa</div>
                                    <div class="text-slate-500 text-xs mt-0.5">18 Setembro 2021</div>
                                </div>
                                <div class="text-danger">-$79</div>
                            </div>
                        </div>
                        <a href=""
                            class="intro-x w-full block text-center rounded-md py-3 border border-dotted border-slate-400 dark:border-darkmode-300 text-slate-500">Ver
                            Mais</a>
                    </div>
                </div>
                <!-- END: Transactions -->
                <!-- BEGIN: Schedules -->
                <div
                    class="col-span-12 md:col-span-6 xl:col-span-4 2xl:col-span-12 xl:col-start-1 xl:row-start-2 2xl:col-start-auto 2xl:row-start-auto mt-3">
                    <div class="intro-x flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">
                            Agendas
                        </h2>
                        {{-- <a href="" class="ml-auto text-primary truncate flex items-center"> <svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" icon-name="plus" data-lucide="plus"
                                class="lucide lucide-plus w-4 h-4 mr-1">
                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                            </svg> Fazer marcação </a> --}}
                    </div>
                    <div class="mt-5">
                        <div class="intro-x box">
                            <div class="p-5">
                                <div class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" icon-name="chevron-left"
                                        data-lucide="chevron-left"
                                        class="lucide lucide-chevron-left w-5 h-5 text-slate-500">
                                        <polyline points="15 18 9 12 15 6"></polyline>
                                    </svg>
                                    <div class="font-medium text-base mx-auto">April</div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" icon-name="chevron-right"
                                        data-lucide="chevron-right"
                                        class="lucide lucide-chevron-right w-5 h-5 text-slate-500">
                                        <polyline points="9 18 15 12 9 6"></polyline>
                                    </svg>
                                </div>
                                <div class="grid grid-cols-7 gap-4 mt-5 text-center">
                                    <div class="font-medium">Su</div>
                                    <div class="font-medium">Mo</div>
                                    <div class="font-medium">Tu</div>
                                    <div class="font-medium">We</div>
                                    <div class="font-medium">Th</div>
                                    <div class="font-medium">Fr</div>
                                    <div class="font-medium">Sa</div>
                                    <div class="py-0.5 rounded relative text-slate-500">29</div>
                                    <div class="py-0.5 rounded relative text-slate-500">30</div>
                                    <div class="py-0.5 rounded relative text-slate-500">31</div>
                                    <div class="py-0.5 rounded relative">1</div>
                                    <div class="py-0.5 rounded relative">2</div>
                                    <div class="py-0.5 rounded relative">3</div>
                                    <div class="py-0.5 rounded relative">4</div>
                                    <div class="py-0.5 rounded relative">5</div>
                                    <div class="py-0.5 bg-success/20 dark:bg-success/30 rounded relative">6</div>
                                    <div class="py-0.5 rounded relative">7</div>
                                    <div class="py-0.5 bg-primary text-white rounded relative">8</div>
                                    <div class="py-0.5 rounded relative">9</div>
                                    <div class="py-0.5 rounded relative">10</div>
                                    <div class="py-0.5 rounded relative">11</div>
                                    <div class="py-0.5 rounded relative">12</div>
                                    <div class="py-0.5 rounded relative">13</div>
                                    <div class="py-0.5 rounded relative">14</div>
                                    <div class="py-0.5 rounded relative">15</div>
                                    <div class="py-0.5 rounded relative">16</div>
                                    <div class="py-0.5 rounded relative">17</div>
                                    <div class="py-0.5 rounded relative">18</div>
                                    <div class="py-0.5 rounded relative">19</div>
                                    <div class="py-0.5 rounded relative">20</div>
                                    <div class="py-0.5 rounded relative">21</div>
                                    <div class="py-0.5 rounded relative">22</div>
                                    <div class="py-0.5 bg-pending/20 dark:bg-pending/30 rounded relative">23</div>
                                    <div class="py-0.5 rounded relative">24</div>
                                    <div class="py-0.5 rounded relative">25</div>
                                    <div class="py-0.5 rounded relative">26</div>
                                    <div class="py-0.5 bg-primary/10 dark:bg-primary/50 rounded relative">27</div>
                                    <div class="py-0.5 rounded relative">28</div>
                                    <div class="py-0.5 rounded relative">29</div>
                                    <div class="py-0.5 rounded relative">30</div>
                                    <div class="py-0.5 rounded relative text-slate-500">1</div>
                                    <div class="py-0.5 rounded relative text-slate-500">2</div>
                                    <div class="py-0.5 rounded relative text-slate-500">3</div>
                                    <div class="py-0.5 rounded relative text-slate-500">4</div>
                                    <div class="py-0.5 rounded relative text-slate-500">5</div>
                                    <div class="py-0.5 rounded relative text-slate-500">6</div>
                                    <div class="py-0.5 rounded relative text-slate-500">7</div>
                                    <div class="py-0.5 rounded relative text-slate-500">8</div>
                                    <div class="py-0.5 rounded relative text-slate-500">9</div>
                                </div>
                            </div>
                            <div class="border-t border-slate-200/60 p-5">
                                <div class="flex items-center">
                                    <div class="w-2 h-2 bg-pending rounded-full mr-3"></div>
                                    <span class="truncate">Manutenção</span> <span
                                        class="font-medium xl:ml-auto">23th</span>
                                </div>
                                <div class="flex items-center mt-4">
                                    <div class="w-2 h-2 bg-primary rounded-full mr-3"></div>
                                    <span class="truncate">Visita Mokbel</span> <span
                                        class="font-medium xl:ml-auto">10th</span>
                                </div>
                                <div class="flex items-center mt-4">
                                    <div class="w-2 h-2 bg-warning rounded-full mr-3"></div>
                                    <span class="truncate">Viagem Namibe</span> <span
                                        class="font-medium xl:ml-auto">31th</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Schedules -->
            </div>
        </div>
    </div>
</div>
