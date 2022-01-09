<template>
    <Link class="nav-link btn btn-link btn-outline-light" as="button">
     <slot />
    </Link>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3';
export default {
    components: {
        Link
    },
}
</script>