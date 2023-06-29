<div style="display:{{ $showForm ? 'block' : 'none' }};background:white;border-radius:1rem;">


    <form wire:submit.prevent="addCompany" wire:loading.class="opacity-50 pointer-events-none">
        <div class="modal-header text-center m-auto  text-2xl flex justify-center mt-4">
            <h2 class="font-medium" style="color:gray">Adicionar nova empresa</h2>
        </div>
        <div class="modal-body grid grid-cols-12 gap-4 gap-y-3">
            @if (session()->has('error'))
                <div class="xl:col-span-12 col-span-12 sm:col-span-6 mb-2">
                    <div class="alert alert-danger alert-dismissible show flex items-center mb-2"
                        role="alert">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" icon-name="alert-octagon"
                            data-lucide="alert-octagon" class="lucide lucide-alert-octagon w-6 h-6 mr-2">
                            <polygon
                                points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2">
                            </polygon>
                            <line x1="12" y1="8" x2="12" y2="12"></line>
                            <line x1="12" y1="16" x2="12.01" y2="16"></line>
                        </svg>
                        {{ session('error') }}
                        <button type="button" class="btn-close" data-tw-dismiss="alert" aria-label="Close">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" icon-name="x"
                                data-lucide="x" class="lucide lucide-x w-4 h-4 text-white">
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
                <input wire:model="name" id="modal-form-1" type="text" name="name"
                    class="form-control" placeholder="FIRMA.GOV.AO"
                    style="border:{{ (sizeof($errors) > 0 && strlen($name) < 3) || strlen($name) >= 50 ? '0.5px solid red' : '1px solid #0000001a' }}">
                @error('name')
                    <span class="error" style="color:red;"> {{ $message }}</span>
                @enderror
            </div>
            <div class="col-span-12 sm:col-span-6">
                <label for="modal-form-5" class="form-label">Contacto</label>
                <input wire:model="contact" id="modal-form-5" type="text" name="contact"
                    class="form-control" placeholder="933839298"
                    style="border:{{ sizeof($errors) > 0 && strlen($contact) < 3 ? '0.5px solid red' : '1px solid #0000001a' }}">
                @error('contact')
                    <span class="error" style="color:red;"> {{ $message }}</span>
                @enderror
            </div>
            <div class="col-span-12 sm:col-span-6">
                <label for="modal-form-3" class="form-label">Endereço</label>
                <input wire:model="address" id="modal-form-3" type="text" name="address"
                    class="form-control" placeholder="Samba"
                    style="border:{{ sizeof($errors) > 0 && strlen($address) < 3 ? '0.5px solid red' : '1px solid #0000001a' }}">
                @error('address')
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
                <label for="modal-form-5" class="form-label">Email</label>
                <input wire:model="email" id="modal-form-5" type="email" name="email"  class="form-control"
                    style="border:{{ sizeof($errors) > 0 && strlen($email) < 10 ? '0.5px solid red' : '1px solid #0000001a' }}"
                    />
                @error('email')
                    <span class="error" style="color:red;"> {{ $message }}</span>
                @enderror
            </div>
           
            <div class="col-span-12 sm:col-span-6">
                <label for="modal-form-5" class="form-label">NIF</label>
                <input wire:model="nif" id="modal-form-5" type="text" name="nif"  class="form-control"
                    style="border:{{ sizeof($errors) > 0 && strlen($nif) < 10 ? '0.5px solid red' : '1px solid #0000001a' }}"
                    />
                @error('nif')
                    <span class="error" style="color:red;"> {{ $message }}</span>
                @enderror
            </div>
        </div>

        <!-- BEGIN: Modal Footer -->
        <div class="modal-footer" style="display: flex;justify-content:flex-end">
            <button type="button" class="btn btn-outline-secondary w-20 mr-1">
                <a href="{{ redirect()->back()->getTargetUrl() }}">
                    Voltar
                </a>
            </button>
            <button type="submit" class="btn btn-primary w-20">Criar</button>

        </div>
        <!-- END: Modal Footer -->
    </form>

</div>
