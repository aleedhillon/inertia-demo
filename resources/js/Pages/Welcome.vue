<template>
    <div>
        <h1>Welcome To {{ appName }}</h1>
    </div>
</template>
<script>
export default {
    name: 'Welcome',
    props: {
        appName: String
    }
}
</script>