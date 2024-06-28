document.addEventListener('DOMContentLoaded', function() {
    const alerta = document.getElementById('alerta');
    if (alerta) {
        setTimeout(() => {
            alerta.classList.add('oculta');
        }, 2000);
    }
});
