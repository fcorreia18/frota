   <!-- BEGIN: Side Menu -->
   <nav class="side-nav">
       <a href="{{config('app.url', 'Laravel')}}" class="intro-x flex items-center pl-5 pt-4 mt-3">
           <x-application-logo class="w-25 h-8 fill-current text-gray-500" />
       </a>
       <div class="side-nav__devider my-6"></div>
       <ul>
           @can('admin')
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
                           <a href="{{ route('admin.dashboard') }}" class="side-menu side-menu--active">
                               <div class="side-menu__icon">
                                   <i data-lucide="activity"></i>
                               </div>
                               <div class="side-menu__title">
                                   Painel 1
                               </div>
                           </a>
                       </li>
                       <li>
                           <a href="{{ route('admin.dashboard') }}" class="side-menu">
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
                           <a href="{{ route('admin.group-companies.index') }}" class="side-menu">
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
                   <a href="{{ route('admin.users.index') }}" class="side-menu">
                       <div class="side-menu__icon">
                           <i data-lucide="users"></i>
                       </div>
                       <div class="side-menu__title">
                           Utilizadores

                       </div>
                   </a>
               </li>

               <li class="side-nav__devider my-6"></li>
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
           @endcan

           @can('manager')
               <li>
                   <a href="{{ route('manager.dashboard') }}" class="side-menu side-menu--active">
                       <div class="side-menu__icon">
                           <i data-lucide="home"></i>
                       </div>
                       <div class="side-menu__title">
                           Dashboard
                       </div>
                   </a>

               </li>

               <li class="side-nav__devider my-6"></li>

               <li>
                   <a href="{{ route('manager.companies.index') }}" class="side-menu">
                       <div class="side-menu__icon">
                           <i data-lucide="users"></i>
                       </div>
                       <div class="side-menu__title">
                           Empresas

                       </div>
                   </a>
               </li>
               <li>
                   <a href="{{ route('manager.employees.index') }}" class="side-menu">
                       <div class="side-menu__icon">
                           <i data-lucide="users"></i>
                       </div>
                       <div class="side-menu__title">
                           Utilizadores

                       </div>
                   </a>
               </li>
               <!-- Menu a ser exibido apenas para usuários com a role 'manager' -->
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

               <li class="side-nav__devider my-6"></li>
               <li>
                   <a href="{{ route('manager.profile') }}" class="side-menu">
                       <div class="side-menu__icon">
                           <i data-lucide="trello"></i>
                       </div>
                       <div class="side-menu__title">
                           Perfil
                       </div>
                   </a>

               </li>
           @endcan
           @can('fleet_manager')
           <li class="side-nav__devider my-6"></li>
               <li>
                   <a href="{{ route('fleet-manager.profile') }}" class="side-menu">
                       <div class="side-menu__icon">
                           <i data-lucide="trello"></i>
                       </div>
                       <div class="side-menu__title">
                           Perfil
                       </div>
                   </a>

               </li>
           @endcan
           @can('employee')
           <li class="side-nav__devider my-6"></li>
               <li>
                   <a href="{{ route('employee.profile') }}" class="side-menu">
                       <div class="side-menu__icon">
                           <i data-lucide="trello"></i>
                       </div>
                       <div class="side-menu__title">
                           Perfil
                       </div>
                   </a>

               </li>
           @endcan
       </ul>
   </nav>
   <!-- END: Side Menu -->