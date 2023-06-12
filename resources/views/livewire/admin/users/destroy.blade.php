<div>
    <button wire:click="destroy({{ $user->id }})" class="btn btn-danger" id="deleteUser-{{ $user->id }}"
        style="display: none">{{ $user->name }}</button>
    <button class="btn btn-danger mr-1 mb-2" onclick="deleteConfirm(event,{{ $user->id }})">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="trash"
            data-lucide="trash" class="lucide lucide-trash w-5 h-5">
            <polyline points="3 6 5 6 21 6"></polyline>
            <path d="M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a2 2 0 012-2h4a2 2 0 012 2v2"></path>
        </svg>
    </button>
</div>
