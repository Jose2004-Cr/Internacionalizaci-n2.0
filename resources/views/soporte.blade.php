<x-app-layout>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    @vite(['resources/js/soporte.js', 'resources/css/soporte.css'])
    <x-sider>
    </x-sider>
    <body>
        <div class="container">
            <header>
                <h1>Soporte</h1>
                <p>En caso de <strong>bugs, orientación o capacitación</strong>, por favor contactar con el equipo
                    de desarrollo</p>
            </header>
            <div class="profiles">
                <div class="profile-card">
                    <h2>Web Developer</h2>
                    <p class="name">Johan Valencia</p>
                    <p class="about">About: Backend Developer / Base De Datos</p>
                    <p><i class="fas fa-map-marker-alt"></i> Dirección: Centro de Innovación</p>
                    <p><i class="fas fa-phone-alt"></i> Phone #: + 800 - 12 12 23 52</p>
                    <div class="buttons">
                        <button class="chat" onclick="chatWith('Johan Valencia')"><i class="fas fa-comments"></i></button>
                        <button class="view-profile" onclick="viewProfile('Johan Valencia')"><i class="fas fa-user"></i>
                            View Profile</button>
                    </div>
                </div>
                <div class="profile-card">
                    <h2>Web Developer</h2>
                    <p class="name">Jose Camargo</p>
                    <p class="about">About: Web Designer / Software Developer </p>
                    <p><i class="fas fa-map-marker-alt"></i> Dirección: Centro de Innovación</p>
                    <p><i class="fas fa-phone-alt"></i> Phone #: + 800 - 12 12 23 52</p>
                    <div class="buttons">
                        <button class="chat" onclick="chatWith('Jose Camargo')"><i class="fas fa-comments"></i></button>
                        <button class="view-profile" onclick="viewProfile('Jose Camargo')"><i class="fas fa-user"></i>
                            View Profile</button>
                    </div>
                </div>
                <div class="profile-card">
                    <h2>Web Developer</h2>
                    <p class="name">Carlos Escobar</p>
                    <p class="about">About: Software Developer</p>
                    <p><i class="fas fa-map-marker-alt"></i> Dirección: Centro de Innovación</p>
                    <p><i class="fas fa-phone-alt"></i> Phone #: + 800 - 12 12 23 52</p>
                    <div class="buttons">
                        <button class="chat" onclick="chatWith('Carlos Escobar')"><i class="fas fa-comments"></i></button>
                        <button class="view-profile" onclick="viewProfile('Carlos Escobar')"><i class="fas fa-user"></i>
                            View Profile</button>
                    </div>
                </div>
                <div class="profile-card">
                    <h2>Web Developer</h2>
                    <p class="name"></p>
                    <p class="about">About: Software Developer</p>
                    <p><i class="fas fa-map-marker-alt"></i> Dirección: Centro de Innovación</p>
                    <p><i class="fas fa-phone-alt"></i> Phone #: + 800 - 12 12 23 52</p>
                    <div class="buttons">
                        <button class="chat" onclick="chatWith('Julian Santana')"><i class="fas fa-comments"></i></button>
                        <button class="view-profile" onclick="viewProfile('Julian Santana')"><i class="fas fa-user"></i>
                            View Profile</button>
                    </div>
                </div>

            </div>
            <div class="pagination">
                <button class="page active">1</button>
            </div>
        </div>
    </body>
    {{--
    chatbot --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <body>
        <div id="chatbot">
            <button id="chatbot-btn" class="chatbot-btn">
                <i class="fas fa-comments"></i>
            </button>
            <div id="chat-window" class="hidden">
                <div id="chat-header">
                    <span>Soporte Técnico</span>
                    <button id="clear-history-btn" class="clear-history-btn">Limpiar</button>
                    <button id="close-chat" class="close-chat-btn">&times;</button>
                </div>
                <div id="chat-content">
                    <div class="message bot-message">Hola! ¿En qué puedo ayudarte hoy?</div>
                </div>
                <div id="chat-input">
                    <input type="text" id="user-input" placeholder="Escribe un mensaje...">
                    <button id="send-btn"><i class="fas fa-paper-plane"></i></button>
                </div>
            </div>
        </div>
    </body>

</x-app-layout>



