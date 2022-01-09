<template>
    <Link class="nav-link" :class="{ active: $page.component === component }">
    <slot />
    </Link>
</template>

<script>
export default {
    props: {
        component: {
            type: String,
            default: ''
        }
    }
}
</script>