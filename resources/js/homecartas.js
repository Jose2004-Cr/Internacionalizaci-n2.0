
            function enableEditMode() {
                document.getElementById("nombreEvento").readOnly = false;
                document.getElementById("tipoActividad").readOnly = false;
                document.getElementById("nombreResponsable").readOnly = false;
                document.getElementById("fechaVencimiento").readOnly = false;
                document.getElementById("deleteButton").classList.remove('hidden');
                document.getElementById("saveButton").classList.remove('hidden');
                document.getElementById("editButton").classList.add('hidden');
            }

            function saveChanges() {
                document.getElementById("nombreEvento").readOnly = true;
                document.getElementById("tipoActividad").readOnly = true;
                document.getElementById("nombreResponsable").readOnly = true;
                document.getElementById("fechaVencimiento").readOnly = true;
                document.getElementById("deleteButton").classList.add('hidden');
                document.getElementById("saveButton").classList.add('hidden');
                document.getElementById("editButton").classList.remove('hidden');
            }

            function deleteData() {
                if (confirm("¿Estás seguro de que quieres eliminar este evento?")) {
                    alert("Evento eliminado");
                }
            }

            function addParticipant() {
                const participantName = document.getElementById("participantes").value.trim();
                if (participantName) {
                    const participantList = document.getElementById("participantList");
                    const participantCount = participantList.children.length;

                    if (participantCount < 10) {
                        const participantDiv = document.createElement("div");
                        participantDiv.classList.add("flex", "items-center", "justify-between", "bg-blue-500", "text-white",
                            "p-0", "rounded-md", "w-20");

                        const nameSpan = document.createElement("span");
                        nameSpan.textContent = participantName;
                        participantDiv.appendChild(nameSpan);

                        const removeButton = document.createElement("button");
                        removeButton.classList.add("text-red-500", "hover:text-red-700", "focus:outline-none", "ml-2");
                        removeButton.textContent = "×";
                        removeButton.onclick = function() {
                            participantDiv.remove();
                            updateParticipantCounter();
                        };

                        participantDiv.appendChild(removeButton);
                        participantList.appendChild(participantDiv);
                        document.getElementById("participantes").value = "";
                        updateParticipantCounter();
                    } else {
                        alert("Máximo 10 participantes alcanzado");
                    }
                }
            }

            function updateParticipantCounter() {
                const participantList = document.getElementById("participantList");
                const participantCount = participantList.children.length;
                document.getElementById("participantCount").textContent = `| ${participantCount} de 10`;
                document.getElementById("addParticipantButton").disabled = participantCount >= 10;
            }

            document.getElementById("participantes").addEventListener("input", function() {
                const participantName = document.getElementById("participantes").value.trim();
                document.getElementById("addParticipantButton").disabled = !participantName;
            });

            updateParticipantCounter(); // Llamada inicial para establecer el estado del botón

//certificado
document.addEventListener('DOMContentLoaded', function () {
    const participants = [
        { nombre: "Juan Pérez", asistio: "Sí", certificado: "No", correo: "juan.perez@example.com" },
        { nombre: "Ana Gómez", asistio: "Sí", certificado: "Sí", correo: "ana.gomez@example.com" },
        // Agrega más participantes según sea necesario
    ];

    const participantTable = document.getElementById('participantTable');
    const searchInput = document.getElementById('searchInput');
    const certificarBtn = document.getElementById('certificarBtn');

    function renderTable(data) {
        participantTable.innerHTML = '';
        data.forEach(participant => {
            const row = document.createElement('tr');
            row.innerHTML = `
                <td class="px-6 py-3 text-left">${participant.nombre}</td>
                <td class="px-6 py-3 text-left">${participant.asistio}</td>
                <td class="px-6 py-3 text-left">${participant.certificado}</td>
                <td class="px-6 py-3 text-left">${participant.correo}</td>
            `;
            participantTable.appendChild(row);
        });
    }

    function filterTable() {
        const query = searchInput.value.toLowerCase();
        const filteredParticipants = participants.filter(participant =>
            participant.nombre.toLowerCase().includes(query) ||
            participant.correo.toLowerCase().includes(query)
        );
        renderTable(filteredParticipants);
    }

    searchInput.addEventListener('input', filterTable);

    certificarBtn.addEventListener('click', function () {
        const link = document.createElement('a');
        link.href = 'ruta/a/tu/plantilla_de_certificado.pdf';
        link.download = 'Certificado.pdf';
        link.click();
    });

    // Inicializa la tabla con todos los participantes
    renderTable(participants);
});



