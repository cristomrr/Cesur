(function (d) {
    const titulares = d.querySelectorAll('.c_t a');
    let mensaje_titulares = titulares.length + ' titulares del periodico El Pais:\n\n';

    for (const titular of titulares) {
        mensaje_titulares += titular.textContent + '\n\n';
    }
    alert(mensaje_titulares);
    console.log(mensaje_titulares);
}(document));

let a = 3
  b=2
c=a+b

console.log(c) //?


