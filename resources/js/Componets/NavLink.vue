<template>
    <Link class="nav-link" :class="{ active: $page.component === component }">
    <slot />
    </Link>
</template>

<script>
export default {
    name: 'NavLink',
    props: {
        component: {
            type: String,
            default: ''
        }
    }
}
</script>