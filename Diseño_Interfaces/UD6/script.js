((d) => {
  const $btnCloseNav = d.querySelector(".nav-close");
  const $navLines = d.querySelector(".hdr-nav-bottom");
  $btnCloseNav.addEventListener("click", (e) => {
    $navLines.classList.toggle("show-nav-botton");
  });

  const $btnOpenNav = d.querySelector(`.btn-show-lines`);
  $btnOpenNav.addEventListener(`click`, (e) => {
    $navLines.classList.toggle("show-nav-botton");
  });
})(document);
