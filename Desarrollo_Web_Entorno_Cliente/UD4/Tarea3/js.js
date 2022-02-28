/* Declaracion de variables *******************************************************************************/
const palabrasBuscadas = {
    pais: ["España", "Suiza", "Portugal"],
  ranking: [
    ["Facebook", "Tuenti", "Youtube", "Hotmail", "Marca"],
    ["Facebook", "Youtube", "Hotmail", "Google", "Blick"],
    ["Facebook", "Youtube", "Hotmail", "Jogos", "Download"],
  ],
};
const tablaHead = document.querySelector(".tabla-paises thead");
const tablaBody = document.querySelector(".tabla-paises tbody");

/* Añadimos los títulos de la tabla ************************************************************************/

let titulosTabla = document.createElement("tr");

for (let i = -1, len = palabrasBuscadas.ranking[0].length; i < len; i++) {
  let thEtiqueta = document.createElement("th");
  let thContenido = i < 0 ? document.createTextNode("[País, Ranking]") : document.createTextNode(i);
  thEtiqueta.appendChild(thContenido);
  titulosTabla.appendChild(thEtiqueta);
}
tablaHead.appendChild(titulosTabla);

/* Añadmos el contenido de la tabla ************************************************************************/

for (let i = 0, lenFilas = palabrasBuscadas.ranking.length; i < lenFilas; i++) {
  let contenidoTabla = document.createElement("tr");
  let thEtiqueta = document.createElement("td");
  let thContenido = document.createTextNode(i + "(" + palabrasBuscadas.pais[i] + ")");
  thEtiqueta.appendChild(thContenido);
  contenidoTabla.appendChild(thEtiqueta);

  for (let j = 0, lenColumnas = palabrasBuscadas.ranking[i].length; j < lenColumnas; j++) {
    thEtiqueta = document.createElement("td");
    thContenido = document.createTextNode(palabrasBuscadas.ranking[i][j]);
    thEtiqueta.appendChild(thContenido);
    contenidoTabla.appendChild(thEtiqueta);
  }
  tablaBody.appendChild(contenidoTabla);
}

