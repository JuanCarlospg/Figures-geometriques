function validarCampo(input) {
    const errorSpan = input.nextElementSibling;
    if (input.value.trim() === '') {
        errorSpan.textContent = 'El campo no puede estar vacío.';
        errorSpan.style.color = 'red';
        input.style.borderColor = 'red'; // Cambiar el borde a rojo
        return false;
    } else if (input.value <= 0) {
        errorSpan.textContent = 'El valor debe ser mayor que cero.';
        errorSpan.style.color = 'red';
        input.style.borderColor = 'red'; // Cambiar el borde a rojo
        return false;
    } else {
        errorSpan.textContent = '';
        input.style.borderColor = ''; // Restablecer el borde
        return true;
    }
}

function validarFormulario() {
    const inputs = document.querySelectorAll('input[type="number"]');
    let formularioValido = true;
    inputs.forEach(input => {
        if (!validarCampo(input)) {
            formularioValido = false;
        }
    });
    return formularioValido;
}

document.addEventListener('DOMContentLoaded', function() {
    const inputs = document.querySelectorAll('input[type="number"]');
    inputs.forEach(input => {
        input.addEventListener('blur', function() {
            validarCampo(input);
        });
    });
});
