<div>

    <x-slot name="breadCrumb">
        <nav aria-label="breadcrumb" class="-intro-x mr-auto hidden sm:flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">SIMPLES</a></li>
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
        </nav>
    </x-slot>
    <div class="grid grid-cols-12 gap-6 mb-10">
        <div class="col-span-12 2xl:col-span-12">
            <div class="grid grid-cols-12 gap-6">
                <!-- BEGIN: General Report -->
                <div class="col-span-12 mt-8">
                    <div class="intro-y flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">Painel Geral</h2>
                        <a href="" class="ml-auto flex items-center text-primary">
                            <i data-lucide="refresh-ccw" class="w-4 h-4 mr-3"></i> Recarregar informação
                        </a>
                    </div>
                    <div class="grid grid-cols-12 gap-6 mt-5">
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-lucide="layers" class="report-box__icon text-primary"></i>
                                        <div class="ml-auto">
                                            <div class="report-box__indicator bg-success tooltip cursor-pointer"
                                                title="33% Higher than last month">
                                                33% <i data-lucide="chevron-up" class="w-4 h-4 ml-0.5"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6">{{ $this->total() }}</div>
                                    <div class="text-base text-slate-500 mt-1">Empresas</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-lucide="credit-card" class="report-box__icon text-pending"></i>
                                        <div class="ml-auto">
                                            <div class="report-box__indicator bg-danger tooltip cursor-pointer"
                                                title="2% Lower than last month">
                                                2% <i data-lucide="chevron-down" class="w-4 h-4 ml-0.5"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6">0</div>
                                    <div class="text-base text-slate-500 mt-1">Veículos</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-lucide="monitor" class="report-box__icon text-warning"></i>
                                        <div class="ml-auto">
                                            <div class="report-box__indicator bg-success tooltip cursor-pointer"
                                                title="12% Higher than last month">
                                                12% <i data-lucide="chevron-up" class="w-4 h-4 ml-0.5"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6">0</div>
                                    <div class="text-base text-slate-500 mt-1">Incidentes Resolvidos</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <a href=" {{ route('admin.users.index') }}">
                                <div class="report-box zoom-in">
                                    <div class="box p-5">
                                        <div class="flex">
                                            <i data-lucide="user" class="report-box__icon text-success"></i>
                                            <div class="ml-auto">
                                                <div class="report-box__indicator bg-success tooltip cursor-pointer"
                                                    title="22% Higher than last month">
                                                    22% <i data-lucide="chevron-up" class="w-4 h-4 ml-0.5"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-3xl font-medium leading-8 mt-6">{{ $this->total() }}</div>
                                        <div class="text-base text-slate-500 mt-1">Usuários</div>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>
                </div>
                <!-- END: General Report -->
                <!-- BEGIN: Sales Report -->
                <div class="col-span-12 lg:col-span-6 mt-8">
                    <div class="intro-y block sm:flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">Report mensal</h2>
                        <div class="sm:ml-auto mt-3 sm:mt-0 relative text-slate-500">
                            <i data-lucide="calendar" class="w-4 h-4 z-10 absolute my-auto inset-y-0 ml-3 left-0"></i>
                            <input type="text" class="datepicker form-control sm:w-56 box pl-10">
                        </div>
                    </div>
                    <div class="intro-y box p-5 mt-12 sm:mt-5">
                        <div class="flex flex-col md:flex-row md:items-center">
                            <div class="flex">
                                <div>
                                    <div class="text-primary dark:text-slate-300 text-lg xl:text-xl font-medium">
                                        150,000kz</div>
                                    <div class="mt-0.5 text-slate-500">Este Mês</div>
                                </div>
                                <div
                                    class="w-px h-12 border border-r border-dashed border-slate-200 dark:border-darkmode-300 mx-4 xl:mx-5">
                                </div>
                                <div>
                                    <div class="text-slate-500 text-lg xl:text-xl font-medium">94,000kz</div>
                                    <div class="mt-0.5 text-slate-500">Mês Passado</div>
                                </div>
                            </div>
                            <div class="dropdown md:ml-auto mt-5 md:mt-0">
                                <button class="dropdown-toggle btn btn-outline-secondary font-normal"
                                    aria-expanded="false" data-tw-toggle="dropdown">
                                    filtrar por categoria <i data-lucide="chevron-down" class="w-4 h-4 ml-2"></i>
                                </button>
                                <div class="dropdown-menu w-40">
                                    <ul class="dropdown-content overflow-y-auto h-32">
                                        <li><a href="" class="dropdown-item">Manutenções</a></li>
                                        <li><a href="" class="dropdown-item">Abastecimento</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="report-chart">
                            <div class="h-[275px]">
                                <canvas id="report-line-chart" class="mt-6 -mb-6"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Sales Report -->

                <!-- BEGIN: Weekly Top Seller -->
                <div class="col-span-12 lg:col-span-6 mt-8">
                    <div class="intro-y flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">Esta semana</h2>
                        <a href="" class="ml-auto text-primary truncate">+ detalhes</a>
                    </div>
                    <div class="intro-y box p-5 mt-5">
                        <div class="mt-3">
                            <div class="h-[213px]">
                                <canvas id="report-pie-chart"></canvas>
                            </div>
                        </div>
                        <div class="w-52 sm:w-auto mx-auto mt-8">
                            <div class="flex items-center">
                                <div class="w-2 h-2 bg-primary rounded-full mr-3"></div>
                                <span class="truncate">17 - 30 intervalo</span>
                                <span class="font-medium ml-auto">62%</span>
                            </div>
                            <div class="flex items-center mt-4">
                                <div class="w-2 h-2 bg-pending rounded-full mr-3"></div>
                                <span class="truncate">31 - 50 intervalo</span>
                                <span class="font-medium ml-auto">33%</span>
                            </div>
                            <div class="flex items-center mt-4">
                                <div class="w-2 h-2 bg-warning rounded-full mr-3"></div>
                                <span class="truncate">>= 50 intervalo</span>
                                <span class="font-medium ml-auto">10%</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="grid grid-cols-12 gap-6 mb-10">
        <div class="col-span-12 2xl:col-span-12">
            <div class="grid grid-cols-12 gap-6">
                <div class="col-span-12 lg:col-span-6 mt-8">
                    <h2>Estatísticas</h2>

                    <canvas id="grafico" width="400" height="200"></canvas>
                </div>


                <div class="h-[400px] col-span-12 xl:col-span-12 mt-8 box" style="height:35rem">
                    <div>
                        <h2>Informações Gerais:</h2>
                        <p>Total de Projetos: {{ $totalProjects }}</p>
                        <p>Total de Gastos: R$ {{ $totalExpenses }}</p>
                    </div>
                    <h2>Gráfico de Gastos por Projeto:</h2>
                    <canvas id="expensesPerProject"
                        style="display: block; box-sizing: border-box; height: 560px; width: 1198px;" width="1198"
                        height="560" id="expensesPerProject"></canvas>
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
                    let closeModal = document.querySelector('#add-groupCompany').remove()
                    Swal.fire({
                        icon: 'success',
                        text: message,
                        title: 'Cadastro bem sucedido',
                        showConfirmButton: false,
                        timer: 1500
                    })
                });

                Livewire.on('show-error-message', function(message) {

                    let closeModal = document.querySelector('#add-groupCompany').remove();


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
                        // document.querySelector('#add-groupCompany').remove()
                    })
                });
            });
        </script>

        <script>
            document.addEventListener('livewire:load', function() {
                // console.log(@json($statistics))
                var ctx = document.getElementById('grafico').getContext('2d');
                var chart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: @json($statistics['labels']),
                        datasets: [{
                            label: 'Utilizadores',
                            data: @json($statistics['data']),
                            backgroundColor: 'rgba(0, 123, 255, 0.5)',
                            borderColor: 'rgba(0, 123, 255, 1)',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        responsive: true,
                    }
                });
                const expensesPerProject = new Chart(document.getElementById('expensesPerProject'), {
                    type: 'bar',
                    data: {
                        labels: @json($projects->pluck('name')),
                        datasets: [{
                            label: 'Gastos',
                            data: @json($expensesPerProject->values()),
                            backgroundColor: 'rgba(75, 192, 192, 0.2)',
                            borderColor: 'rgba(75, 192, 192, 1)',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            });
        </script>
    </x-slot>
</div>
