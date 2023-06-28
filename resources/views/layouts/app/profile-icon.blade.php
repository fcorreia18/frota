<div class="intro-x dropdown w-8 h-8">
    <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in" role="button" aria-expanded="false" data-tw-toggle="dropdown">
        <img alt="ETIC - FROTA" src="http://localhost/storage/user.png">
        {{-- user()->employee()->avatar ??= asset("/dist/images/avatar.jpg") --}}
    </div>
    <div class="dropdown-menu w-56">
        <ul class="dropdown-content bg-primary text-white">
            <li class="p-2">
                <div class="font-medium">{{ ucwords(Auth::user()->employee->name)}}</div>
               
                <div class="text-xs text-white/70 mt-0.5 dark:text-slate-500">{{ ucwords(Auth::user()->auth_level)}}</div>
               
            </li>
            <li>
                <hr class="dropdown-divider border-white/[0.08]">
            </li>
            <li>
                <a href="/profile" class="dropdown-item hover:bg-white/5">
                    <i data-lucide="lock" class="w-4 h-4 mr-2"></i> Trocar palavra passe
                </a>
                
            </li>

            <li>
                <hr class="dropdown-divider border-white/[0.08]">
            </li>
            <li>
                <form action="{{route('logout')}}" method="post">
                    @csrf
                    <button type="submit" class="dropdown-item hover:bg-white/5">
                        <i data-lucide="toggle-right" class="w-4 h-4 mr-2"></i> Logout
                    </button>
                </form>
            </li>
        </ul>
    </div>
</div>