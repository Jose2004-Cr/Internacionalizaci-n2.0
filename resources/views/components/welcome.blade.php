<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@vite(['resources\css\bodyinicio.css','resources\js\bodyinicio.js'])
<x-sider>

    </x-sider>

<body class="bg-gray-00">
    <div class="flex justify-center min-h-screen bg-gray-600">
        <div class="flex items-center justify-center min-h-screen bg-gray-100">
            <div class="floating-button" id="floatingButton">
                <a href="/mapa" onclick="MapaGeografico()">
                    <img src="/images/sudafrica.png" alt="Botón">
                    <span class="button-text" id="buttonText">Mapa Geografico</span>
                </a>
            </div>
        </div>
        <div class="flex items-center justify-between mb-10">
        </head>
        <body>
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
</body>



