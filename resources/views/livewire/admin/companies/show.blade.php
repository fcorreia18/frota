
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
            <form action="{{route('admin.company.edit', ['id' => $company->id])}}" method="post">
            <div class="modal-body grid grid-cols-12 gap-4 gap-y-3">

                    <div class="col-span-12 sm:col-span-6">
                        <label for="modal-form-1" class="form-label">Empresa</label>
                        <input id="modal-form-1" type="text" class="form-control" placeholder="OTMZA">
                    </div>
                    <div class="col-span-12 sm:col-span-6">
                        <label for="modal-form-2" class="form-label">nif</label>
                        <input id="modal-form-2" type="text" class="form-control" placeholder="0055348042">
                    </div>
                    <div class="col-span-12 sm:col-span-6">
                        <label for="modal-form-3" class="form-label">Endereço</label>
                        <input id="modal-form-3" type="text" class="form-control" placeholder="BK0934A">
                    </div>
                    <div class="col-span-12 sm:col-span-6">
                        <label for="modal-form-4" class="form-label">Email</label>
                        <input id="modal-form-4" type="text" class="form-control" placeholder="exemplo@gmail.com">
                    </div>
                    <div class="col-span-12 sm:col-span-6">
                        <label for="modal-form-5" class="form-label">Contacto</label>
                        <input id="modal-form-5" type="text" class="form-control" placeholder="9338392983">
                    </div>
                </div>
            </form>
            <!-- END: Modal Body -->
            <!-- BEGIN: Modal Footer -->
            <div class="modal-footer">
                <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-20 mr-1">Cancelar</button>
                <button type="submit" class="btn btn-primary w-20">Confirmar</button>
            </div>
            <!-- END: Modal Footer -->
        </div>
    </div>
</div>
<!-- END: EDIT Modal Content -->


