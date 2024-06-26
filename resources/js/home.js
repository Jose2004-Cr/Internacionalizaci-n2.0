

const addEventButton = document.getElementById('addEventButton');
const slideInForm = document.getElementById('slideInForm');
const closeSlideInForm = document.getElementById('closeSlideInForm');
const saveEventButton = document.getElementById('saveEventButton');
const participantsList = document.getElementById('participantsList');
const addParticipantButton = document.getElementById('addParticipantButton');

addEventButton.addEventListener('click', () => {
    slideInForm.classList.add('active');
});

closeSlideInForm.addEventListener('click', () => {
    slideInForm.classList.remove('active');
});

addParticipantButton.addEventListener('click', () => {
    const participantInput = document.createElement('input');
    participantInput.type = 'text';
    participantInput.placeholder = 'Nombre del participante';
    participantInput.className = 'w-full p-2 mb-2 border border-gray-300 rounded';
    participantsList.insertBefore(participantInput, addParticipantButton);
});

saveEventButton.addEventListener('click', () => {
    const eventName = document.getElementById('eventName').value;
    const eventDirector = document.getElementById('eventDirector').value;
    const eventDate = document.getElementById('eventDate').value;

    if (eventName && eventDirector && eventDate) {
        const newEventCard = document.createElement('div');
        newEventCard.className = 'flex flex-col justify-between w-full p-6 text-white rounded-md shadow-md card bg-gradient-to-r from-blue-500 to-indigo-600';
        newEventCard.innerHTML = `
            <h3 class="text-xl font-bold">${eventName}</h3>
            <p>${eventDirector}</p>
            <p>${eventDate}</p>
        `;
        document.getElementById('eventsGrid').appendChild(newEventCard);

        slideInForm.classList.remove('active');
        document.getElementById('eventForm').reset();
        participantsList.querySelectorAll('input').forEach(input => input.remove());
    } else {
        alert('Por favor, complete todos los campos');
    }
});

// New feature: Chat with participant
function chatWith(name) {
    alert(`Iniciando chat con ${name}`);
}

// New feature: View profile
function viewProfile(name) {
    alert(`Mostrando perfil de ${name}`);
}

// New feature: Pagination functionality (example)
document.querySelectorAll('.pagination .page').forEach(page => {
    page.addEventListener('click', () => {
        document.querySelectorAll('.pagination .page').forEach(p => p.classList.remove('active'));
        page.classList.add('active');
        // Add logic to load the corresponding events for the selected page
    });
});
