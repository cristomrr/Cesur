/* eslint-disable linebreak-style */
// Instancias necesarias
const button = document.querySelector('.button-num');
const request = document.querySelector('.request');
const primes = [2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37,
    41, 43, 47, 53, 59, 61, 67, 71, 73, 79, 83, 89, 97];

/*
 Método que devuelve todos los números por lo que puede ser dividido el número pasado por parámetro.
 Si devuelve el array vacío es primo, sino no es primo al ser divisible por otro número
 */
const isPrime = (number) => {
    let divisores = [];
    //si es 0 o 1 devolveremos el array con ese número al considerarse no primos
    if (number === 0 || number === 1) {
        divisores.push(number);
        return divisores;
    }
    // en el bucle añadimos todos los número por lo que son divisibles el número del usuario
    for (let i = 2; i < number; i += 1) {
        if (number % i === 0) divisores.push(i);
    }
    return divisores;
};

// El botón utilizará el método anterior para comprobar si es primo el número introducido por prompt
button.addEventListener('click', () => {
    const num = prompt('Introduce el número: ');
    if (!/^[-]?\d+$/.test(num)) {
        alert('Eso no es un número válido, vuelve a intentarlo');
    } else if (num < 0) {
        request.innerHTML = "<p class='request-false'>Los números negativos no son Primos</p>";
    } else {
        let divisores = isPrime(parseInt(num));
        request.innerHTML = (divisores.length === 0)
            ? `<p class='request-true'>El número ${num} es Primo</p>`
            : `<p class='request-false'>El número ${num} no es Primo es divisible por: ${divisores}</p>`;
    }
});

// Pintamos burbujas animadas en el fondo del documento
for (let i = 0; i < primes.length; i += 1) {
    const bubble = document.createElement('div');
    bubble.className = 'bubble';
    bubble.innerHTML = `<p>${primes[i]}</p><img>`;
    bubble.style.left = `${Math.random() * window.screen.availWidth - 100}px`;
    bubble.style.animationDelay = `${i}s`;
    document.body.appendChild(bubble);
}
