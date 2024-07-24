
function updateCharacterCount() {
    const textarea = document.getElementById('event-note');
    const characterCountDisplay = document.getElementById('character-count');
    const maxCharacters = 200;
    const currentLength = textarea.value.length;

    if (currentLength > maxCharacters) {
        textarea.value = textarea.value.substring(0, maxCharacters);
    }

    const charactersRemaining = maxCharacters - textarea.value.length;
    characterCountDisplay.textContent = charactersRemaining + ' caracteres restantes';

    if (charactersRemaining < 0) {
        characterCountDisplay.style.color = 'red';
    } else {
        characterCountDisplay.style.color = '';
    }
}

function resetCharacterCount() {
    const textarea = document.getElementById('event-note');
    const characterCountDisplay = document.getElementById('character-count');

    textarea.value = '';
    characterCountDisplay.textContent = maxCharacters + ' caracteres restantes';
    characterCountDisplay.style.color = '';
}

const MONTH_NAMES = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre',
    'Octubre', 'Noviembre', 'Diciembre'
];
const DAYS = ['Dom', 'Lun', 'Mar', 'Mié', 'Jue', 'Vie', 'Sáb'];

let events = [{
    hora: new Date(2023, 5, 25),
    event_title: "Evento en Español",
    event_theme: 'blue',
    nota: "Nota del evento"
}];

function init() {
    const calendarGrid = document.getElementById('calendar-grid');
    const monthName = document.getElementById('month-name');
    const year = document.getElementById('year');

    let today = new Date();
    let currentMonth = today.getMonth();
    let currentYear = today.getFullYear();

    renderCalendar(currentMonth, currentYear);

    document.getElementById('prev-month').addEventListener('click', function () {
        currentMonth = currentMonth === 0 ? 11 : currentMonth - 1;
        currentYear = currentMonth === 11 ? currentYear - 1 : currentYear;
        renderCalendar(currentMonth, currentYear);
    });

    document.getElementById('next-month').addEventListener('click', function () {
        currentMonth = currentMonth === 11 ? 0 : currentMonth + 1;
        currentYear = currentMonth === 0 ? currentYear + 1 : currentYear;
        renderCalendar(currentMonth, currentYear);
    });

    function renderCalendar(month, year) {
        calendarGrid.innerHTML = '';
        monthName.textContent = MONTH_NAMES[month];
        document.getElementById('year').textContent = year;

        const firstDay = new Date(year, month).getDay();
        const daysInMonth = new Date(year, month + 1, 0).getDate();

        for (let i = 0; i < firstDay; i++) {
            const emptyCell = document.createElement('div');
            emptyCell.className = 'px-2 py-2 text-center border-t border-r';
            emptyCell.style.width = '14.2857%';
            calendarGrid.appendChild(emptyCell);
        }

        for (let day = 1; day <= daysInMonth; day++) {
            const dateCell = document.createElement('div');
            dateCell.className = 'relative px-2 py-2 border-t border-b border-r cursor-pointer text-relative';
            dateCell.style.width = '14.2857%';
            dateCell.textContent = day;

            const eventTitleContainer = document.createElement('div');
            eventTitleContainer.className = 'mt-1 text-xs text-gray-600';
            dateCell.appendChild(eventTitleContainer);

            const currentDate = new Date(year, month, day);
            const event = events.find(e => e.hora.toDateString() === currentDate.toDateString());

            if (event) {
                const eventMarker = document.createElement('div');
                eventMarker.className = `flex items-center justify-center h-5 w-5 rounded-sm bg-${event.event_theme}-500 text-white font-bold`;
                // eventMarker.textContent = event.event_title;
                dateCell.appendChild(eventMarker);
            }

            if (currentDate.toDateString() === new Date().toDateString()) {
                dateCell.classList.add('bg-blue-100');
            }

        }
    }
}
document.addEventListener('DOMContentLoaded', init);
