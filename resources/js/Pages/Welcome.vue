<template>
  <Layout>
    <h2 class="display-2">Welcome to {{ appName }} </h2>

    <h2 class="display-2" style="margin-top: 200vh">{{ time }}</h2>
    <Link class="btn btn-success" href="/" preserve-scroll>Refresh</Link>
  </Layout>
</template>
<script>
import { Link } from "@inertiajs/inertia-vue3";
import Layout from "../Shared/Layout.vue";
export default {
  name: "Welcome",
  props: {
    appName: String,
    time: String,
  },
  components: {
    Layout,
    Link,
  },
};
</script>