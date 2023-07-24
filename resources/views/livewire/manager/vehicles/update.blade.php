<div class="">
    <!-- BREADCRUMB-->
    <x-slot name="breadCrumb">
        <nav aria-label="breadcrumb" class="-intro-x mr-auto hidden sm:flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Frota</a></li>
                <li class="breadcrumb-item">Dashboard</li>
                <li class="breadcrumb-item">Manutenções</li>
                <li class="breadcrumb-item active" aria-current="page">Editar</li>
            </ol>
        </nav>
    </x-slot>

    <!-- END BREADCRUMB-->

    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Atualizar perfil
        </h2>
    </div>
    <!-- PERFIL -->
    <div class="grid grid-cols-12 gap-6">
        <!-- BEGIN: Profile Menu -->
        <div class="col-span-12 lg:col-span-4 2xl:col-span-3 flex lg:block flex-col-reverse">
            <div class="intro-y box mt-5">
                <div class="relative flex items-center p-5">
                    <div class="w-12 h-12 image-fit">
                        <img alt="Midone - HTML Admin Template" class="rounded-full" src="http://localhost/storage/2.jpg">
                    </div>
                    <div class="ml-4 mr-auto">
                        <div class="font-medium text-base">RENAULT</div>
                        <div class="text-slate-500"> Sandero </div>
                    </div>
                    <div class="dropdown">
                        <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false"
                            data-tw-toggle="dropdown"> <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" icon-name="more-horizontal"
                                data-lucide="more-horizontal"
                                class="lucide lucide-more-horizontal w-5 h-5 text-slate-500">
                                <circle cx="12" cy="12" r="1"></circle>
                                <circle cx="19" cy="12" r="1"></circle>
                                <circle cx="5" cy="12" r="1"></circle>
                            </svg> </a>
                        <div class="dropdown-menu w-56">
                            <ul class="dropdown-content">
                                <li>
                                    <h6 class="dropdown-header">
                                        exportar opções 
                                    </h6>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <a href="" class="dropdown-item"> <svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" icon-name="activity" data-lucide="activity"
                                            class="lucide lucide-activity w-4 h-4 mr-2">
                                            <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                        </svg> Português </a>
                                </li>
                               
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <div class="flex p-1">
                                        <button type="button" class="btn btn-primary py-1 px-2">definições</button>
                                        <button type="button" class="btn btn-secondary py-1 px-2 ml-auto">ver
                                            </button>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                    <a class="flex items-center text-primary font-medium" href=""> <svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" icon-name="activity" data-lucide="activity"
                            class="lucide lucide-activity w-4 h-4 mr-2">
                            <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                        </svg> Informações Gerais </a>
                    <a class="flex items-center mt-5" href=""> <svg xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="box"
                            data-lucide="box" class="lucide lucide-box w-4 h-4 mr-2">
                            <path
                                d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z">
                            </path>
                            <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                            <line x1="12" y1="22.08" x2="12" y2="12"></line>
                        </svg> Atualizações 
                    </a>
                  </div>
               
                <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400 flex">
                    <button type="button" class="btn btn-primary py-1 px-2">+</button>
                    <button type="button" class="btn btn-outline-secondary py-1 px-2 ml-auto">-</button>
                </div>
            </div>
        </div>
        <!-- END: Profile Menu -->
        <div class="col-span-12 lg:col-span-8 2xl:col-span-9">


            {{-- SLIDER DE IMAGENS PARA OS VEÍCULOS --}}
            <div class="col-span-12 lg:col-span-8 2xl:col-span-9" style="background: white; padding-top:1rem ">
                <div class="mx-6 pb-8">
                    <div class="responsive-mode">
                        <div class="h-32 px-2">
                            <div class="h-full bg-slate-100 dark:bg-darkmode-400 rounded-md">
                                <div class=" h-full w-full flex items-center justify-center image-fit"> <img alt="Midone - HTML Admin Template"
                                    src="http://localhost/storage/2.jpg" data-action="zoom" class="w-full rounded-md"> </div>
                            </div>
                        </div>
                                   <div class="h-32 px-2">
                            <div class="h-full bg-slate-100 dark:bg-darkmode-400 rounded-md">
                                <h3 class="h-full font-medium flex items-center justify-center text-2xl">2</h3>
                            </div>
                        </div>
                        <div class="h-32 px-2">
                            <div class="h-full bg-slate-100 dark:bg-darkmode-400 rounded-md">
                                <h3 class="h-full font-medium flex items-center justify-center text-2xl">3</h3>
                            </div>
                        </div>
                        <div class="h-32 px-2">
                            <div class="h-full bg-slate-100 dark:bg-darkmode-400 rounded-md">
                                <h3 class="h-full font-medium flex items-center justify-center text-2xl">4</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- FIM SLIDER IMAGENS --}}

            <!-- BEGIN: Display Information comentar para usar o zoom da imagem -->
            <div class="intro-y box lg:mt-5">
                <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">
                        Informações Gerais
                    </h2>
                </div>
                <div class="p-5">
                    <div class="flex flex-col-reverse xl:flex-row flex-col">
                        <div class="flex-1 mt-6 xl:mt-0">
                            <div class="grid grid-cols-12 gap-x-5">
                                <div class="col-span-12 2xl:col-span-6">
                                    <div>
                                        <label for="update-profile-form-1" class="form-label">Veículo</label>
                                        <input id="update-profile-form-1" type="text" class="form-control"
                                            placeholder="Input text" value="Renault " disabled="">
                                    </div>
                                    <div class="mt-3">
                                        <label for="update-profile-form-2-tomselected" class="form-label"
                                            id="update-profile-form-2-ts-label">AB</label>
                                        <select id="update-profile-form-2" data-search="true"
                                            class="tom-select w-full tomselected" tabindex="-1" hidden="hidden">
                                            <option value="1" selected="true">2SEC</option>

                                        </select>
                                        <div class="ts-control tom-select w-full single plugin-dropdown_input"
                                            tabindex="0">
                                            <div class="items ts-input full has-items">
                                                <div data-value="1" class="item">2SEC</div>
                                            </div>
                                            <div class="ts-dropdown single tom-select w-full plugin-dropdown_input"
                                                style="display: none;">
                                                <div class="dropdown-input-wrap"><input type="select-one"
                                                        autocomplete="off" class="dropdown-input" role="combobox"
                                                        haspopup="listbox" aria-expanded="false"
                                                        aria-controls="update-profile-form-2-ts-dropdown"
                                                        id="update-profile-form-2-tomselected"></div>
                                                <div role="listbox" id="update-profile-form-2-ts-dropdown"
                                                    tabindex="-1" class="ts-dropdown-content"
                                                    aria-labelledby="update-profile-form-2-ts-label"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12 2xl:col-span-6">
                                    <div class="mt-3 2xl:mt-0">
                                        <label for="update-profile-form-3-tomselected" class="form-label"
                                            id="update-profile-form-3-ts-label">Modelo</label>
                                        <select id="update-profile-form-3" data-search="true"
                                            class="tom-select w-full tomselected" tabindex="-1" hidden="hidden">
                                            <option value="1" selected="true">sandero</option>

                                            <option value="2">sandero</option>
                                            <option value="3">sandero</option>
                                            <option value="4">sandero</option>
                                            <option value="5">sandero</option>
                                        </select>
                                        <div class="ts-control tom-select w-full single plugin-dropdown_input"
                                            tabindex="0">
                                            <div class="items ts-input full has-items">
                                                <div data-value="1" class="item">sandero</div>
                                            </div>
                                            <div class="ts-dropdown single tom-select w-full plugin-dropdown_input"
                                                style="display: none;">
                                                <div class="dropdown-input-wrap"><input type="select-one"
                                                        autocomplete="off" class="dropdown-input" role="combobox"
                                                        haspopup="listbox" aria-expanded="false"
                                                        aria-controls="update-profile-form-3-ts-dropdown"
                                                        id="update-profile-form-3-tomselected"></div>
                                                <div role="listbox" id="update-profile-form-3-ts-dropdown"
                                                    tabindex="-1" class="ts-dropdown-content"
                                                    aria-labelledby="update-profile-form-3-ts-label"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <label for="update-profile-form-4" class="form-label">KM </label>
                                        <input id="update-profile-form-4" type="text" class="form-control"
                                            placeholder="Input text" value="88000">
                                    </div>
                                </div>
                                {{-- <div class="col-span-12">
                                    <div class="mt-3">
                                        <label for="update-profile-form-5" class="form-label">Address</label>
                                        <textarea id="update-profile-form-5" class="form-control" placeholder="Adress">10 Anson Road, International Plaza, #10-11, 079903 Singapore, Singapore</textarea>
                                    </div>
                                </div> --}}
                            </div>
                            <button type="button" class="btn btn-primary w-20 mt-3">salvar</button>
                        </div>
                        <div class="w-52 mx-auto xl:mr-0 xl:ml-6">
                            <div
                                class="border-2 border-dashed shadow-sm border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                                <div class="h-40 relative image-fit cursor-pointer zoom-in mx-auto">
                                    <img class="rounded-md" alt="Midone - HTML Admin Template"
                                    src="http://localhost/storage/1.jpg">
                                    <div
                                        class="tooltip w-5 h-5 flex items-center justify-center absolute rounded-full text-white bg-danger right-0 top-0 -mr-2 -mt-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            icon-name="x" data-lucide="x" class="lucide lucide-x w-4 h-4">
                                            <line x1="18" y1="6" x2="6" y2="18">
                                            </line>
                                            <line x1="6" y1="6" x2="18" y2="18">
                                            </line>
                                        </svg>
                                    </div>
                                </div>
                                {{-- <div class="mx-auto cursor-pointer relative mt-5">
                                    <button type="button" class="btn btn-primary w-full">mudar imagem</button>
                                    <input type="file" class="w-full h-full top-0 left-0 absolute opacity-0">
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Display Information -->
            <!-- BEGIN: Personal Information -->
            {{-- <div class="intro-y box mt-5">
                <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">
                        Personal Information
                    </h2>
                </div>
                <div class="p-5">
                    <div class="grid grid-cols-12 gap-x-5">
                        <div class="col-span-12 xl:col-span-6">
                            <div>
                                <label for="update-profile-form-6" class="form-label">Email</label>
                                <input id="update-profile-form-6" type="text" class="form-control"
                                    placeholder="Input text" value="robertdeniro@left4code.com" disabled="">
                            </div>
                            <div class="mt-3">
                                <label for="update-profile-form-7" class="form-label">Name</label>
                                <input id="update-profile-form-7" type="text" class="form-control"
                                    placeholder="Input text" value="Robert De Niro" disabled="">
                            </div>
                            <div class="mt-3">
                                <label for="update-profile-form-8" class="form-label">ID Type</label>
                                <select id="update-profile-form-8" class="form-select">
                                    <option>IC</option>
                                    <option>FIN</option>
                                    <option>Passport</option>
                                </select>
                            </div>
                            <div class="mt-3">
                                <label for="update-profile-form-9" class="form-label">ID Number</label>
                                <input id="update-profile-form-9" type="text" class="form-control"
                                    placeholder="Input text" value="357821204950001">
                            </div>
                        </div>
                        <div class="col-span-12 xl:col-span-6">
                            <div class="mt-3 xl:mt-0">
                                <label for="update-profile-form-10" class="form-label">Phone Number</label>
                                <input id="update-profile-form-10" type="text" class="form-control"
                                    placeholder="Input text" value="65570828">
                            </div>
                            <div class="mt-3">
                                <label for="update-profile-form-11" class="form-label">Address</label>
                                <input id="update-profile-form-11" type="text" class="form-control"
                                    placeholder="Input text"
                                    value="10 Anson Road, International Plaza, #10-11, 079903 Singapore, Singapore">
                            </div>
                            <div class="mt-3">
                                <label for="update-profile-form-12-tomselected" class="form-label"
                                    id="update-profile-form-12-ts-label">Bank Name</label>
                                <select id="update-profile-form-12" data-search="true"
                                    class="tom-select w-full tomselected" tabindex="-1" hidden="hidden">
                                    <option value="1" selected="true">SBI - STATE BANK OF INDIA</option>

                                    <option value="1">CITI BANK - CITI BANK</option>
                                </select>
                                <div class="ts-control tom-select w-full single plugin-dropdown_input" tabindex="0">
                                    <div class="items ts-input full has-items">
                                        <div data-value="1" class="item">SBI - STATE BANK OF INDIA</div>
                                    </div>
                                    <div class="ts-dropdown single tom-select w-full plugin-dropdown_input"
                                        style="display: none;">
                                        <div class="dropdown-input-wrap"><input type="select-one" autocomplete="off"
                                                class="dropdown-input" role="combobox" haspopup="listbox"
                                                aria-expanded="false"
                                                aria-controls="update-profile-form-12-ts-dropdown"
                                                id="update-profile-form-12-tomselected"></div>
                                        <div role="listbox" id="update-profile-form-12-ts-dropdown" tabindex="-1"
                                            class="ts-dropdown-content"
                                            aria-labelledby="update-profile-form-12-ts-label"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <label for="update-profile-form-13" class="form-label">Bank Account</label>
                                <input id="update-profile-form-13" type="text" class="form-control"
                                    placeholder="Input text" value="DBS Current 011-903573-0">
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-end mt-4">
                        <button type="button" class="btn btn-primary w-20 mr-auto">Save</button>
                        <a href="" class="text-danger flex items-center"> <svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" icon-name="trash-2" data-lucide="trash-2"
                                class="lucide lucide-trash-2 w-4 h-4 mr-1">
                                <polyline points="3 6 5 6 21 6"></polyline>
                                <path d="M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a2 2 0 012-2h4a2 2 0 012 2v2">
                                </path>
                                <line x1="10" y1="11" x2="10" y2="17"></line>
                                <line x1="14" y1="11" x2="14" y2="17"></line>
                            </svg> Delete Account </a>
                    </div>
                </div>
            </div> --}}
            <!-- END: Personal Information -->
        </div>
    </div>
    <!-- END PERFIL -->

</div>
