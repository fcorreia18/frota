<div style="display:{{ $showForm ? 'block' : 'none' }};background:white;border-radius:1rem;">


    <form wire:submit.prevent="addGroup" wire:loading.class="opacity-50 pointer-events-none">
        <!-- BEGIN: Modal Header -->
        <div class="modal-header text-center m-auto  text-2xl flex justify-center mt-4">
            <h2 class="font-medium" style="color:orange">Adicionar Grupo de Empresas</h2>
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
                    <label for="modal-form-1" class="form-label">{{ strtoupper('Nome:') }}</label> <input
                        id="modal-form-1" wire:model="name" type="text" class="form-control w-full"
                        placeholder="FIRMA.GOV.AO"
                        style="border:{{ sizeof($errors) > 0 && strlen($name) < 3 ? '0.5px solid red' : '1px solid #0000001a' }}">

                </div>
                @error('name')
                    @if (strlen($name) < 3)
                        <span class="error" style="color:red;margin-left: 3.8rem;"> {{ $message }}</span>
                    @endif
                @enderror

            </div>

        </div>
        <!-- END: Modal Body -->
        <!-- BEGIN: Modal Footer -->
        <div class="modal-footer" style="display: flex;justify-content:flex-end">
            <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-20 mr-1"
                wire:click="toggleForm">Fechar</button>
            <button type="submit" class="btn btn-primary w-20">Confirmar</button>

        </div>
        <!-- END: Modal Footer -->
    </form>

</div>
