<script>
  export let src,
    alt = "image",
    title = "title",
    description = "info";
</script>

<div class="container">
  <img {src} {alt} />
  <div class="info">
    <h4>{title}</h4>
    <p>{description}</p>
  </div>
</div>

<style>
  .container {
    display: flex;
    flex-direction: column;
    align-items: center;
    box-shadow: 2px 4px 3px 0 #6b8f8d;
    padding: 1em;
    margin: 1em;
    min-width: 20em;
    border: solid 1px grey;
  }

  img {
    width: 15em;
  }

  img:hover {
    filter: drop-shadow(30px 10px 4px #4444dd);
    cursor: pointer;
  }

  h4,
  p {
    text-align: center;
  }
</style>
