<template>
    <AuthenticatedUserBar v-if="$page.props.auth.user"/>
    <Navbar/>
    <main class="container mx-auto py-16 px-3">
        <slot/>
    </main>
    <Footer/>
</template>

<script>
import Navbar from './Navbar.vue';
import AuthenticatedUserBar from './AuthenticatedUserBar.vue';
import Footer from './Footer.vue';

export default {
    name: "Layout",
    components: {Navbar, AuthenticatedUserBar, Footer}
}
</script>

<style scoped>

</style>
