<template>
  <h2 class="display-2">Welcome to {{ appName }}</h2>

  <h2 class="display-2" style="margin-top: 200vh">{{ time }}</h2>
  <Link class="btn btn-success" href="/" preserve-scroll>Refresh</Link>
</template>
<script>
import Layout from '../Shared/Layout.vue';
export default {
  layout: Layout,
  props: {
    appName: String,
    time: String,
  },
};
</script>