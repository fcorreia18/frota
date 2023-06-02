
<!-- BEGIN: Add Modal Content -->
<div id="add-company" class="modal" tabindex="-1" aria-hidden="true" >
    <div class="modal-dialog">
        <div class="modal-content" wire:loading.class="opacity-50 pointer-events-none">
            <div class="message-container">
                <!-- Aqui serão exibidas as mensagens de erro ou sucesso -->
            </div>
            <form wire:submit.prevent="store">

                <!-- BEGIN: Modal Header -->
                <div class="modal-header">
                    <h2 class="font-medium text-base mr-auto">Adicionar Empresa</h2>

                </div>
                <!-- END: Modal Header -->
                <!-- BEGIN: Modal Body -->
                <div class="modal-body grid grid-cols-12 gap-4 gap-y-3">
                    <div class="col-span-12 sm:col-span-6">
                        <label for="modal-form-1" class="form-label">Empresa</label>
                        <input wire:model="name" id="modal-form-1" type="text" name="name" class="form-control" placeholder="OTMZA">
                        @error('name') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-span-12 sm:col-span-6">
                        <label for="modal-form-2" class="form-label">NIF</label>
                        <input wire:model="nif" id="modal-form-2" type="text" name="nif" class="form-control" placeholder="0055348042">
                        @error('nif') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-span-12 sm:col-span-6">
                        <label for="modal-form-3" class="form-label">Endereço</label>
                        <input wire:model="address" id="modal-form-3" type="text" name="address" class="form-control" placeholder="BK0934A">
                        @error('address') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-span-12 sm:col-span-6">
                        <label for="modal-form-4" class="form-label">Email</label>
                        <input wire:model="email" id="modal-form-4" type="email" name="email" class="form-control" placeholder="exemplo@gmail.com">
                        @error('email') <span class="error"> {{ $message }}</span> @enderror
                    </div>
                    <div class="col-span-12 sm:col-span-6">
                        <label for="modal-form-5" class="form-label">Contacto</label>
                        <input wire:model="contact" id="modal-form-5" type="text" name="contact" class="form-control" placeholder="9338392983">
                        @error('contact') <span class="error">{{ $message }}</span> @enderror
                    </div>
                </div>
                <!-- END: Modal Body -->
                <!-- BEGIN: Modal Footer -->
                <div class="modal-footer" style="display: flex;justify-content:flex-end">
                    <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-20 mr-1">Cancelar</button>
                    <button type="submit" class="btn btn-primary w-20">Confirmar</button>
                    
                </div>


            </form>
            <!-- END: Modal Footer -->

        </div>
    </div>
</div>
<!-- END: Add Modal Content -->