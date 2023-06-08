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
                data-tw-target="#add-groupCompany">
                <i class="w-4 h-4" data-lucide="plus"></i><a href="{{ route('admin.group-companies.create') }}">Novo
                    Grupo</a>
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

    {{-- SUCCESS MESSAGE  --}}
    @if (session()->has('message') && session()->has('show_buttons'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
        <button>Adicionar Novo Grupo de Empresas</button>
        <button>Adicionar Empresas ao Grupo</button>
    @endif
   

    <form wire:submit.prevent="save">
        <div>
            <label for="nome">Nome:</label>
            <input type="text" wire:model="nome" id="nome" />
        </div>

        <div>
            <label for="novaEmpresa">Nova Empresa:</label>
            <input type="text" wire:model="novaEmpresa" id="novaEmpresa" />
            <button type="button" wire:click="updatedNovaEmpresa">Adicionar Empresa</button>
        </div>

        <div>
            <label>Empresas:</label>
            @foreach ($empresas as $empresa)
                <div>
                    <input type="checkbox" wire:model="adicionarEmpresas" value="{{ $empresa->id }}" />
                    <span>{{ $empresa->nome }}</span>
                </div>
            @endforeach
        </div>

        <button type="submit">Cadastrar Grupo de Empresas</button>
    </form>

  

    <x-slot name="scripts">

    </x-slot>
    {{-- Se clicar em adicionar empresas, fazer um show da secção de empresas e adicionar as empresas através de um checkbox --}}
</div>
