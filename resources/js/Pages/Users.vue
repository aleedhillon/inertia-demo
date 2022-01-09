<template>
  <Head>
    <title>Users</title>
    <meta
      type="description"
      content="This is an inertia users page"
      head-key="description"
    />
  </Head>
  <h2 class="display-2">Users</h2>

  <div class="container">
    <ul class="list-group">
      <li class="list-group-item" v-for="user in users" :key="user.id">
        {{ user.name }}
      </li>
    </ul>
  </div>
</template>

<script setup>
defineProps({
  users: Array,
});
</script>