<div class="intro-x dropdown w-8 h-8">
    <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in" role="button" aria-expanded="false" data-tw-toggle="dropdown">
        <img alt="ETIC - FROTA" src="{{ __("#") }}">
        {{-- user()->employee()->avatar ??= asset("/dist/images/avatar.jpg") --}}
    </div>
    <div class="dropdown-menu w-56">
        <ul class="dropdown-content bg-primary text-white">
            <li class="p-2">
                <div class="font-medium">{{  __("#") }}</div>
                {{-- ucwords(user()->employee()->name) --}}
                <div class="text-xs text-white/70 mt-0.5 dark:text-slate-500">{{ __("#") }}</div>
                {{-- strtoupper(user()->auth_level) --}}
            </li>
            <li>
                <hr class="dropdown-divider border-white/[0.08]">
            </li>
            <li>
                <a href="" class="dropdown-item hover:bg-white/5">
                    <i data-lucide="user" class="w-4 h-4 mr-2"></i> Perfil
                </a>
            </li>

            <li>
                <a href="" class="dropdown-item hover:bg-white/5">
                    <i data-lucide="lock" class="w-4 h-4 mr-2"></i> Trocar palavra passe
                </a>
            </li>

            <li>
                <hr class="dropdown-divider border-white/[0.08]">
            </li>
            <li>
                <a href="{{route('logout')}}" class="dropdown-item hover:bg-white/5">
                    <i data-lucide="toggle-right" class="w-4 h-4 mr-2"></i> Logout
                </a>
            </li>
        </ul>
    </div>
</div>