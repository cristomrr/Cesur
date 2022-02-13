(() => {
    // Añadimos Texto animado al header
    const textoAnimado = document.querySelectorAll('.info-animado');
    const textoInfo = [
        ["Uno de los mejores Grupos de todos los tiempos", "Cristo M. R.R."],
        ["Un verdadero espectáculo que no debes perder", "Javier Mechado"],
        ["Descubrimiento de la verdadera música", "Jesús Apache"],
        ["La verdadera melodía del paraíso", "Matilde socrates"],
    ];

    let index = 0;
    let len = textoInfo.length;
    setInterval(() => {
        textoAnimado[0].innerHTML = textoInfo[index][0];
        textoAnimado[1].innerHTML = textoInfo[index][1];
        index = (index >= len - 1) ? index = 0 : index += 1;
    }, 8000);

    // Añadimos vídeos de los inputs
    const videoYoutube = document.querySelector('.seccion-youtube > iframe');
    const musicasAlbum = document.querySelectorAll('.musica-mp3');
    const enlacesVideos = [
        "https://www.youtube.com/embed/l482T0yNkeo",
        "https://www.youtube.com/embed/GStgyL2Vt44",
        "https://www.youtube.com/embed/_bP6aVG6L1w",
        "https://www.youtube.com/embed/JGftIcp2SC0",
        "https://www.youtube.com/embed/c4UGLm2QjC8",
    ];

    for (let i = 0, lenVideos = enlacesVideos.length; i < lenVideos; i++) {
        musicasAlbum[i].addEventListener('click', () => {
            videoYoutube.src = enlacesVideos[i];
        });
    }

    // Añadimos info del cantante al pulsar
    const infoCantante = document.querySelector('.info-cantante');
    const nombreCantante = document.querySelector('.nombre-cantante');
    const cantantes = document.querySelectorAll('#seccion-cantantes > img');
    const nombresCantantes = [
        "Brian Johnson",
        "Dave Evans",
        "Malcolm Young",
        "PhilRudd",
        "AngusYoung",
        "CliffWilliams",
    ];

    for (let i = 0, lenCantantes = cantantes.length; i < lenCantantes; i++) {
        cantantes[i].addEventListener('click', () => {
            if (infoCantante.classList.contains('info-oculto'))
                infoCantante.classList.toggle('info-oculto');
            nombreCantante.innerHTML = nombresCantantes[i];
        });
    }
})();