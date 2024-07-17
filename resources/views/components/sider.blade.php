@vite(['resources/css/dashboard.css','resources/js/dashboard.js' ])
<div class="bg-gray-100">

    <div class="fixed top-0 left-0 z-0 h-screen transition-all duration-300 ease-in-out sidebar">
        <div style="position: relative; top: 0; left: 0;">
            <img src="{{ asset('/images/globo-terraqueo-con-mapas-de-continentes.png') }}" alt="Camg" style="width: 40px; height: 40px;">
        </div>
        <div class="drawer-content">
            <ul>
                <li>
                    <a href="/dashboard" onclick="dashboard()" class="sidebar-item">
                        <div class="icon"><img src="/images/estadisticasssssdads.png" aria-hidden="true"></div>
                        <span class="expand-text">ESTADISTICA</span>
                    </a>
                </li>
                <li>
                    <a href="/home" onclick="home()" class="sidebar-item">
                        <div class="icon"><img src="/images/envio-al-mundo-enteroeventooo.png" aria-hidden="true"></div>
                        <span class="expand-text">EVENTO</span>
                    </a>
                </li>
                <li>
                    <a href="/calendario" onclick="calendario()" class="sidebar-item">
                        <div class="icon"><img src="/images/calendarioasdhasgdhias.png" aria-hidden="true"></div>
                        <span class="expand-text">CALENDARIO</span>
                    </a>
                </li>
                <li>
                    <a href="/reporte" onclick="reporte()" class="sidebar-item">
                        <div class="icon"><img src="/images/portapapelesreporte.png" aria-hidden="true"></div>
                        <span class="expand-text">REPORTE</span>
                    </a>
                </li>
            </ul>
            <li>
                <a href="/soporte" onclick="soporte()" class="sidebar-item">
                    <div class="icon"><img src="/images/servicio-al-cliente.png" aria-hidden="true"></div>
                    <span class="expand-text">SOPORTE</span>
                </a>
            </li>
        </div>
    </div>
</div>
