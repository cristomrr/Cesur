<script>
  import Footer from "./components/Footer.svelte";
  import SeccionVideos from "./components/SeccionVideos.svelte";
  import SeccionGaleria from "./components/SeccionGaleria.svelte";
  import SeccionTabla from "./components/SeccionTabla.svelte";
  import Header from "./components/Header.svelte";
  import TitleSeccion from "./components/TitleSeccion.svelte";
</script>

<Header />
<main>
  <TitleSeccion title="Sección de usuarios registrados" />
  <SeccionTabla />
  <p>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur enim qui eaque quidem quibusdam excepturi ad
    ut maxime ratione dolorum commodi repellat, dolores ipsam, voluptate alias ab dicta necessitatibus accusantium? Est
    cum, minima rem ullam consequuntur cupiditate aliquid, nobis ipsum debitis quibusdam odit saepe. Rerum doloribus vel
    a fugit enim, nisi nam, non natus provident dolorum distinctio excepturi tempore labore.
  </p>
  <TitleSeccion title="Sección de fotos de vehículos comentados" />
  <SeccionGaleria />
  <p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, vero provident! Nobis officia sed in laudantium
    aperiam neque rerum ea sint a ullam accusantium illo debitis corrupti voluptatum, deserunt hic? Maiores hic esse
    magni cupiditate fuga incidunt earum voluptatem quisquam rerum. Velit excepturi doloribus, voluptatum quasi
    exercitationem fuga odio alias saepe quo. Ipsa quasi ipsam id iusto eligendi non maxime! Quia inventore nisi sit
    accusamus corporis distinctio blanditiis at, dicta velit unde soluta magnam in nam, magni facilis, dolorem quidem
    illum! Corrupti in eos eveniet ea mollitia ullam consequatur neque?
  </p>
  <TitleSeccion title="Sección de vídeos compartidos" />
  <SeccionVideos />
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia maiores doloremque molestiae dolore natus dolor architecto rem odit nesciunt recusandae dolorem expedita, provident exercitationem quae, nam ut, nemo perspiciatis cupiditate!
  Pariatur velit minima harum vel laborum provident nulla, dolore ab omnis assumenda est quae nesciunt tempore sapiente itaque aut sint ea maiores cum! Fuga deleniti ipsam dolor harum voluptates iste.
  Molestiae temporibus cumque tempore voluptates inventore, voluptatibus et ex expedita quae deleniti distinctio nulla, mollitia harum minus consequatur optio eaque repellat tenetur laborum consectetur sint nesciunt sunt. Voluptatibus, omnis in.
  Ad sit quae voluptatem veniam, unde saepe dolores, consequatur pariatur sed adipisci eius ratione tenetur veritatis repellat similique! Minima esse eligendi amet quo cum tenetur assumenda aliquid iste adipisci voluptatum?
  Totam doloremque nemo aliquam suscipit quod rerum sed, doloribus necessitatibus porro assumenda! Nesciunt, similique! Ipsam assumenda nisi quae, asperiores debitis quidem. Sunt quae provident veniam ipsum molestiae, esse officiis error?</p>
</main>
<Footer />

<style>
  :global(html, body) {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    min-width: 640px;
  }

  main {
    padding: 0 4em;
  }

  p {
    margin-top: 3em;
  }
</style>
