<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="login">
        <div class="container sm:px-10">
            <div class="block xl:grid grid-cols-2 gap-4">
                <!-- BEGIN: Login Info -->
                <div class="hidden xl:flex flex-col min-h-screen">
                    <a href="" class="-intro-x flex items-center pt-5 pl-5">
                        <img alt="Midone - HTML Admin Template" class="w-32" src="<?= asset("/dist/images/etic-logo.png") ?>">
                        {{-- <x-application-logo class="w-20 h-20 fill-current text-gray-500" /> --}}
                    </a>
                 
                    <div class="my-auto">
                        <img alt="Midone - HTML Admin Template" class="-intro-x w-1/2 -mt-16" src="https://tinker.left4code.com/dist/images/illustration.svg">
                        <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">Insira os seus dados <br> para fazer login.</div>
                        <div class="-intro-x mt-5 text-lg text-white text-opacity-70 dark:text-slate-400">Gerencie toda sua frota a partir de um único lugar!</div>
                    </div>
                </div>
                <!-- END: Login Info -->
                {{ $slot }}
            </div>
        </div>
    

    <!-- BEGIN: JS Assets-->
    <script src="<?= asset("/dist/js/app.js") ?>"></script>
</html>




 