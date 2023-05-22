<div class="mobile-menu-bar">
    <a href="" class="flex mr-auto">
        <img alt="SIMPLES - FROTA" class="w-6" src="#">
    </a>
    <a href="javascript:;" class="mobile-menu-toggler">
        <i data-lucide="bar-chart-2" class="w-8 h-8 text-white transform -rotate-90"></i>
    </a>
</div>
<div class="scrollable">
    <a href="javascript:;" class="mobile-menu-toggler">
        <i data-lucide="x-circle" class="w-8 h-8 text-white transform -rotate-90"></i>
    </a>
    <ul class="scrollable__content py-2">
        <li>
            <a href="javascript:;" class="menu menu--active">
                <div class="menu__icon">
                    <i data-lucide="home"></i>
                </div>
                <div class="menu__title">
                    Dashboard
                    <i data-lucide="chevron-down" class="menu__sub-icon transform rotate-180"></i>
                </div>
            </a>
            <ul class="menu__sub-open">
                <li>
                    <a href="#" class="menu menu--active">
                        <div class="menu__icon">
                            <i data-lucide="activity"></i>
                        </div>
                        <div class="menu__title">
                            Painel 1
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#" class="menu">
                        <div class="menu__icon">
                            <i data-lucide="activity"></i>
                        </div>
                        <div class="menu__title">
                            Painel 2
                        </div>
                    </a>
                </li>

            </ul>
        </li>

        <li>
            <a href="{{ route('admin.employees.index') }}" class="menu">
                <div class="menu__icon">
                    <i data-lucide="users"></i>
                </div>
                <div class="menu__title">
                    Utilizadores
                    <i data-lucide="chevron-down" class="menu__sub-icon "></i>
                </div>
            </a>
        </li>
        <li class="menu__devider my-6"></li>
        <li>
            <a href="javascript:;" class="menu">
                <div class="menu__icon">
                    <i data-lucide="edit"></i>
                </div>
                <div class="menu__title">
                    Veículos
                    <i data-lucide="chevron-down" class="menu__sub-icon "></i>
                </div>
            </a>
            <ul class="">
                <li>
                    <a href="#" class="menu">
                        <div class="menu__icon">
                            <i data-lucide="activity"></i>
                        </div>
                        <div class="menu__title">
                            Data List
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#" class="menu">
                        <div class="menu__icon">
                            <i data-lucide="activity"></i>
                        </div>
                        <div class="menu__title">
                            Form
                        </div>
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="javascript:;" class="menu">
                <div class="menu__icon">
                    <i data-lucide="trello"></i>
                </div>
                <div class="menu__title">
                    Perfil
                    <i data-lucide="chevron-down" class="menu__sub-icon "></i>
                </div>
            </a>
            <ul class="">
                <li>
                    <a href="#" class="menu">
                        <div class="menu__icon">
                            <i data-lucide="activity"></i>
                        </div>
                        <div class="menu__title">
                            Overview 1
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#" class="menu">
                        <div class="menu__icon">
                            <i data-lucide="activity"></i>
                        </div>
                        <div class="menu__title">
                            Overview 2
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#" class="menu">
                        <div class="menu__icon">
                            <i data-lucide="activity"></i>
                        </div>
                        <div class="menu__title">
                            Overview 3
                        </div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu__devider my-6"></li>
    </ul>
</div>
