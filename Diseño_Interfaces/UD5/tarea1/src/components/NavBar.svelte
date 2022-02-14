<script>
  import Buttom from "./Buttom.svelte";
</script>

<nav>
  <input type="image" src="./img/logo.png" alt="Menú de inicio" />
  <div class="links">
    <Buttom href="https://developer.mozilla.org/en-US/docs/Web" name="MDN" />
    <Buttom href="https://svelte.dev/" name="Svelte" />
    <Buttom href="https://jsonplaceholder.typicode.com/" name="JSONPlaceholder" />
  </div>
</nav>

<style>
  nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 1em;
  }
  input {
    height: 5em;
    filter: drop-shadow(0.2rem 0.2rem 0.5rem #fffb006e);
    border: none;
    position: sticky;
  }
</style>
