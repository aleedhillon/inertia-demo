<template>
    <div>
        <h1>Welcome To {{ appName }}</h1>
        <Nav></Nav>
    </div>
</template>
<script>
import Nav from '../Componets/Nav.vue';
export default {
    name: 'Welcome',
    props: {
        appName: String
    },
    components: {
        Nav
    }
}
</script>