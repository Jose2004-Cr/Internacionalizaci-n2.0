@vite(['resources/css/dashboard.css'])
<div class="bg-gray-100">
    <div class="fixed top-0 left-0 z-0 h-screen transition-all duration-300 ease-in-out sidebar">
        <h5 class="text-xs font-bold uppercase">Hermes</h5>
        <div class="drawer-content">
            <ul>
                <li>
                    <a href="/dashboard" onclick="dashboard()" class="sidebar-item">
                        <div class="icon"><img src="/images/estadisticassd.png" aria-hidden="true"></div>
                        <span class="expand-text">Estadística</span>
                    </a>
                </li>
                <li>
                    <a href="/home" onclick="home()" class="sidebar-item">
                        <div class="icon"><img src="/images/Eventosss.png" aria-hidden="true"></div>
                        <span class="expand-text">Home</span>
                    </a>
                </li>
                <li>
                    <a href="/calendario" onclick="calendario()" class="sidebar-item">
                        <div class="icon"><img src="/images/calendariofinal.png" aria-hidden="true"></div>
                        <span class="expand-text">Calendario</span>
                    </a>
                </li>
                <li>
                    <a href="/reporte" onclick="reporte()" class="sidebar-item">
                        <div class="icon"><img src="/images/reportesbln.png" aria-hidden="true"></div>
                        <span class="expand-text">Reportes</span>
                    </a>
                </li>
            </ul>
            <li>
                <a href="/soporte" onclick="soporte()" class="sidebar-item">
                    <div class="icon"><img src="/images/engranaje.png" aria-hidden="true"></div>
                    <span class="expand-text">Soporte</span>
                </a>
            </li>
        </div>
    </div>
</div>
