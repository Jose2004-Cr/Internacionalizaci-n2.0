function chatWith(name) {
    alert(`Iniciando chat con ${name}`);
}

function viewProfile(name) {
    alert(`Mostrando perfil de ${name}`);
}
// chatbot
document.getElementById('chatbot-btn').addEventListener('click', function() {
    const chatWindow = document.getElementById('chat-window');
    chatWindow.classList.remove('hidden');
    setTimeout(() => chatWindow.style.transform = 'scale(1)', 0);
    this.classList.add('hidden');
});

document.getElementById('close-chat').addEventListener('click', function() {
    const chatWindow = document.getElementById('chat-window');
    chatWindow.style.transform = 'scale(0)';
    setTimeout(() => {
        chatWindow.classList.add('hidden');
        document.getElementById('chatbot-btn').classList.remove('hidden');
    }, 300);
});

document.getElementById('send-btn').addEventListener('click', function() {
    sendMessage();
});

document.getElementById('user-input').addEventListener('keypress', function(e) {
    if (e.key === 'Enter') {
        sendMessage();
    }
});

document.getElementById('clear-history-btn').addEventListener('click', function() {
    clearChatHistory();
});

function sendMessage() {
    const userInput = document.getElementById('user-input');
    const message = userInput.value.trim();
    if (message) {
        addMessage('user-message', message);
        userInput.value = '';
        setTimeout(() => {
            showTypingIndicator();
            setTimeout(() => {
                hideTypingIndicator();
                const botResponse = getBotResponse(message);
                addMessage('bot-message', botResponse);
            }, 1000);
        }, 500);
    }
}

function addMessage(className, text) {
    const chatContent = document.getElementById('chat-content');
    const messageDiv = document.createElement('div');
    messageDiv.className = 'message ' + className;
    messageDiv.textContent = text;
    chatContent.appendChild(messageDiv);
    chatContent.scrollTop = chatContent.scrollHeight;
    updateChatHistory();
}

function showTypingIndicator() {
    const chatContent = document.getElementById('chat-content');
    const typingIndicator = document.createElement('div');
    typingIndicator.className = 'typing-indicator';
    typingIndicator.innerHTML = '<span class="dot"></span><span class="dot"></span><span class="dot"></span>';
    typingIndicator.id = 'typing-indicator';
    chatContent.appendChild(typingIndicator);
    chatContent.scrollTop = chatContent.scrollHeight;
}

function hideTypingIndicator() {
    const typingIndicator = document.getElementById('typing-indicator');
    if (typingIndicator) {
        typingIndicator.remove();
    }
}
function getBotResponse(message) {
    const responses = {
        'hola': '¡Hola! ¿Cómo estás? ¿En qué puedo ayudarte hoy?',
        'adiós': '¡Adiós! Que tengas un buen día. Si necesitas más ayuda, no dudes en volver.',
        'cómo estás': 'Estoy bien, gracias por preguntar. ¿Tienes algún problema con la plataforma?',
        'qué puedes hacer': 'Puedo ayudarte con problemas técnicos, consultas académicas, y soporte general.',
        'necesito ayuda': 'Claro, ¿qué tipo de ayuda necesitas? ¿Puedes darme más detalles?',
        'problema técnico': 'Por favor, describe el problema técnico que estás experimentando y te ayudaré a solucionarlo.',
        'mantenimiento': '¿Qué tipo de mantenimiento necesitas? Puedo asistirte con actualizaciones, ajustes, y revisiones del sistema.',
        'soporte': 'Estoy aquí para brindarte soporte. ¿Cuál es tu consulta?',
        'error en la página': 'Lamento escuchar eso. ¿Puedes describir el error que estás viendo en la página?',
        'no funciona el botón': 'Vamos a revisar eso. ¿Cuál botón no está funcionando y qué debería hacer?',
        'la página no carga': 'Entiendo. ¿Has probado recargar la página o limpiar el caché del navegador?',
        'problemas de conexión': 'Podría ser un problema de red. ¿Estás conectado a Internet?',
        'actualización': '¿Necesitas ayuda con una actualización específica? Puedo guiarte a través del proceso.',
        'configuración': '¿Hay algún ajuste en particular que necesites configurar? Puedo ayudarte con la configuración de la plataforma.',
        'reiniciar': 'Reiniciar puede solucionar muchos problemas. ¿Has intentado apagar y encender la máquina?',
        'soporte técnico': 'Estoy aquí para soporte técnico. Por favor, describe tu problema para que pueda asistirte mejor.',
        'acceso denegado': 'Verifiquemos tus credenciales. ¿Estás seguro de que tu usuario y contraseña son correctos?',
        'olvidé mi contraseña': 'Puedes restablecer tu contraseña haciendo clic en "¿Olvidaste tu contraseña?" en la página de inicio de sesión.',
        'error de servidor': 'Lamento escuchar eso. Estamos trabajando para solucionar el problema. Por favor, intenta nuevamente más tarde.',
        'no puedo acceder a mis cursos': 'Vamos a verificar eso. ¿Puedes proporcionarme tu ID de estudiante y el curso al que intentas acceder?',
        'mi cuenta está bloqueada': 'Lamentamos el inconveniente. Por favor, contacta al soporte técnico para desbloquear tu cuenta.',
        'problemas con el correo electrónico': '¿Qué tipo de problemas estás teniendo con el correo electrónico?',
        'el video no se reproduce': '¿Has comprobado tu conexión a Internet y actualizado tu navegador a la última versión?',
        'necesito asistencia con el foro': 'Claro, ¿qué tipo de asistencia necesitas con el foro?',
        'error al subir archivos': 'Asegúrate de que el archivo no exceda el tamaño máximo permitido y que esté en el formato correcto.',
        'cómo cambio mi contraseña': 'Puedes cambiar tu contraseña en la configuración de tu cuenta.',
        'no recibo notificaciones': 'Verifica que las notificaciones estén habilitadas en tu configuración y que no estén siendo bloqueadas por tu correo electrónico.',
        'cómo me inscribo en un curso': 'Puedes inscribirte en un curso desde el catálogo de cursos en la plataforma.',
        'problemas con el chat': '¿Podrías especificar qué tipo de problemas estás teniendo con el chat?',
        'no puedo ver mis calificaciones': 'Vamos a revisar eso. ¿Puedes decirme en qué curso estás teniendo problemas para ver tus calificaciones?',
        'necesito ayuda con el calendario': 'Claro, ¿qué tipo de ayuda necesitas con el calendario?',
        'cómo descargo materiales del curso': 'Puedes descargar materiales del curso desde la sección de recursos del curso.',
        'no puedo enviar mensajes': 'Verifiquemos tu configuración de mensajes y asegúrate de no estar bloqueado por el destinatario.',
        'cómo participo en una discusión': 'Puedes participar en una discusión haciendo clic en el tema de discusión y publicando tu comentario.',
        'no puedo unirme a una videoconferencia': 'Asegúrate de tener una conexión a Internet estable y de que tu cámara y micrófono estén funcionando correctamente.',
        'error de autenticación': 'Por favor, verifica tu usuario y contraseña. Si el problema persiste, restablece tu contraseña.',
        'problemas con el registro': '¿Puedes describir el problema que estás teniendo con el registro?',
        'cómo actualizo mi perfil': 'Puedes actualizar tu perfil desde la sección de configuración de tu cuenta.',
        'no puedo abrir documentos': 'Asegúrate de tener el software necesario para abrir los documentos. ¿Podrías decirme el formato del documento?',
        'cómo contacto a un profesor': 'Puedes contactar a un profesor a través del sistema de mensajería de la plataforma.',
        'mi cuenta fue hackeada': 'Lamentamos escuchar eso. Por favor, contacta al soporte técnico inmediatamente para asegurar tu cuenta.',
        'problemas con el acceso móvil': '¿Podrías especificar qué problemas estás teniendo con el acceso desde un dispositivo móvil?',
        'cómo restablezco mi contraseña': 'Puedes restablecer tu contraseña haciendo clic en "¿Olvidaste tu contraseña?" en la página de inicio de sesión.',
        'no puedo descargar la app': 'Asegúrate de tener suficiente espacio en tu dispositivo y de estar conectado a Internet.',
        'cómo activo mi cuenta': 'Deberías haber recibido un correo electrónico de activación. ¿Podrías verificar tu bandeja de entrada y correo no deseado?',
        'no puedo ver las tareas': 'Vamos a verificar eso. ¿Puedes decirme en qué curso no puedes ver las tareas?',
        'problemas con la sincronización': 'Asegúrate de estar conectado a Internet y de que tu dispositivo esté correctamente sincronizado con la plataforma.',
        'cómo utilizo las herramientas de colaboración': 'Puedes utilizar las herramientas de colaboración desde la sección correspondiente en tu curso.',
        'problemas con la autenticación en dos pasos': 'Verifica que tu dispositivo esté configurado correctamente para la autenticación en dos pasos.',
        'cómo accedo a mis calificaciones': 'Puedes acceder a tus calificaciones desde la sección de calificaciones de tu curso.',
        'no recibo correos de la plataforma': 'Verifica tu carpeta de correo no deseado y asegúrate de que las notificaciones estén habilitadas.',
        'error al abrir enlaces': 'Asegúrate de que tu navegador esté actualizado y que los enlaces no estén bloqueados por tu red.',
        'cómo creo una cuenta': 'Puedes crear una cuenta desde la página de registro en la plataforma.',
        'problemas con la carga de páginas': 'Podría ser un problema de conexión. Intenta recargar la página o utilizar otro navegador.',
        'cómo edito mi perfil': 'Puedes editar tu perfil desde la sección de configuración de tu cuenta.',
        'problemas con la videollamada': 'Asegúrate de tener una conexión a Internet estable y de que tu cámara y micrófono estén funcionando correctamente.',
        'cómo accedo a los recursos del curso': 'Puedes acceder a los recursos del curso desde la sección de recursos del curso.',
        'no puedo ver las lecciones en línea': 'Asegúrate de tener una conexión a Internet estable y de que tu navegador esté actualizado.',
        'problemas con el chat en vivo': 'Verifiquemos tu conexión a Internet y asegúrate de que no haya bloqueos en tu red.',
        'cómo participo en los foros': 'Puedes participar en los foros desde la sección de foros de tu curso.',
        'problemas con la biblioteca en línea': '¿Podrías especificar qué problemas estás teniendo con la biblioteca en línea?',
        'cómo realizo un examen en línea': 'Puedes realizar un examen en línea desde la sección de evaluaciones de tu curso.',
        'no puedo ver los anuncios del curso': 'Verifiquemos tu configuración de notificaciones y asegúrate de estar inscrito en el curso correctamente.',
        'problemas con la visualización de videos': 'Asegúrate de tener una conexión a Internet estable y de que tu navegador esté actualizado.',
        'cómo me comunico con otros estudiantes': 'Puedes comunicarte con otros estudiantes a través del sistema de mensajería de la plataforma.',
        'problemas con la carga de archivos': 'Asegúrate de que el archivo no exceda el tamaño máximo permitido y que esté en el formato correcto.',
        'cómo accedo a la asistencia técnica': 'Puedes acceder a la asistencia técnica a través del sistema de soporte de la plataforma.',
        'problemas con la autenticación': 'Verifica tu usuario y contraseña. Si el problema persiste, restablece tu contraseña.',
        'cómo accedo a mis mensajes': 'Puedes acceder a tus mensajes desde la sección de mensajería de tu cuenta.',
        'problemas con el sistema de mensajería': '¿Podrías especificar qué problemas estás teniendo con el sistema de mensajería?',
        'cómo utilizo las herramientas de evaluación': 'Puedes utilizar las herramientas de evaluación desde la sección correspondiente en tu curso.',
        'problemas con el sistema de calificaciones': 'Vamos a verificar eso. ¿Puedes proporcionarme más detalles sobre el problema que estás teniendo?',
        'cómo configuro las notificaciones': 'Puedes configurar las notificaciones desde la sección de configuración de tu cuenta.',
        'problemas con la inscripción en cursos': '¿Puedes describir el problema que estás teniendo con la inscripción en cursos?',
        'cómo accedo a los informes de progreso': 'Puedes acceder a los informes de progreso desde la sección de calificaciones de tu curso.',
        'problemas con el sistema de asistencia': 'Vamos a revisar eso. ¿Puedes proporcionar más detalles sobre el problema que estás teniendo?',
        'cómo utilizo las herramientas de comunicación': 'Puedes utilizar las herramientas de comunicación desde la sección correspondiente en tu curso.',
        'problemas con el sistema de tareas': 'Asegúrate de que las tareas estén correctamente asignadas y de que tengas acceso al curso.',
        'cómo me registro en un evento': 'Puedes registrarte en un evento desde la sección de eventos en la plataforma.',
        'problemas con el acceso a eventos': 'Verifiquemos tu inscripción al evento y asegúrate de tener una conexión a Internet estable.',
        'cómo accedo a los materiales del curso': 'Puedes acceder a los materiales del curso desde la sección de recursos del curso.',
        'problemas con la descarga de archivos': 'Asegúrate de tener suficiente espacio en tu dispositivo y de estar utilizando un navegador compatible.',
        'cómo utilizo las herramientas de videoconferencia': 'Puedes utilizar las herramientas de videoconferencia desde la sección correspondiente en tu curso.',
        'problemas con el acceso a videoconferencias': 'Asegúrate de tener una conexión a Internet estable y de que tu cámara y micrófono estén funcionando correctamente.',
        'cómo participo en una videollamada': 'Puedes unirte a una videollamada desde el enlace proporcionado en tu curso o evento.',
        'problemas con la grabación de clases': '¿Podrías especificar qué problemas estás teniendo con la grabación de clases?',
        'cómo accedo a las grabaciones de clases': 'Puedes acceder a las grabaciones de clases desde la sección de recursos de tu curso.',
        'problemas con la visualización de grabaciones': 'Asegúrate de tener una conexión a Internet estable y de que tu navegador esté actualizado.',
        'cómo me registro para una nueva cuenta': 'Puedes registrarte para una nueva cuenta desde la página de registro en la plataforma.',
        'problemas con el acceso al portal de estudiantes': 'Verifiquemos tus credenciales y asegúrate de estar utilizando el enlace correcto para el portal de estudiantes.',
        'cómo obtengo asistencia técnica': 'Puedes obtener asistencia técnica a través del sistema de soporte de la plataforma.',
        'problemas con el acceso a exámenes': 'Asegúrate de estar inscrito en el curso y de que el examen esté disponible.',
        'cómo accedo a los exámenes': 'Puedes acceder a los exámenes desde la sección de evaluaciones de tu curso.',
        'problemas con la conexión a la plataforma': 'Asegúrate de tener una conexión a Internet estable y de que no haya bloqueos en tu red.',
        'cómo obtengo soporte académico': 'Puedes obtener soporte académico a través del sistema de soporte de la plataforma o contactando a tu profesor.',
        'problemas con la entrega de tareas': 'Asegúrate de que las tareas estén correctamente asignadas y de que tengas acceso al curso.',
        'cómo accedo a las herramientas de aprendizaje': 'Puedes acceder a las herramientas de aprendizaje desde la sección correspondiente en tu curso.',
        'problemas con el acceso a recursos': 'Verifiquemos tu inscripción en el curso y asegúrate de tener una conexión a Internet estable.',
        'cómo obtengo ayuda con la plataforma': 'Puedes obtener ayuda con la plataforma a través del sistema de soporte o consultando la sección de ayuda en línea.',
        'problemas con el sistema de inscripción': 'Vamos a revisar eso. ¿Puedes proporcionar más detalles sobre el problema que estás teniendo con la inscripción?',
    };

    return responses[message.toLowerCase()] || 'Lamentablemente, en este momento no puedo asistirte directamente debido a mis capacidades limitadas. Sin embargo, puedes enviar una solicitud a través del siguiente enlace, y estaré encantado de ayudarte tan pronto como sea posible:  https://tecnologicocomfenalco.edu.co/solicitudes-academicas-tecnologico-comfenalco/ .';
}


function updateChatHistory() {
    const chatContent = document.getElementById('chat-content').innerHTML;
    localStorage.setItem('chatHistory', chatContent);
}

function loadChatHistory() {
    const chatHistory = localStorage.getItem('chatHistory');
    if (chatHistory) {
        document.getElementById('chat-content').innerHTML = chatHistory;
    }
}

function clearChatHistory() {
    localStorage.removeItem('chatHistory');
    document.getElementById('chat-content').innerHTML = '<div class="message bot-message">Hola! ¿En qué puedo ayudarte hoy?</div>';
}

window.onload = loadChatHistory;
