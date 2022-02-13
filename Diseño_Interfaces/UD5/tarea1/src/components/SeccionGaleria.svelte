<script>
  import CardImage from "./CardImage.svelte";
  let photos = [
    {
      title: "Harley Davison",
      description: "Motocicleta Harley de la serie A",
      src: "./img/moto/harley.png",
      alt: "Moto Harley Davison de color verde y negra",
    },
    {
      title: "Honda Cross",
      description: "Motocicleta de Cross Honda vailon",
      src: "./img/moto/cross.png",
      alt: "Moto Honda de cross de color roja con diseño ligero",
    },
    {
      title: "Moto custom",
      description: "Motocicleta custom de diseño personalizado",
      src: "./img/moto/custom.png",
      alt: "Moto custom americana roja de rueda trasera ancha con rubia al frente",
    },
  ];
</script>

<section>
  {#each photos as { title, description, src, alt }}
    <CardImage {src} {title} {description} {alt} />
  {/each}
</section>

<style>
  section {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
  }
</style>
