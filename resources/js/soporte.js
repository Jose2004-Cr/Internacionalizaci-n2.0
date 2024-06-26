function chatWith(name) {
    alert(`Iniciando chat con ${name}`);
}

function viewProfile(name) {
    alert(`Mostrando perfil de ${name}`);
}
// chatbot
document.getElementById('chatbot-btn').addEventListener('click', function() {
    document.getElementById('chat-window').classList.remove('hidden');
    this.classList.add('hidden');
});

document.getElementById('close-chat').addEventListener('click', function() {
    document.getElementById('chat-window').classList.add('hidden');
    document.getElementById('chatbot-btn').classList.remove('hidden');
});

document.getElementById('send-btn').addEventListener('click', function() {
    sendMessage();
});

document.getElementById('user-input').addEventListener('keypress', function(e) {
    if (e.key === 'Enter') {
        sendMessage();
    }
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
        'cómo estás': 'Estoy bien, gracias por preguntar. ¿Tienes algún problema con la máquina?',
        'qué puedes hacer': 'Puedo ayudarte con problemas técnicos, consultas de mantenimiento, y soporte general.',
        'necesito ayuda': 'Claro, ¿qué tipo de ayuda necesitas? ¿Puedes darme más detalles?',
        'problema técnico': 'Por favor, describe el problema técnico que estás experimentando y te ayudaré a solucionarlo.',
        'mantenimiento': '¿Qué tipo de mantenimiento necesitas? Puedo asistirte con limpieza, ajustes, y revisiones de sistema.',
        'soporte': 'Estoy aquí para brindarte soporte. ¿Cuál es tu consulta?',
        'error en la página': 'Lamento escuchar eso. ¿Puedes describir el error que estás viendo en la página?',
        'no funciona el botón': 'Vamos a revisar eso. ¿Cuál botón no está funcionando y qué debería hacer?',
        'la página no carga': 'Entiendo. ¿Has probado recargar la página o limpiar el caché del navegador?',
        'problemas de conexión': 'Podría ser un problema de red. ¿Estás conectado a Internet?',
        'actualización': '¿Necesitas ayuda con una actualización específica? Puedo guiarte a través del proceso.',
        'configuración': '¿Hay algún ajuste en particular que necesites configurar? Puedo ayudarte con la configuración de la máquina.',
        'reiniciar': 'Reiniciar puede solucionar muchos problemas. ¿Has intentado apagar y encender la máquina?',
        'soporte técnico': 'Estoy aquí para soporte técnico. Por favor, describe tu problema para que pueda asistirte mejor.'
    };
    const response = responses[message.toLowerCase()] || 'Lo siento, no entiendo tu pregunta. ¿Puedes ser más específico?';
    return response;
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

window.onload = loadChatHistory;
