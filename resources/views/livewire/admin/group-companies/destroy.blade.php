<div>
    <button wire:click="destroy({{ $groupCompany->id }})" class="btn btn-danger" id="deleteGroup-{{ $groupCompany->id }}" style="display: none">{{$groupCompany->name}}</button>
    <button class="btn btn-danger mr-1 mb-2" onclick="deleteConfirm(event,{{$groupCompany->id}})">
        <i data-lucide="trash" class="w-5 h-5"></i>
    </button>
</div>
