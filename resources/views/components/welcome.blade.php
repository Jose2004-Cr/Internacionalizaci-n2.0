    <x-sider>
    </x-sider>
    {{-- @vite(['resources/css/dashboard.css']) --}}


<body class="bg-gray-100">
    <div class="flex justify-center min-h-screen bg-gray-100">
        <div class="flex items-center justify-center min-h-screen bg-gray-100">
            <div class="floating-button" id="floatingButton">
                <a href="/mapa" onclick="MapaGeografico()">
                    <img src="/images/sudafrica.png" alt="Botón">
                    <span class="button-text" id="buttonText">Mapa Geografico</span>
                </a>
            </div>

        </div>
        <div class="flex items-center justify-between mb-10">
            <h1 class="text-2xl font-bold"></h1>
        </div>
    </div>
</body>



