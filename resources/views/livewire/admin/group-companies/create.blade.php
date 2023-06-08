<div>

    <x-slot name="breadCrumb">
        <nav aria-label="breadcrumb" class="-intro-x mr-auto hidden sm:flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Frota</a></li>
                <li class="breadcrumb-item">Dashboard</li>
                <li class="breadcrumb-item active" aria-current="page">Grupo de Empresa</li>
            </ol>
        </nav>
    </x-slot>


    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto"> Criar Grupo de Empresas </h2>
        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">

            <x-blue-primary-button class="btn btn-primary shadow-md mr-2" data-tw-toggle="modal"
                data-tw-target="#add-groupCompany" >
                <i class="w-4 h-4" data-lucide="plus"></i><a href="{{ route('admin.group-companies.create') }}">Novo Grupo</a> 
            </x-blue-primary-button>

        </div>
    </div>
    <div class="error-section">
        @if ($errors->any())
            <ul class="error-list">
                @foreach ($errors->all() as $error)
                    <li class="error-item">{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </div>

    
    <x-slot name="scripts">
      
    </x-slot>
{{-- Se clicar em adicionar empresas, fazer um show da secção de empresas e adicionar as empresas através de um checkbox --}}
</div>
