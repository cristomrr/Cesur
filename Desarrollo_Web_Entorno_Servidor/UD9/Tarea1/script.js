//  Instancias necesarias --------------------------------------
const inputElement = document.querySelector('.input-f');
const seccionAviso = document.querySelector('.seccion-aviso');
const datosAviso = document.querySelector('.datos-aviso');
const formUD9 = document.querySelector('.form-ud9');
const datosForm = document.querySelector('.input-f');
const confirmar = document.querySelector('.a-confirmar');
const cancelar = document.querySelector('.a-cancelar');

// Animación inputs --------------------------------------------

inputElement.addEventListener('keyup', () => {
    inputElement.setAttribute('value', inputElement.value);
});

// Eventos validación formulario -------------------------------

confirmar.addEventListener('click', () => {
    seccionAviso.classList.toggle('ocultar');
    formUD9.submit();
});
cancelar.addEventListener('click', () => {
    seccionAviso.classList.toggle('ocultar');
});

formUD9.onsubmit = (evento) => {
    evento.preventDefault();
    seccionAviso.classList.toggle('ocultar');
    datosAviso.innerHTML = `<p><b>Nombre usuario: </b>${datosForm.value}</p>`;
};

