<x-app-layout>
    <x-slot name="header">
    </x-slot>

    <script src="https://cdn.tailwindcss.com"></script>

    <body class="flex">
        <nav class="fixed top-0 left-0 h-screen p-3 text-white bg-[#0f293e] w-55">
            <ul>
                <li class="mb-2 font-bold text-gray-400">AJUSTES DE USUARIO</li>
                <hr><BR>
                <li><button class="block w-full p-2 text-left hover:bg-gray-700" onclick="showContent('mi-cuenta')">Mi
                        cuenta</button></li>

                <li><button class="block w-full p-2 text-left hover:bg-gray-700"
                        onclick="showContent('privacidad')">Privacidad y seguridad</button></li>

                <li class="mt-4 font-bold text-gray-400">AJUSTES DE APLICACION</li>
                <hr><BR>
                <li><button class="block w-full p-2 text-left hover:bg-gray-700"
                        onclick="showContent('Apariencia')">Apariencia</button></li>
                <li><button class="block w-full p-2 text-left hover:bg-gray-700"
                        onclick="showContent('Idiomas')">Idiomas</button></li>
                <li class="mt-4 font-bold text-gray-400">AJUSTES DE ACTIVIDADES</li>
                <hr><BR>

                <li><button class="block w-full p-2 text-left hover:bg-gray-700"
                        onclick="showContent('Avanzado')">Configuracion Avanzada</button></li>
                <li><button class="block w-full p-2 text-left hover:bg-gray-700"

                        onclick="showContent('Roles')">Roles</button></li>
                <li><button class="block w-full p-2 text-left hover:bg-gray-700"
                        onclick="showContent('Permisos')">Permisos</button></li>

            </ul>
        </nav>

        <div id="content" class="p-10 ml-64 max-w-7xl">
            <div id="mi-cuenta" class="hidden">
                <div class="p-10 bg-white shadow sm:rounded-lg">
                    @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                        <div class="mb-8">
                            @livewire('profile.update-profile-information-form')
                        </div>
                        <x-section-border />
                    @endif

                    @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                        <div class="mt-10 mb-8 sm:mt-0">
                            @livewire('profile.update-password-form')
                        </div>
                        <x-section-border />
                    @endif



                </div>
            </div>
            <div id="perfiles" class="hidden">
                <div class="p-10 bg-white shadow sm:rounded-lg">
                    Contenido para Perfiles
                </div>
            </div>
            <div id="privacidad" class="hidden">
                <div class="p-10 bg-white shadow sm:rounded-lg">
                    @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                        <div class="mt-10 mb-8 sm:mt-0">
                            @livewire('profile.two-factor-authentication-form')
                        </div>
                        <x-section-border />
                    @endif

                    <div class="mt-10 mb-8 sm:mt-0">
                        @livewire('profile.logout-other-browser-sessions-form')
                    </div>

                </div>
            </div>
            <div id="Apariencia" class="hidden">
                <div class="p-10 bg-white shadow sm:rounded-lg">
                    Contenido De Apariencia
                </div>
            </div>
            <div id="Idiomas" class="hidden">
                <div class="p-10 bg-white shadow sm:rounded-lg">
                    Contenido De Idiomas
                </div>
            </div>
            <div id="Roles" class="hidden">
                <div class="p-10 bg-white shadow sm:rounded-lg">
                    Contenido De Roles
                </div>
            </div>
            <div id="Permisos" class="hidden">
                <div class="p-10 bg-white shadow sm:rounded-lg">
                    Contenido De Permisos
                </div>
            </div>
            <div id="Avanzado" class="hidden">
                <div class="p-10 bg-white shadow sm:rounded-lg">
                    @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                        <x-section-border />
                        <div class="mt-10 mb-8 sm:mt-0">
                            @livewire('profile.delete-user-form')
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <script>
            function showContent(sectionId) {
                // Ocultar todos los contenidos
                document.querySelectorAll('#content > div').forEach(div => {
                    div.classList.add('hidden');
                });

                // Mostrar el contenido seleccionado
                document.getElementById(sectionId).classList.remove('hidden');
            }

            // Mostrar el contenido inicial (por ejemplo, Mi cuenta)
            showContent('mi-cuenta');
        </script>
    </body>
</x-app-layout>
