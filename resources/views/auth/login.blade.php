<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    {{-- Error Handler --}}
    @if (session('error'))
        <script>
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
                title: "{{ session('error') }}"
            })
        </script>
    @endif

    <!-- BEGIN: Login Form -->
    <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0 ">
        <div
            class="my-auto mx-auto xl:ml-20 bg-white dark:bg-darkmode-600 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">

            <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">SIMPLES - FROTA</h2>

            <div class="w-100">
            </div>
            <div class="intro-x mt-2 text-slate-400 xl:hidden text-center">Com apenas alguns cliques você pode gerir a
                sua frota
            </div>
            <div class="intro-x mt-8">

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <input type="hidden" name="action" value="login">

                    <!-- Email Address -->
                    <div>
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="" type="email" name="email"
                            value="ptarso@etic.co.ao" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Password')" />

                        <x-text-input id="password" class="" type="password" name="password" required
                            autocomplete="current-password" value="1q2w3e4r" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Remember Me -->

                    <div class="intro-x flex text-slate-600 dark:text-slate-500 text-xs sm:text-sm mt-4">
                        {{-- <div class="flex items-center mr-auto">
                            <input id="remember-me" type="checkbox" class="form-check-input border mr-2">
                            <label class="cursor-pointer select-none" for="remember-me">{{ __('') }}</label>
                        </div> --}}
                        <div class="flex items-center mr-auto">

                        </div>
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                href="{{ route('password.request') }}">
                                {{ __('Esqueceu a senha?') }}
                            </a>
                        @endif
                    </div>

                    <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                        <x-primary-button class="" name="login">
                            {{ __('entrar') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>


            <div class="intro-x mt-10 xl:mt-24 text-slate-600 dark:text-slate-500 text-center xl:text-left">
                Ao acessar a plataforma estará a concordar com os nossos <a class="text-primary dark:text-slate-200"
                    href="">Termos e Condições</a> & <a class="text-primary dark:text-slate-200"
                    href="">Política de privacidade</a>
            </div>
        </div>

    </div>
    <!-- END: Login Form -->
</x-guest-layout>
