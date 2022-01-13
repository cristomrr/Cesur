//  Instancias necesarias --------------------------------------

const inputElement = document.querySelectorAll('.input-f');
const seccionAviso = document.querySelector('.seccion-aviso');
const datosAviso = document.querySelector('.datos-aviso');
const formUD6 = document.querySelector('.form-ud6');
const datosForm = document.querySelectorAll('.input-f');
const datosTituloAviso = ['Calle', 'Número', 'Población', 'País'];
const confirmar = document.querySelector('.a-confirmar');
const cancelar = document.querySelector('.a-cancelar');

// Animación inputs --------------------------------------------

inputElement.forEach((element) => {
    element.addEventListener('keyup', () => {
        element.setAttribute('value', element.value);
    });
});

// Eventos validación formulario -------------------------------

confirmar.addEventListener('click', () => {
    seccionAviso.classList.toggle('ocultar');
    formUD6.submit();
});
cancelar.addEventListener('click', () => {
    seccionAviso.classList.toggle('ocultar');
});

formUD6.onsubmit = (evento) => {
    evento.preventDefault();
    seccionAviso.classList.toggle('ocultar');
    let datos = '';
    for (let i = 0; i < datosForm.length; i += 1) {
        datos += `<p><b>${datosTituloAviso[i]}: </b>${datosForm[i].value}</p><br>`;
    }
    datosAviso.innerHTML = datos;
};

