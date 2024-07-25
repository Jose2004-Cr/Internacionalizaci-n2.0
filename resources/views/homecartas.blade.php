<x-app-layout>
    @vite(['resources/css/homecartas.css'])
    <div class="container">
        <div class="header">
            <h1>Datos Del Evento</h1>
        </div>

        <section>
            <main>
                <div class="card">
                    <div class="card-item">
                        <label>Nombre del evento</label>
                        <p>{{ $evento->Name }}</p>
                    </div>
                    <div class="card-item">
                        <label>Nombre del responsable</label>
                        <p>{{ $evento->Director }}</p>
                    </div>
                    <div class="card-item">
                        <label>Tipo de actividad</label>
                        <p>{{ $evento->Actividad->nombre }}</p>
                    </div>
                    <div class="card-item">
                        <label>Tipo de Movilidad</label>
                        <p>{{ $evento->Movilidad->nombre }}</p>
                    </div>
                    <div class="card-item">
                        <label>Fecha de vencimiento</label>
                        <p class="event-date">{{ $evento->Evento_Fin }}</p>
                    </div>
                    <div class="card-item">
                        <label>Participantes</label>
                        <p>Colocar los participantes</p>
                    </div>
                    <div class="card-item">
                        <label>Personas asistidas</label>
                        <button>{{ $evento->Movilidad->nombre }}</button>
                    </div>
                    <div class="card-item">
                        <button class="edit-button">Editar</button>
                    </div>
                </div>
            </main>
        </section>
    </div>
</x-app-layout>
