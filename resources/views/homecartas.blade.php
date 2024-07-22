<x-app-layout>
    <div class="container px-4 mx-auto">
        <div class="flex flex-col items-center justify-between mb-6 sm:flex-row">
            <h1 class="text-3xl font-bold text-gray-800">Detalle del Evento</h1>
        </div>

        <section>
            <main>
                <div class="p-4 rounded shadow-md">
                    <h2 class="mb-2 text-xl font-bold text-gray-800">{{ $evento->Name }}</h2>
                    <p class="text-gray-600"><strong>Director:</strong> {{ $evento->Director }}</p>
                    <p class="text-gray-600"><strong>Fecha de Inicio:</strong> {{ $evento->Evento_Inicio }}</p>
                    <p class="text-gray-600"><strong>Fecha de Fin:</strong> {{ $evento->Evento_Fin }}</p>
                    <p class="text-gray-600"><strong>Actividad:</strong> {{ $evento->Actividad->nombre }}</p>
                    <p class="text-gray-600"><strong>Movilidad:</strong> {{ $evento->Movilidad->nombre }}</p>
                </div>
            </main>
        </section>
    </div>
</x-app-layout>
