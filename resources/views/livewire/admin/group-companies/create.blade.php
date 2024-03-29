<div style="display:{{ $showForm ? 'block' : 'none' }};background:white;border-radius:1rem;">


    <form wire:submit.prevent="addGroup" wire:loading.class="opacity-50 pointer-events-none">
        <!-- BEGIN: Modal Header -->
        <div class="modal-header text-center m-auto  text-2xl flex justify-center mt-4">
            <h2 class="font-medium" style="color:gray">Adicionar Grupo de Empresas</h2>
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



            <div class="col-span-12 sm:col-span-6">
                <label for="modal-form-1" class="form-label">{{ strtoupper('Nome:') }}</label>
                <input wire:model="name" id="modal-form-1" type="text" name="name" class="form-control"
                    placeholder="FIRMA.GOV.AO"
                    style="border:{{ (sizeof($errors) > 0 && strlen($name) < 3) || strlen($name) >= 50 ? '0.5px solid red' : '1px solid #0000001a' }}">
                @error('name')
                    <span class="error" style="color:red;"> {{ $message }}</span>
                @enderror
            </div>
            <div class="col-span-12 sm:col-span-6">
                <label for="modal-form-2" class="form-label">Data de constituição</label>
                <input wire:model="started_at" id="modal-form-2" type="date" name="started_at" class="form-control"
                style="border:{{ sizeof($errors) > 0 && strlen($started_at) < 3? '0.5px solid red' : '1px solid #0000001a' }}">
                @error('started_at')
                    <span class="error" style="color:red;"> {{ $message }}</span>
                @enderror
            </div>
            <div class="col-span-12 sm:col-span-6">
                <label for="modal-form-3" class="form-label">País</label>
                <input wire:model="country" id="modal-form-3" type="text" name="country" class="form-control"
                    placeholder="Angola" style="border:{{ (sizeof($errors) > 0 && strlen($country) < 3)? '0.5px solid red' : '1px solid #0000001a' }}">
                @error('country')
                   <span class="error" style="color:red;"> {{ $message }}</span>
                @enderror
            </div>
            <div class="col-span-12 sm:col-span-6">
                <label for="modal-form-4" class="form-label">Industria</label>
                <input wire:model="industry" id="modal-form-4" type="text" name="industry" class="form-control"
                    placeholder="Tecnológica & Afins" style="border:{{ (sizeof($errors) > 0 && strlen($industry) < 3)? '0.5px solid red' : '1px solid #0000001a' }}">
                @error('industry')
                <span class="error" style="color:red;"> {{ $message }}</span>
                @enderror
            </div>
            <div class="col-span-12 sm:col-span-6">
                <label for="modal-form-5" class="form-label">Descrição</label>
                <textarea wire:model="description" id="modal-form-5" name="description" 
                style="border:{{ (sizeof($errors) > 0 && strlen($description) < 10)? '0.5px solid red' : '1px solid #0000001a' }}" cols="80" rows="5"></textarea>
                    @error('description')
                   <span class="error" style="color:red;"> {{ $message }}</span>
                @enderror
            </div>
            <div class="col-span-12 sm:col-span-6">
                <label for="modal-form-5" class="form-label">Contacto</label>
                <input wire:model="contact" id="modal-form-5" type="text" name="contact" class="form-control"
                    placeholder="933839298" style="border:{{ (sizeof($errors) > 0 && strlen($contact) < 3)? '0.5px solid red' : '1px solid #0000001a' }}">
                @error('contact')
                   <span class="error" style="color:red;"> {{ $message }}</span>
                @enderror
            </div>
           
        </div>
        <!-- END: Modal Body -->
        <!-- BEGIN: Modal Footer -->
        <div class="modal-footer" style="display: flex;justify-content:flex-end">
            <button type="button" class="btn btn-outline-secondary w-20 mr-1"
                wire:click="toggleForm">Fechar</button>
            <button type="submit" class="btn btn-primary w-20">Confirmar</button>

        </div>
        <!-- END: Modal Footer -->
    </form>

</div>
