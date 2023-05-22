   <!-- BEGIN: Side Menu -->
   <nav class="side-nav">
       <a href="{{ route('admin.dashboard') }}" class="intro-x flex items-center pl-5 pt-4 mt-3">
           <img alt="ETIC - FROTA" class="w-22" src="{{ asset('/dist/images/etic-logo.png') }}">
       </a>
       <div class="side-nav__devider my-6"></div>
       <ul>
           <li>
               <a href="javascript:;" class="side-menu side-menu--active">
                   <div class="side-menu__icon">
                       <i data-lucide="home"></i>
                   </div>
                   <div class="side-menu__title">
                       Dashboard
                       <div class="side-menu__sub-icon transform rotate-180">
                           <i data-lucide="chevron-down"></i>
                       </div>
                   </div>
               </a>
               <ul class="side-menu__sub-open">
                   <li>
                       <a href="https://tinker.left4code.com/page/side-menu/light/dashboard-overview-1"
                           class="side-menu side-menu--active">
                           <div class="side-menu__icon">
                               <i data-lucide="activity"></i>
                           </div>
                           <div class="side-menu__title">
                               Painel 1
                           </div>
                       </a>
                   </li>
                   <li>
                       <a href="https://tinker.left4code.com/page/side-menu/light/dashboard-overview-2"
                           class="side-menu">
                           <div class="side-menu__icon">
                               <i data-lucide="activity"></i>
                           </div>
                           <div class="side-menu__title">
                               Painel 2
                           </div>
                       </a>
                   </li>

               </ul>
           </li>
           <li class="side-nav__devider my-6"></li>

           <li>
               <a href="javascript:;" class="side-menu">
                   <div class="side-menu__icon">
                       <i data-lucide="user"></i>
                   </div>
                   <div class="side-menu__title">
                       Gestão de Empresas
                       <div class="side-menu__sub-icon ">
                           <i data-lucide="chevron-down"></i>
                       </div>
                   </div>
               </a>
               <ul class="">
                   <li>
                       <a href="#" class="side-menu">
                           <div class="side-menu__icon">
                               <i data-lucide="activity"></i>
                           </div>
                           <div class="side-menu__title">
                               Grupo de Empresas
                           </div>
                       </a>
                   </li>

                   <li>
                       <a href="{{ route('admin.companies.index') }}" class="side-menu">
                           <div class="side-menu__icon">
                               <i data-lucide="activity"></i>
                           </div>
                           <div class="side-menu__title">
                               Empresas
                           </div>
                       </a>
                   </li>
               </ul>
           </li>
           <li>
               <a href="{{ route('admin.employees.index') }}" class="side-menu">
                   <div class="side-menu__icon">
                       <i data-lucide="users"></i>
                   </div>
                   <div class="side-menu__title">
                       Utilizadores

                   </div>
               </a>
           </li>
           <li>
               <a href="{{ route('admin.profile') }}" class="side-menu">
                   <div class="side-menu__icon">
                       <i data-lucide="trello"></i>
                   </div>
                   <div class="side-menu__title">
                       Perfil
                   </div>
               </a>

           </li>
           <li class="side-nav__devider my-6"></li>
           <li>
               <a href="javascript:;" class="side-menu">
                   <div class="side-menu__icon">
                       <i data-lucide="truck"></i>
                   </div>
                   <div class="side-menu__title">
                       Veículos
                       <div class="side-menu__sub-icon ">
                           <i data-lucide="chevron-down"></i>
                       </div>
                   </div>
               </a>
               <ul class="">
                   <li>
                       <a href="https://tinker.left4code.com/page/side-menu/light/crud-data-list" class="side-menu">
                           <div class="side-menu__icon">
                               <i data-lucide="activity"></i>
                           </div>
                           <div class="side-menu__title">
                               Painel Geral
                           </div>
                       </a>
                   </li>
                   <li>
                       <a href="https://tinker.left4code.com/page/side-menu/light/crud-form" class="side-menu">
                           <div class="side-menu__icon">
                               <i data-lucide="activity"></i>
                           </div>
                           <div class="side-menu__title">
                               Manutenções
                           </div>
                       </a>
                   </li>
                   <li>
                       <a href="https://tinker.left4code.com/page/side-menu/light/crud-form" class="side-menu">
                           <div class="side-menu__icon">
                               <i data-lucide="activity"></i>
                           </div>
                           <div class="side-menu__title">
                               Incidentes
                           </div>
                       </a>
                   </li>
               </ul>
           </li>
           <li>
               <a href="javascript:;" class="side-menu">
                   <div class="side-menu__icon">
                       <i data-lucide="map"></i>
                   </div>
                   <div class="side-menu__title">
                       Actividades
                   </div>
               </a>
           </li>
       </ul>
   </nav>
   <!-- END: Side Menu -->