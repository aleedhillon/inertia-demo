<template>
    <div class="container">
        <Nav></Nav>
        <slot />
    </div>
</template>

<script>
import Nav from "../Componets/Nav.vue"
export default {
    name: 'Layout',
    components: {
        Nav
    }
}
</script>