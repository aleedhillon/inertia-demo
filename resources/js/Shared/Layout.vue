<template>
  <Head>
    <title>{{ $page.props.appName }}</title>
    <meta
      type="description"
      content="This is an laravel/inertia demo application"
      head-key="description"
    />
  </Head>
  <div class="container">
    <Nav></Nav>

    <iframe
      width="100%"
      height="300"
      scrolling="no"
      frameborder="no"
      allow="autoplay"
      src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/590159979&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"
    ></iframe>
    <div
      style="
        font-size: 10px;
        color: #cccccc;
        line-break: anywhere;
        word-break: normal;
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
        font-family: Interstate, Lucida Grande, Lucida Sans Unicode, Lucida Sans,
          Garuda, Verdana, Tahoma, sans-serif;
        font-weight: 100;
      "
    >
      <a
        href="https://soundcloud.com/dharmaworldwide"
        title="Dharma Worldwide"
        target="_blank"
        style="color: #cccccc; text-decoration: none"
        >Dharma Worldwide</a
      >
      ·
      <a
        href="https://soundcloud.com/dharmaworldwide/randall-wahran"
        title="Randall - Wahran"
        target="_blank"
        style="color: #cccccc; text-decoration: none"
        >Randall - Wahran</a
      >
    </div>
    <slot />
  </div>
</template>

<script>
import Nav from "../Componets/Nav.vue";
export default {
  name: "Layout",
  components: {
    Nav,
  },
};
</script>