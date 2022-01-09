<template>
  <nav>
    <ul class="pagination justify-content-center">
      <li
        class="page-item"
        v-for="(link, index) in links"
        :key="index"
        :class="{ disabled: !link.url, active: link.active }"
      >
        <Link class="page-link" style="outline: none;" :href="link.url" v-html="link.label" preserve-scroll ></Link>
      </li>
    </ul>
  </nav>
</template>

<script setup>
defineProps({
    links: Array
});
</script>