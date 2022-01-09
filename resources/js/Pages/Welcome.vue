<template>
  <Head>
    <title>Home</title>
  </Head>
  <h2 class="display-2">Welcome to {{ appName }}</h2>
  <h2 class="display-2" style="margin-top: 200vh">{{ time }}</h2>
  <Link class="btn btn-success" href="/" preserve-scroll>Refresh</Link>
</template>
<script>
export default {
  props: {
    appName: String,
    time: String,
  },
};
</script>