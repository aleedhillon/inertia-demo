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
    <Nav :isAuthenticated="isAuthenticated"></Nav>
    <slot />
  </div>
</template>

<script>
import Nav from "../Componets/Nav.vue";
export default {
  name: "Layout",
  props: {
    isAuthenticated: Boolean
  },
  components: {
    Nav,
  },
};
</script>