<x-guest-layout>
    <div class="flex flex-col h-screen md:flex-row">
        <div class="relative w-full h-64 md:w-1/2 md:h-full">
            <img class="absolute object-cover w-full h-full" src="images/x2.png" alt="Banner Image" />
        </div>
        <div class="flex flex-col items-center justify-center w-full min-h-screen bg-white md:w-1/2 sm:pt-12">
            <div class="w-full px-6 py-1 mt-1 bg-white shadow-md sm:max-w-md sm:rounded-lg md:mx-auto lg:max-w-lg xl:max-w-xl">
                <x-validation-errors class="mb-4" />

                <form method="POST" action="{{ route('register') }}" class="w-full">
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
                        <div class="flex items-center justify-center w-full pb-4 border-b-2 border-blue-900 form-header">
                            <h1 class="mb-2 text-2xl font-bold text-center text-blue-900 md:text-3xl lg:text-4xl">
                                REGISTRAR TUS DATOS
                            </h1>
                        </div>

                        <div class="px-4 pt-6 pb-8 mb-4 bg-white rounded">


                            <div>
                                <x-label for="name" value="{{ __('Nombre Completo *') }}" />
                                <x-input id="name" class="block w-full mt-1" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                            </div>

                            {{-- <div class="mt-4">
                                <x-label for="countries" value="{{ __('Nacionalidad *') }}" />
                                <select id="countries" name="Nacionalidad" class="block w-full p-2 mt-1 text-gray-700 bg-gray-100 border border-gray-300 rounded-md shadow-md custom-select focus:outline-none focus:border-gray-500" required>
                                    <option value="" disabled selected>Nombre del país - código del país (ISO3) - código</option>
                                    <option value="COL">COLOMBIA | COL | 170</option>
                                    <option value="ARG">ARGENTINA | ARG | 032</option>
                                    <option value="CHL">CHILE | CHL | 152</option>
                                    <option value="USA">ESTADOS UNIDOS | USA | 840</option>
                                    <option value="ESP">ESPAÑA | ESP | 724</option>
                                    <option value="ECU">ECUADOR | ECU | 218</option>
                                    <option value="CUB">CUBA | CUB | 192</option>
                                    <option value="PAN">PANAMÁ | PAN | 591</option>
                                </select>
                            </div> --}}

                            {{-- <div class="mt-4">
                                <x-label for="fecha" value="{{ __('Fecha de nacimiento *') }}" />
                                <x-input id="fecha" class="block w-full mt-1" type="date" name="fecha" required />
                            </div> --}}

                            <div class="mt-4">
                                <x-label for="genero" value="{{ __('Género') }}" />
                                <div class="flex flex-wrap gap-4 mt-2">
                                    <label class="flex items-center gap-1 cursor-pointer">
                                        <x-input type="radio" id="hombre" name="genero" value="hombre" class="hidden" />
                                        <span class="text-gray-700">{{ __('Hombre') }}</span>
                                        <span id="check-hombre" class="w-4 h-4 border border-blue-700 rounded">
                                            <i class="hidden text-white fas fa-check"></i>
                                        </span>
                                    </label>
                                    <label class="flex items-center gap-1 cursor-pointer">
                                        <x-input type="radio" id="mujer" name="genero" value="mujer" class="hidden" />
                                        <span class="text-gray-700">{{ __('Mujer') }}</span>
                                        <span id="check-mujer" class="w-4 h-4 border border-blue-700 rounded">
                                            <i class="hidden text-white fas fa-check"></i>
                                        </span>
                                    </label>
                                    <label class="flex items-center gap-1 cursor-pointer">
                                        <x-input type="radio" id="no_identificado" name="genero" value="no_identificado" class="hidden" />
                                        <span class="text-gray-700">{{ __('No Identificado') }}</span>
                                        <span id="check-no_identificado" class="w-4 h-4 border border-blue-700 rounded">
                                            <i class="hidden text-white fas fa-check"></i>
                                        </span>
                                    </label>
                                </div>
                                <div id="otroInput" class="hidden mt-4">
                                    <x-input type="text" id="otro" name="otro" class="block w-full mt-1" placeholder="{{ __('Otro...') }}" />
                                </div>
                            </div>

                            <div class="mt-4">
                                <x-label for="tipo_documento" value="{{ __('Tipo de Documento *') }}" />
                                <div class="flex gap-4 mt-1">
                                    <select id="tipo_documento" name="tipo_documento" class="block w-full p-2 text-white bg-blue-900 border-blue-900 rounded-md">
                                        <option value="" disabled selected>{{ __('Seleccione Documento') }}</option>
                                        <option value="cedula_ciudadania">{{ __('Cédula de Ciudadania') }}</option>
                                        <option value="targeta_identidad">{{ __('Targeta de Identidad') }}</option>
                                        <option value="cedula_extranjeria">{{ __('Cédula de Extranjería') }}</option>
                                        <option value="pasaporte">{{ __('Pasaporte') }}</option>
                                        <option value="visa">{{ __('Visa') }}</option>
                                        <option value="otro">{{ __('Otro') }}</option>
                                    </select>
                                    <x-input id="numero_documento" class="block w-full" type="text" name="numero_documento" placeholder="{{ __('Número de documento') }}" />
                                </div>
                            </div>

                            {{-- <div class="mt-4">
                                <x-label for="documento_pdf" value="{{ __('Documento en PDF *') }}" />
                                <div class="flex flex-col items-center justify-center p-4 mt-2 border border-blue-900 border-dashed rounded-lg">
                                    <label for="file-upload" class="text-blue-900 cursor-pointer">
                                        {{ __('Seleccionar archivo') }}
                                    </label>
                                    <input type="file" id="file-upload" name="documento_pdf" class="hidden" accept="application/pdf" required>
                                    <span class="text-sm text-gray-500">{{ __('Fotos de ambas caras del documento en PDF') }}</span>
                                </div>
                            </div> --}}

                            {{-- <div class="mt-4">
                                <x-label for="Fecha_de_Expedicion" value="{{ __('Fecha de Expedición *') }}" />
                                <x-input id="Fecha_de_Expedicion" class="block w-full mt-1" type="date" name="Fecha_de_Expedicion" required />
                            </div> --}}

                            <div class="mt-4">
                                <x-label for="email" value="{{ __('Email *') }}" />
                                <x-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required autocomplete="username" />
                            </div>

                            <div class="mt-4">
                                <x-label for="password" value="{{ __('Password *') }}" />
                                <x-input id="password" class="block w-full mt-1" type="password" name="password" required autocomplete="new-password" />
                            </div>

                            <div class="mt-4">
                                <x-label for="password_confirmation" value="{{ __('Confirmar Password *') }}" />
                                <x-input id="password_confirmation" class="block w-full mt-1" type="password" name="password_confirmation" required autocomplete="new-password" />
                            </div>

                            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                <div class="mt-4">
                                    <x-label for="terms">
                                        <div class="flex items-center">
                                            <x-checkbox name="terms" id="terms" required />
                                            <div class="ml-2">
                                                {!! __('Acepto los :terms_of_service y la :privacy_policy', [
                                                    'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="text-sm text-gray-600 underline rounded-md hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Términos de Servicio').'</a>',
                                                    'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="text-sm text-gray-600 underline rounded-md hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Política de Privacidad').'</a>',
                                                ]) !!}
                                            </div>
                                        </div>
                                    </x-label>
                                </div>
                            @endif

                            <div class="flex items-center justify-end mt-4">
                                <a class="text-sm text-gray-600 underline rounded-md hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                                    {{ __('Ya estás registrado?') }}
                                </a>

                                <x-button class="ml-4">
                                    {{ __('Registrar') }}
                                </x-button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const radioButtons = document.querySelectorAll('input[name="genero"]');
            const otroInput = document.getElementById('otroInput');

            radioButtons.forEach(radio => {
                radio.addEventListener('change', function() {
                    const checks = document.querySelectorAll('span[id^="check-"] i');
                    checks.forEach(check => check.classList.add('hidden'));

                    const selectedCheck = document.querySelector(`#check-${this.value} i`);
                    selectedCheck.classList.remove('hidden');

                    if (this.value === 'no_identificado') {
                        otroInput.classList.remove('hidden');
                    } else {
                        otroInput.classList.add('hidden');
                    }
                });
            });
        });

        function showLine(flag) {
            const lines = document.querySelectorAll('div[id$="-line"]');
            lines.forEach(line => line.classList.add('hidden'));

            const selectedLine = document.getElementById(`${flag}-line`);
            selectedLine.classList.remove('hidden');
        }
    </script>
</x-guest-layout>
