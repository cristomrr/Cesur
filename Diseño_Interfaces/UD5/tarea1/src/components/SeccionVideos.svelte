<script>
	import CardVideo from './CardVideo.svelte';
    let video = [
        {
            src: "./video/fuego.mp4",
            width: "600px"
        }
    ]
</script>

<section>
    <CardVideo src={video[0].src} width={video[0].width}/>
</section>

<style>
    section {
        display: flex;
        justify-content: center;
    }
</style>