<!-- BEGIN: EDIT Modal Content -->
<div id="header-footer-modal-preview-company{{ $company->id }}" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- BEGIN: Modal Header -->
            <div class="modal-header">
                <h2 class="font-medium text-base mr-auto">Editar {{ $company->name }}</h2>

            </div>
            <!-- END: Modal Header -->
            <!-- BEGIN: Modal Body -->
            <form wire:submit.prevent="update($company->id)">
                <div class="modal-body grid grid-cols-12 gap-4 gap-y-3">

                    <div class="col-span-12 sm:col-span-6">
                        <label for="modal-form-1" class="form-label">Empresa</label>
                        <input id="modal-form-1" type="text" class="form-control" value="{{ $company->name }}">
                    </div>
                    <div class="col-span-12 sm:col-span-6">
                        <label for="modal-form-2" class="form-label">nif</label>
                        <input id="modal-form-2" type="text" class="form-control" value="{{ $company->nif }}">
                    </div>
                    <div class="col-span-12 sm:col-span-6">
                        <label for="modal-form-3" class="form-label">Endereço</label>
                        <input id="modal-form-3" type="text" class="form-control" value="{{ $company->address }}">
                    </div>
                    <div class="col-span-12 sm:col-span-6">
                        <label for="modal-form-4" class="form-label">Email</label>
                        <input id="modal-form-4" type="text" class="form-control" value="{{ $company->email }}">
                    </div>
                    <div class="col-span-12 sm:col-span-6">
                        <label for="modal-form-5" class="form-label">Contacto</label>
                        <input id="modal-form-5" type="text" class="form-control" value="{{ $company->contact }}">
                    </div>
                </div>
                <!-- BEGIN: Modal Footer -->
                <div class="modal-footer">
                    <button type="button" data-tw-dismiss="modal"
                        class="btn btn-outline-secondary w-20 mr-1">Cancelar</button>
                    <button type="submit" class="btn btn-primary w-20">Confirmar</button>
                </div>
                <!-- END: Modal Footer -->
            </form>
            <!-- END: Modal Body -->
        </div>
    </div>
</div>
<!-- END: EDIT Modal Content -->

<div>

    <x-slot name="breadCrumb">
        <nav aria-label="breadcrumb" class="-intro-x mr-auto hidden sm:flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Frota</a></li>
                <li class="breadcrumb-item">Dashboard</li>
                <li class="breadcrumb-item">Grupo de Empresa</li>
                <li class="breadcrumb-item active" aria-current="page">Editar</li>
            </ol>
        </nav>
    </x-slot>

    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Editar Grupo de Empresas </h2>
        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">

          

        </div>
    </div>
<!-- component -->
<div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2 mt-2">
    <div class="-mx-3 md:flex mb-6">
      <div class="md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
          First Name
        </label>
        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="grid-first-name" type="text" placeholder="Jane">
        <p class="text-red text-xs italic">Please fill out this field.</p>
      </div>
      <div class="md:w-1/2 px-3">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name">
          Last Name
        </label>
        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-last-name" type="text" placeholder="Doe">
      </div>
    </div>
    <div class="-mx-3 md:flex mb-6">
      <div class="md:w-full px-3">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-password">
          Password
        </label>
        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3" id="grid-password" type="password" placeholder="******************">
        <p class="text-grey-dark text-xs italic">Make it as long and as crazy as you'd like</p>
      </div>
    </div>
    <div class="-mx-3 md:flex mb-2">
      <div class="md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-city">
          City
        </label>
        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-city" type="text" placeholder="Albuquerque">
      </div>
     
      <div class="md:w-1/2 px-3">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-zip">
          Zip
        </label>
        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-zip" type="text" placeholder="90210">
      </div>
    </div>
  </div>
    <div class="intro-y box p-5 mt-5">
     
        <div class="overflow-x-auto scrollbar-hidden">
            <div class="shadow-sm mt-3 bg-white p-4 col-lg-12">
                <form wire:submit.prevent="updateGroup" wire:loading.class="opacity-50 pointer-events-none">
                    <!-- BEGIN: Modal Header -->
                    <div class="modal-header text-center m-auto  text-2xl flex justify-center mt-4">
                        <h2 class="font-medium" style="color:gray">Editar {{ $groupCompany->name }}</h2>
                    </div>
                    <!-- END: Modal Header -->
                    <!-- BEGIN: Modal Body -->
                    <div class="modal-body grid grid-cols-12 gap-4 gap-y-3">
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
                                    <button type="button" class="btn-close" data-tw-dismiss="alert" aria-label="Close"> <svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" icon-name="x" data-lucide="x"
                                            class="lucide lucide-x w-4 h-4 text-white">
                                            <line x1="18" y1="6" x2="6" y2="18"></line>
                                            <line x1="6" y1="6" x2="18" y2="18"></line>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        @endif
                        <div class="xl:col-span-12 col-span-12 sm:col-span-6 mb-2">
                
                            <div class="form-inline">
                                <label for="modal-form-1" class="form-label">{{ strtoupper('Nome:') }}</label> <input id="modal-form-1"
                                    wire:model="name" type="text" class="form-control w-full" placeholder="FIRMA.GOV.AO"
                                    style="border:{{ (sizeof($errors) > 0 && strlen($name) < 3) || strlen($name) >= 50 ? '0.5px solid red' : '1px solid #0000001a' }}">
                
                            </div>
                            @error('name')
                                <span class="error" style="color:red;margin-left: 3.8rem;"> {{ $message }}</span>
                            @enderror
                
                        </div>
                
                    </div>
                    <!-- END: Modal Body -->
                    <!-- BEGIN: Modal Footer -->
                    <div class="modal-footer" style="display: flex;justify-content:flex-end">
                        <button type="button" class="btn btn-outline-secondary w-20 mr-1">
                            <a href="{{ route('admin.group-companies.index') }}">
                                Voltar
                            </a>
                        </button>
                        <button type="submit" class="btn btn-primary w-20">Atualizar</button>
                
                    </div>
                    <!-- END: Modal Footer -->
                </form>
            </div>
        </div>
    </div>

   
</div>
