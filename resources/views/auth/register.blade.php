<x-guest-layout>

    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />

        </x-slot>
        <x-validation-errors class="mb-0" />

        @vite (['resources/css/registro.css'])
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.4/dist/tailwind.min.css" rel="stylesheet" />


<body>
    <div >

        <form method="POST" action="{{ route('register') }}">
            @csrf
                <div class="absolute top-0 right-0 flex items-center mt-4 mr-4">
                    <div class="relative">
                        <img src="images/Estados unidos.png" alt="Bandera de Estados Unidos"
                            class="w-12 h-8 rounded cursor-pointer" onclick="showLine('usa')" />
                        <div id="usa-line"
                            class="hidden h-1 mt-1 transition-all duration-500 -translate-x-full bg-red-500 rounded-full">
                        </div>
                    </div>
                    <div class="relative ml-2">
                        <img src="images/COLOMBIA.png" alt="Bandera de Colombia"
                            class="w-12 h-8 rounded cursor-pointer" onclick="showLine('colombia')" />
                        <div id="colombia-line"
                            class="hidden h-1 mt-1 transition-all duration-500 -translate-x-full bg-yellow-200 rounded-full">
                        </div>

                    </div>

                </div>
                <div class="w-full form-container">
                    <div
                        class="flex items-center justify-center w-full pb-8 border-b-2 border-blue-900 form-header">
                        <h1 class="mb-2 text-2xl font-bold text-center text-blue-900 md:text-5xl">
                            REGISTRAR TUS DATOS
                        </h1>
                    </div>

                    <div class="px-8 pt-6 pb-8 mb-4 bg-white rounded">
                        <div>
                            <x-label for="name" value="{{ __('Nombre Completo *') }}" />
                            <x-input id="name" class="block w-full mt-1" type="text" name="name"
                                :value="old('name')" required autofocus autocomplete="name" />
                        </div>
                        <div class="mt-4">
                            <x-label for="countries" value="{{ __('Nacionalidad *') }}"
                                class="mb-2 text-lg font-bold text-blue-700" />
                            <select id="countries" name="Nacionalidad"
                                class="block w-full p-2 px-3 py-4 text-gray-700 bg-gray-100 border border-gray-300 border-opacity-50 rounded-md shadow-md custom-select focus:outline-none focus:border-gray-500"
                                required>
                                <option class="py-2 text-base" value="" disabled selected>Nombre del
                                    pais -
                                    codigo del pais (ISO3)- codigo</option>
                                <option value="COL">COLOMBIA | COL | 170</option>
                                <option value="ARG">ARGENTINA | ARG | 032</option>
                                <option value="CHL">CHILE | CHL | 152</option>
                                <option value="USA">ESTADOS UNIDOS | USA | 840</option>
                                <option value="ESP">ESPAÑA | ESP | 724</option>
                                <option value="ECU">ECUADOR | ECU | 218</option>
                                <option value="CUB">CUBA | CUB | 192</option>
                                <option value="PAN">PANAMA | PAN | 591</option>
                            </select>
                        </div>
                        <div class="mt-4">
                            <x-label for="fecha" value="{{ __('Fecha de nacimiento *') }}" />
                            <x-input id="fecha" class="block w-full mt-1" type="date" name="fecha"
                                required />
                        </div>
                        <div class="mt-4">
                            <x-label for="genero" value="{{ __('Género') }}" />
                            <div class="flex items-center space-x-4">
                                <x-input type="checkbox" id="hombre" name="genero" class="hidden"
                                    onclick="hideInput()" />
                                <x-label for="hombre"
                                    class="inline-flex items-center gap-2 px-6 py-4 border-r-2 border-blue-700 cursor-pointer md:pr-8"
                                    onclick="check('hombre')">
                                    <span class="text-gray-700">{{ __('Hombre') }}</span>
                                    <span id="check-hombre" class="w-5 h-5 border border-blue-700 rounded">
                                        <i class="hidden text-white fas fa-check"></i>
                                    </span>
                                </x-label>
                                <x-input type="checkbox" id="mujer" name="genero" class="hidden"
                                    onclick="hideInput()" />
                                <x-label for="mujer"
                                    class="inline-flex items-center gap-2 px-6 py-4 border-r-2 border-blue-700 cursor-pointer md:pr-8"
                                    onclick="check('mujer')">
                                    <span class="text-gray-700">{{ __('Mujer') }}</span>
                                    <span id="check-mujer" class="w-5 h-5 border border-blue-700 rounded">
                                        <i class="hidden text-white fas fa-check"></i>
                                    </span>
                                </x-label>
                                <x-input type="checkbox" id="no_identificado" name="genero" class="hidden"
                                    onclick="showInput()" />
                                <x-label for="no_identificado"
                                    class="inline-flex items-center gap-2 px-6 py-4 cursor-pointer"
                                    onclick="check('no_identificado')">
                                    <span class="text-gray-700">{{ __('No identificado') }}</span>
                                    <span id="check-no_identificado"
                                        class="w-5 h-5 border border-blue-700 rounded">
                                        <i class="hidden text-white fas fa-check"></i>
                                    </span>
                                </x-label>
                            </div>
                            <div id="otroInput" class="hidden mt-4">
                                <x-input type="text" id="otro" name="otro"
                                    class="block w-full mt-1" placeholder="{{ __('Otro...') }}" />
                            </div>
                        </div>
                        <div class="mt-4">
                            <label for="tipo_documento">{{ __('Tipo de documento *') }}</label>
                            <div class="flex items-center space-x-4">
                                <select id="tipo_documento"
                                    class="block w-full mt-1 text-white bg-blue-900 border-blue-900">
                                    <option class="py-2 text-base" value="" disabled selected>
                                        {{ __('Seleccione Documento') }}</option>
                                    <option class="py-2 text-base" value="cedula_extranjeria">
                                        {{ __('Cedula de extranjería') }}</option>
                                    <option class="py-2 text-base" value="pasaporte">
                                        {{ __('Pasaporte') }}
                                    </option>
                                    <option class="py-2 text-base" value="visa">{{ __('Visa') }}
                                    </option>
                                </select>
                                <input id="numero_documento" class="block w-full mt-1" type="text"
                                    name="numero_documento" placeholder="{{ __('Número de documento') }}" />
                            </div>
                        </div>
                        <div class="w-full mb-4">
                            <label class="mb-2 text-lg font-bold text-blue-700"
                                for="documento_pdf *">Documento de
                                PDF</label>
                            <div class="file-upload-container">
                                <label for="file-upload" class="file-upload-label">Seleccionar
                                    archivo</label>
                                <input type="file" id="file-upload" name="documento_pdf"
                                    class="file-upload-input" accept="application/pdf" required>
                                <span class="file-upload-description">Fotos de ambas caras del documento en
                                    PDF</span>
                            </div>
                        </div>
                        <div class="mt-4">
                            <x-label for="Fecha de Expedicion" value="{{ __('Fecha de Expedicion *') }}" />
                            <x-input id="Fecha de Expedicion" class="block w-full mt-1" type="date"
                                name="Fecha de Expedicion" required />
                        </div>
                        <div class="mt-4">
                            <x-label for="email" value="{{ __('Email *') }}" />
                            <x-input id="email" class="block w-full mt-1" type="email" name="email"
                                :value="old('email')" required autocomplete="username" />
                        </div>
                        <div class="mt-4">
                            <x-label for="password" value="{{ __('Password *') }}" />
                            <x-input id="password" class="block w-full mt-1" type="password"
                                name="password" required autocomplete="new-password" />
                        </div>
                        <div class="mt-4">
                            <x-label for="password_confirmation" value="{{ __('Confirm Password *') }}" />
                            <x-input id="password_confirmation" class="block w-full mt-1" type="password"
                                name="password_confirmation" required autocomplete="new-password" />
                        </div>

                        @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                            <div class="mt-4">
                                <x-label for="terms">
                                    <div class="flex items-center">
                                        <x-checkbox name="terms" id="terms" required />
                                        <div class="ms-2">
                                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                'terms_of_service' =>
                                                    '<a target="_blank" href="' .
                                                    route('terms.show') .
                                                    '" class="text-sm text-gray-600 underline rounded-md hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">' .
                                                    __('Terms of Service') .
                                                    '</a>',
                                                'privacy_policy' =>
                                                    '<a target="_blank" href="' .
                                                    route('policy.show') .
                                                    '" class="text-sm text-gray-600 underline rounded-md hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">' .
                                                    __('Privacy Policy') .
                                                    '</a>',
                                            ]) !!}
                                        </div>
                                    </div>
                                </x-label>
                            </div>
                        @endif
                        <div class="flex items-center justify-end mt-4">
                            <a class="text-sm text-gray-600 underline rounded-md hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                href="{{ route('login') }}">
                                {{ __('Ya tienes cuenta?') }}
                            </a>

                            <x-button class="ms-4 custom-button">
                                {{ __('Registrar') }}
                            </x-button>
                        </div>
                    </div>
                </div>
        </form>
    </div>
</body>
    </x-authentication-card>
</x-guest-layout>
