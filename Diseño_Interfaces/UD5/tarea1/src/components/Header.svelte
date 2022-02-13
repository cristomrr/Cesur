<script>
  import NavBar from "./NavBar.svelte";
</script>

<header class="hdr">
  <h1>Soluciones CMRR</h1>
  <div class="navBar">
    <NavBar />
  </div>
</header>

<style>
  header {
    height: 20em;
    width: 100%;
    position: relative;
    background-image: url("../img/banner.jpg");
    display: flex;
    justify-content: center;
    align-items: center;
    box-shadow: 2px 2px 3px 0 #9c9c9c;
  }

  h1 {
      color: aliceblue;
      font: 3rem Verdana, sans-serif;
      text-shadow: 0 0 5px #FFF, 0 0 10px #FFF, 0 0 15px #FFF, 0 0 20px #49ff18, 0 0 30px #49FF18, 0 0 40px #49FF18, 0 0 55px #49FF18, 0 0 75px #49ff18
  }

  .navBar {
    position: absolute;
    bottom: 0;
    width: 100%;
  }
</style>
