<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light theme-1">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> SIMPLES {{ config('app.name', 'Laravel') }} - {{ $title ?? 'APP' }}</title>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Scripts -->
    @vite(['resources/css/frota.css', 'resources/js/frota.js'])
    @livewireStyles
</head>

<body class="py-5 md:py-0 bg-black/[0.15] dark:bg-transparent">

    <!-- BEGIN: Mobile Menu -->
    <div class="mobile-menu md:hidden">
        @include('layouts.app..mobile-header')
    </div>
    <!-- END: Mobile Menu -->
    <div class="flex mt-[4.7rem] md:mt-0 overflow-hidden">

        {{-- SIDE MENU --}}

        {{-- @if (isset($sidemenu))
            {{ $sidemenu }}
        @endif --}}
        @include('layouts.app..side-menu')
        {{-- END SIDE MENU --}}

        <!-- BEGIN: Content -->
        <div class="content">
            <!-- BEGIN: Top Bar -->
            <div class="top-bar -mx-4 px-4 md:mx-0 md:px-0">
                <!-- BEGIN: Breadcrumb -->

                @if (isset($breadCrumb))
                    {{ $breadCrumb }}
                @endif

                <!-- END: Breadcrumb -->

                <!-- BEGIN: Notifications -->
                @include('layouts.app..notifications-component')
                <!-- END: Notifications -->

                <!-- BEGIN: Account Menu -->
                @include('layouts.app..profile-icon')
                <!-- END: Account Menu -->

            </div>

            <!-- Page Content -->
            {{ $slot }}
            <!-- END: Content -->
        </div>
    </div>





    @if (isset($scripts))
        {{ $scripts }}
    @endif
    <script>
        document.addEventListener('livewire:load', function() {
            Livewire.on('error', function(message) {
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                })

                Toast.fire({
                    icon: 'error',
                    title: message
                })
            });
            Livewire.on('info', function(message) {
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                })

                Toast.fire({
                    icon: 'info',
                    title: message
                })
            });
            Livewire.on('success', function(message) {
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                })

                Toast.fire({
                    icon: 'success',
                    title: message
                })
            });

        });
    </script>
    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcUcow5QHjitBVOfkTdy44l7jnaoFzW1k&libraries=places">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    @livewireScripts
</body>
</html>
