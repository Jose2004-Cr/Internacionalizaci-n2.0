
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@vite(['resources/css/bodyinicio.css', 'resources/js/bodyinicio.js'])

<!-- NAV -->

<!-- botn lateral -->
<div >
    <div>
        <!-- boton lateral -->
        <div class="floating-button" id="floatingButton">
            <a href="/mapa" onclick="MapaGeografico()">
                <img src="/images/sudafrica.png" alt="Botón">
                <span class="button-text" id="buttonText">Mapa Geografico</span>
            </a>
        </div>
    </div>
    <!-- chart -->
    <div class="grid p-10 mb-10 4xl:grid-cols-4 md:grid-cols-2 gap-7">
        <div class="p-10 bg-white shadow sm:rounded-lg">
            <div class="chart-container">
                <canvas id="barChartOut"></canvas>
            </div>
        </div>
        <div class="p-10 bg-white shadow sm:rounded-lg">
            <div class="chart-container">
                <canvas id="lineChartIn"></canvas>
            </div>
        </div>
        <div class="p-10 bg-white shadow sm:rounded-lg">
            <div class="chart-container-full">
                <canvas id="pieChart"></canvas>
            </div>
        </div>
    </div>
</div>
</div>
