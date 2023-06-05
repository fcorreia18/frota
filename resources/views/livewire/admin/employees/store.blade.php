
<!-- BEGIN: Add Modal Content -->
<div id="add-employee" class="modal" tabindex="-1" aria-hidden="true" >
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