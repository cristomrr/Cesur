<script>
  export let name = "Sin definir";
  export let link = "";
</script>

<a href={link} target="_blank">{name}</a>

<style>
  a {
    padding: 1em;
    border-radius: 15% 10%;
    box-shadow: 2px 4px 3px 0 #6b8f8d;
    background-color: #2f7392;
    text-decoration: none;
    color: #000000;
    font: bold 1em Arial, sans-serif;
    margin: 1em;
  }
  a:active {
    box-shadow: 0 0 10px 2px #d8cc2b;
    color: #61c772;
    background-color: #2f7392;
  }
</style>
