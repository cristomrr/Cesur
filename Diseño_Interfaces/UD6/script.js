((d) => {
  // Acción botón líneas autobuces mobile
  const $btnCloseNav = d.querySelector(`.nav-close`);
  const $navLines = d.querySelector(`.hdr-nav-bottom`);
  const $btnOpenNav = d.querySelector(`.btn-show-lines`);

  $btnCloseNav.addEventListener(`click`, (e) => {
    $navLines.classList.toggle(`show-nav-botton`);
  });

  $btnOpenNav.addEventListener(`click`, (e) => {
    $navLines.classList.toggle(`show-nav-botton`);
  });

  // Busqueda de líneas y horarios
  const $inputFrom = d.querySelector(`#from`);
  const $inputTo = d.querySelector(`#to`);
  const $fChange = d.querySelector(`.f-change img`);
  $fChange.addEventListener(`click`, (e) => {
    let from = $inputFrom.value;
    let to = $inputTo.value;
    $inputFrom.value = to;
    $inputTo.value = from;
  });
})(document);
