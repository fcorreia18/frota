<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light theme-1">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Scripts -->
    @vite(['resources/css/frota.css', 'resources/js/frota.js'])
    @livewireStyles
</head>

<body class="login">
    <div class="container sm:px-10">
        <div class="block xl:grid grid-cols-2 gap-4">
            <!-- BEGIN: Login Info -->
            <div class="hidden xl:flex flex-col min-h-screen">


                <div class="my-auto">
                    <a href="" class="-intro-x flex items-center pt-5 ">
                        <x-application-logo class="w-50 h-20 fill-current text-gray-500" />
                    </a>
                    <div class="-intro-x text-white font-medium text-2xl leading-tight mt-10 text-opacity-70">Gerencie
                        toda sua
                        frota a partir <br>de um único lugar! <br>
                    </div>
                </div>
            </div>

            <!-- END: Login Info -->
            {{ $slot }}
        </div>
    </div>


@livewireScripts
</body>

</html>
