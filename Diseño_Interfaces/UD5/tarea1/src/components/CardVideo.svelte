<script>
  export let src, width;
</script>

<video {width} controls>
  <source {src} type="video/mp4"/>
  <track default kind="captions" srclang="es"/>
  Tu navegador no soporta este formato de vídeo.
</video>

<style>
    video {
        box-shadow: 2px 4px 3px 0 #6b8f8d;
        max-width: 95%;
    }
</style>
