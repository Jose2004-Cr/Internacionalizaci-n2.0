<x-guest-layout>
    <div class="flex flex-col h-screen md:flex-row">
        <div class="relative w-full h-64 md:w-1/2 md:h-full">
            <img class="absolute object-cover w-full h-full" src="images/x2.png" alt="Banner Image" />
        </div>
        <div class="flex flex-col items-center justify-center w-full min-h-screen pt-20 bg-white md:w-1/2 sm:justify-center sm:pt-12">
            <div>
                <!-- Aquí podrías insertar el logo si lo tienes definido en algún lugar -->
                <x-authentication-card-logo />
            </div>
            <div >
                <x-validation-errors class="mb-4" />
                @if (session('status'))
                    <div class="mb-4 text-sm font-medium text-green-600">
                        {{ session('status') }}
                    </div>
                @endif
                <form method="POST" action="{{ route('login') }}" class="w-full">
                    @csrf
                    <div class="w-full form-container">
                        <div class="flex justify-end mb-2">
                            <div class="relative mr-2">
                                <img src="images/Estados unidos.png" alt="Bandera de Estados Unidos" class="w-12 h-8 rounded cursor-pointer" onclick="showLine('usa')" />
                                <div id="usa-line" class="hidden h-1 mt-1 transition-all duration-500 bg-red-500 rounded-full"></div>
                            </div>
                            <div class="relative">
                                <img src="images/COLOMBIA.png" alt="Bandera de Colombia" class="w-12 h-8 rounded cursor-pointer" onclick="showLine('colombia')" />
                                <div id="colombia-line" class="hidden h-1 mt-1 transition-all duration-500 bg-yellow-200 rounded-full"></div>
                            </div>
                        </div>
                        <div class="flex items-center justify-center w-full pb-3 border-b-4 border-[#0066C5] form-header">
                            <h1 class="mb-2 text-2xl font-bold text-center text-[#0066C5] md:text-4xl lg:text-5xl">
                                Ingresa tus datos
                            </h1>
                        </div>
                        <div class="px-8 pt-6 pb-8 mb-4 bg-white rounded">
                            <div class="">
                                <x-label for="email" value="{{ __('Identificacion') }}" />
                                <x-input id="email" class="block w-full mt-1" type="email" name="email"
                                    :value="old('email')" required autofocus autocomplete="username" />
                            </div>
                            <div class="mt-8">
                                <x-label for="password" value="{{ __('Contraseña') }}" />
                                <x-input id="password" class="block w-full mt-1" type="password" name="password" required
                                    autocomplete="current-password" />
                            </div>
                            <div class="block mt-4">
                                <label for="remember_me" class="flex items-center">
                                    <x-checkbox id="remember_me" name="remember" />
                                    <span class="text-sm text-gray-600 ms-2">{{ __('Recordar Usuario') }}</span>
                                </label>
                            </div>
                            <div class="flex flex-col items-center justify-end mt-8 md:flex-row">
                                @if (Route::has('password.request'))
                                    <a class="text-sm text-gray-600 underline rounded-md hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                        href="{{ route('password.request') }}">
                                        {{ __('Olvidaste la Contraseña?') }}
                                    </a>
                                @endif
                                <x-button class="mt-2 md:mt-0 md:ms-4">
                                    {{ __('Ingresar') }}
                                </x-button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
