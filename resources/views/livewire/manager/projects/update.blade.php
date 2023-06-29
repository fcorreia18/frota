<div>
{{-- {{dd($companies)}} --}}
    <x-slot name="breadCrumb">
        <nav aria-label="breadcrumb" class="-intro-x mr-auto hidden sm:flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Frota</a></li>
                <li class="breadcrumb-item">Dashboard</li>
                <li class="breadcrumb-item">Empresas</li>
                <li class="breadcrumb-item active" aria-current="page">Editar</li>
            </ol>
        </nav>
    </x-slot>

    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Editar projeto</h2>
        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
        </div>
    </div>

    <form wire:submit.prevent="addProject" wire:loading.class="opacity-50 pointer-events-none" class="mb-5">

        <div class="modal-body grid grid-cols-12 gap-4 gap-y-3" style="background:white;">
            @if (session()->has('error'))
                <div class="xl:col-span-12 col-span-12 sm:col-span-6 mb-2">
                    <div class="alert alert-danger alert-dismissible show flex items-center mb-2" role="alert">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" icon-name="alert-octagon" data-lucide="alert-octagon"
                            class="lucide lucide-alert-octagon w-6 h-6 mr-2">
                            <polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2">
                            </polygon>
                            <line x1="12" y1="8" x2="12" y2="12"></line>
                            <line x1="12" y1="16" x2="12.01" y2="16"></line>
                        </svg>
                        {{ session('error') }}
                        <button type="button" class="btn-close" data-tw-dismiss="alert" aria-label="Close">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" icon-name="x" data-lucide="x"
                                class="lucide lucide-x w-4 h-4 text-white">
                                <line x1="18" y1="6" x2="6" y2="18">
                                </line>
                                <line x1="6" y1="6" x2="18" y2="18">
                                </line>
                            </svg>
                        </button>
                    </div>
                </div>
            @endif

            <div class="col-span-12 sm:col-span-6">
                <label for="modal-form-1" class="form-label">{{ strtoupper('Nome:') }}</label>
                <input wire:model="name" id="modal-form-1" type="text" name="name" class="form-control"
                    placeholder="SIMPLES FROTA "
                    style="border:{{ (sizeof($errors) > 0 && strlen($name) < 3) || strlen($name) >= 50 ? '0.5px solid red' : '1px solid #0000001a' }}">
                @error('name')
                    <span class="error" style="color:red;"> {{ $message }}</span>
                @enderror
            </div>

            <div class="col-span-12 sm:col-span-6">
                <label for="modal-form-3" class="form-label">Início</label>
                <input wire:model="start_date" id="modal-form-3" type="date" name="start_date" class="form-control"
                    style="border:{{ sizeof($errors) > 0 && strlen($start_date) < 3 ? '0.5px solid red' : '1px solid #0000001a' }}">
                @error('start_date')
                    <span class="error" style="color:red;"> {{ $message }}</span>
                @enderror
            </div>
            {{-- <div class="col-span-12 sm:col-span-6">
                <label for="modal-form-2" class="form-label">Grupo</label>
                <select  id="modal-form-2" class="form-control" disabled>
                    <option value="">Selecione uma empresa</option>   
                        <option value="{{ $groupCompany->id }}" selected>{{ $groupCompany->name }}</option>
                </select>
            </div> --}}
            <div class="col-span-12 sm:col-span-6">
                <label for="modal-form-5" class="form-label">Descrição</label>
                <textarea wire:model="description" id="modal-form-5" class="form-control" name="description" id="description"
                    style="border:{{ sizeof($errors) > 0 && strlen($description) < 3 ? '0.5px solid red' : '1px solid #0000001a' }}"
                    cols="30" rows="5"></textarea>

                @error('description')
                    <span class="error" style="color:red;"> {{ $message }}</span>
                @enderror
            </div>
        </div>

        <!-- BEGIN: Modal Footer -->

        <!-- END: Modal Footer -->

        <div class="intro-y box p-5 mt-5 pt-5">
            <div class="border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                <div
                    class="font-medium text-base flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" icon-name="chevron-down" data-lucide="chevron-down"
                        class="lucide lucide-chevron-down w-4 h-4 mr-2">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                    Associar Empresa
                </div>
                <div class="mt-5">
                    <div class="form-inline items-start flex-col xl:flex-row mt-5 pt-5 first:mt-0 first:pt-0">

                        <div class="w-full mt-3 xl:mt-0 flex-1">
                            <select id="companies" data-placeholder="selecione empresa" class="w-full"
                                multiple="multiple" wire:model="selectedOptions">
                                @foreach ($companies as $company)
                                    @foreach ($company as $companySelf)
                                        
                                    <option value="{{ $companySelf->id }}" selected="true">{{ $companySelf->name }}</option>
                                    @endforeach
                                @endforeach
                            </select>


                        </div>

                    </div>
                </div>
                <div class="modal-footer" style="display: flex;justify-content:flex-end">
                    <button type="button" class="btn btn-outline-secondary w-20 mr-1">
                        <a href="{{ route('manager.projects.index') }}">
                            Voltar
                        </a>
                    </button>
                    <button type="submit" class="btn btn-primary "> <svg xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="plus"
                            class="lucide lucide-plus w-4 h-4" data-lucide="plus">
                            <line x1="12" y1="5" x2="12" y2="19"></line>
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                        </svg> Salvar</button>

                </div>
            </div>
        </div>
    </form>

</div>
