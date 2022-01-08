<template>
    <Link class="nav-link" :class="{ active: $page.component === component }">
    <slot />
    </Link>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3';
export default {
    name: 'NavLink',
    components: {
        Link
    },
    props: {
        component: {
            type: String,
            default: ''
        }
    }
}
</script>