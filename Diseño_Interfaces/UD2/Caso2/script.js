function posicionarObj() {
    const elem = document.querySelectorAll(".obj");
    for (let i = 0, l = elem.length; i < l; i++) {
        elem[i].style.transform = `rotateY(${i * 30}deg) translateZ(220px)`;

    }
    elem[0].addEventListener();
}

posicionarObj();
