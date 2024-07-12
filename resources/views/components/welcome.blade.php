<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@vite(['resources\css\bodyinicio.css','resources\js\bodyinicio.js'])

<!-- NAV -->
<x-sider>
</x-sider>

<!-- botn lateral -->
<div>
    <div class="flex justify-center min-h-screen bg-gray-600">
        <div class="flex items-center justify-center min-h-screen bg-gray-100">

            <!-- boton lateral -->
            <div class="floating-button" id="floatingButton">
                <a href="/mapa" onclick="MapaGeografico()">
                    <img src="/images/sudafrica.png" alt="Botón">
                    <span class="button-text" id="buttonText">Mapa Geografico</span>
                </a>
            </div>
        </div>

        <!-- chart -->
        <div class="grid 3xl:grid-cols-3 md:grid-cols-2 flex-wrap items-center justify-between p-10 gap-7 mb-10">
            <div class="p-10 bg-white shadow sm:rounded-lg">
                <div class="btn-group" role="group" aria-label="Year Filter">
                    <button type="button" class="btn btn-primary" onclick="updateCharts(2023)">2023</button>
                    <button type="button" class="btn btn-secondary" onclick="updateCharts(2024)">2024</button>
                </div>
                <div class="container">
                    <div class="chart-container">
                        <canvas id="barChartOut"></canvas>
                    </div>
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



