<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 text-sm font-medium text-green-600">
                {{ session('status') }}
            </div>
        @endif
        <div class="absolute flex items-center mt-8 mr-40 right-5 top-5">
            <form method="POST" action="{{ route('login') }}">
             @csrf
                {{-- <div class="absolute top-0 right-0 flex mt-1 mr-0">
                    <img src="images/Estados unidos.png" alt="Bandera de Estados Unidos"
                        class="w-12 h-8 rounded cursor-pointer" onclick="showLine('usa')" />
                    <div id="usa-line"
                        class="hidden h-1 mt-1 transition-all duration-500 -translate-x-full bg-red-500 rounded-full">
                    </div>
                </div>
                <div class="relative ml-2">
                    <img src="images/COLOMBIA.png" alt="Bandera de Colombia" class="w-12 h-8 rounded cursor-pointer"
                        onclick="showLine('colombia')" />
                    <div id="colombia-line"
                        class="hidden h-1 mt-1 transition-all duration-500 -translate-x-full bg-yellow-200 rounded-full">
                    </div>
                </div> --}}
                <div class="w-full form-container">
                    <div class="flex items-center justify-center w-full pb-8 border-b-2 border-blue-900 form-header">
                        <h1 class="mb-2 text-2xl font-bold text-center text-blue-900 md:text-5xl">
                            INGRESA TUS DATOS
                        </h1>
                    </div>
                    <div class="px-8 pt-6 pb-8 mb-4 bg-white rounded">
                        <div>
                            <x-label for="email" value="{{ __('Email') }}" />
                            <x-input id="email" class="block w-full mt-1" type="email" name="email"
                                :value="old('email')" required autofocus autocomplete="username" />
                        </div>

                        <div class="mt-4">
                            <x-label for="password" value="{{ __('Password') }}" />
                            <x-input id="password" class="block w-full mt-1" type="password" name="password" required
                                autocomplete="current-password" />
                        </div>

                        <div class="block mt-4">
                            <label for="remember_me" class="flex items-center">
                                <x-checkbox id="remember_me" name="remember" />
                                <span class="text-sm text-gray-600 ms-2">{{ __('Recordar Usuario') }}</span>
                            </label>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            @if (Route::has('password.request'))
                                <a class="text-sm text-gray-600 underline rounded-md hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                    href="{{ route('password.request') }}">
                                    {{ __('Olvidaste la Contraseña?') }}
                                </a>
                            @endif

                            <x-button class="ms-4">
                                {{ __('Ingresar') }}
                            </x-button>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </x-authentication-card>
</x-guest-layout>
