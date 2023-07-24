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
                                <div class="relative text-2xl font-medium pl-3 ml-0.5">
                                    1.413,02 kz
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
                                        <div class="text-slate-500">Saldo Negativo</div>
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
                                        <div class="text-slate-500">Provedores de Serviço</div>
                                        <div class="mt-1.5 flex items-center">
                                            <div class="text-base">2</div>
                                        </div>
                                    </div>
                                    <div class="col-span-12 sm:col-span-6 md:col-span-4">
                                        <div class="text-slate-500">Parcelas</div>
                                        <div class="mt-1.5 flex items-center">
                                            <div class="text-base">72.000kz</div>
                                        </div>
                                    </div>
                                    <div class="col-span-12 sm:col-span-6 md:col-span-4">
                                        <div class="text-slate-500">Saídas</div>
                                        <div class="mt-1.5 flex items-center">
                                            <div class="text-base">54.000kz</div>
                                        </div>
                                    </div>
                                    <div class="col-span-12 sm:col-span-6 md:col-span-4">
                                        <div class="text-slate-500">Redução de custo</div>
                                        <div class="mt-1.5 flex items-center">
                                            <div class="text-base">290</div>
                                            <div
                                                class="text-success flex text-xs font-medium tooltip cursor-pointer ml-2">
                                                16% <svg xmlns="http://www.w3.org/2000/svg" width="24"
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
                                        <div class="text-slate-500">Saídas</div>
                                        <div class="mt-1.5 flex items-center">
                                            <div class="text-base">72.000kz</div>
                                        </div>
                                    </div>
                                    <div class="col-span-12 sm:col-span-6 md:col-span-4">
                                        <div class="text-slate-500">Viaturas</div>
                                        <div class="mt-1.5 flex items-center">
                                            <div class="text-base">9</div>
                                        </div>
                                    </div>
                                    <div class="col-span-12 sm:col-span-6 md:col-span-4">
                                        <div class="text-slate-500">Projetos</div>
                                        <div class="mt-1.5 flex items-center">
                                            <div class="text-base">12</div>
                                        </div>
                                    </div>
                                    <div class="col-span-12 sm:col-span-6 md:col-span-4">
                                        <div class="text-slate-500">Est</div>
                                        <div class="mt-1.5 flex items-center">
                                            <div class="text-base">72.000kz</div>
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
                        Gráfico estatistico(semestral)
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
                                <span class="truncate">Manutenções</span> <span class="font-medium ml-auto">62%</span>
                            </div>
                            <div class="flex items-center mt-4">
                                <div class="w-2 h-2 bg-pending rounded-full mr-3"></div>
                                <span class="truncate">Abastecimento</span> <span
                                    class="font-medium ml-auto">33%</span>
                            </div>
                            <div class="flex items-center mt-4">
                                <div class="w-2 h-2 bg-warning rounded-full mr-3"></div>
                                <span class="truncate">Incidentes</span> <span class="font-medium ml-auto">10%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Sales Report -->

            <div class="col-span-12 xl:col-span-12  box mb-8 pb-10" style="height: 33rem">
                <canvas id="expensesPerProject"></canvas>
            </div>
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
                                </div>
                            </div>
                            <div class="box px-5 py-3 ml-4 flex-1 zoom-in">
                                <div class="flex items-center">
                                    <div class="font-medium">Eduardo Costa</div>
                                    <div class="text-xs text-slate-500 ml-auto">07:00 PM</div>
                                </div>
                                <div class="text-slate-500 mt-1">Realizou um apoio logistico</div>
                            </div>
                        </div>
                        <div class="intro-x relative flex items-center mb-3">
                            <div
                                class="before:block before:absolute before:w-20 before:h-px before:bg-slate-200 before:dark:bg-darkmode-400 before:mt-5 before:ml-5">
                                <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                </div>
                            </div>
                            <div class="box px-5 py-3 ml-4 flex-1 zoom-in">
                                <div class="flex items-center">
                                    <div class="font-medium">Alberto Silva</div>
                                    <div class="text-xs text-slate-500 ml-auto">07:00 PM</div>
                                </div>
                                <div class="text-slate-500 mt-1">cadastrou uma <a class="text-primary"
                                        href=""> manutenção</a></div>
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
                                    <img alt="Midone - HTML Admin Template" src="http://localhost/storage/user.png">
                                </div>
                                <div class="ml-4 mr-auto">
                                    <div class="font-medium">Alberto Silva</div>
                                    <div class="text-xs text-slate-500 ml-auto">Manutenção</div>
                                    <div class="text-slate-500 text-xs mt-0.5">10 Junho 2023</div>
                                </div>
                                <div class="text-danger">-188kz</div>
                            </div>
                        </div>
                        <div class="intro-x">
                            <div class="box px-5 py-3 mb-3 flex items-center zoom-in">
                                <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                    <img alt="Midone - HTML Admin Template" src="http://localhost/storage/user.png">
                                </div>
                                <div class="ml-4 mr-auto">
                                    <div class="font-medium">Alberto Silva</div>
                                    <div class="text-xs text-slate-500 ml-auto">Abastecimento</div>

                                    <div class="text-slate-500 text-xs mt-0.5">22 Maio 2023</div>
                                </div>
                                <div class="text-danger">-22kz</div>
                            </div>
                        </div>
                        <div class="intro-x">
                            <div class="box px-5 py-3 mb-3 flex items-center zoom-in">
                                <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                    <img alt="Midone - HTML Admin Template" src="http://localhost/storage/user.png">
                                </div>
                                <div class="ml-4 mr-auto">
                                    <div class="font-medium">Eduardo Costa</div>
                                    <div class="text-xs text-slate-500 ml-auto">Abastecimento</div>

                                    <div class="text-slate-500 text-xs mt-0.5">18 Maio 2023</div>
                                </div>
                                <div class="text-danger">-79kz</div>
                            </div>
                        </div>
                        <a href=""
                            class="intro-x w-full block text-center rounded-md py-3 border border-dotted border-slate-400 dark:border-darkmode-300 text-slate-500">Ver
                            Mais</a>
                    </div>
                </div>
                <!-- END: Transactions -->

            </div>
        </div>
    </div>

    <x-slot name="scripts">
        <script>
            document.addEventListener('livewire:load', function() {

                const expensesPerProject = new Chart(document.getElementById('expensesPerProject'), {
                    type: 'bar',
                    data: {
                        labels: @json($projects->pluck('name')),
                        datasets: [{
                            label: `Total Gastos`,
                            data: @json($expensesPerProject->values()),
                            backgroundColor: 'rgba(75, 192, 192, 0.2)',
                            borderColor: 'rgba(75, 192, 192, 1)',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        maintainAspectRatio: false,
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        },
                    }
                });
            });
        </script>

    </x-slot>
</div>
