<template>
    <AuthenticatedUserBar v-if="$page.props.auth.user" />
    <Navbar/>
    <main class="container mx-auto py-5 px-3">
        <slot/>
    </main>
</template>

<script>
import Navbar from './Navbar.vue';
import AuthenticatedUserBar from './AuthenticatedUserBar.vue';

export default {
    name: "Layout",
    components: {Navbar, AuthenticatedUserBar}
}
</script>

<style scoped>

</style>
