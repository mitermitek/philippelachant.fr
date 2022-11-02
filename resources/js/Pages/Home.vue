<template>
    <Layout>
        <div class="max-w-xl mx-auto text-center flex flex-col justify-center items-center">
            <img src="/images/philippelachant.jpeg" alt="Philippe Lachant" width="150" class="rounded-full mb-3">
            <h1 class="text-2xl font-bold mb-3">
                Philippe Lachant
            </h1>
            <p>Je suis un sculpteur contemporain. Vous pouvez retrouver toutes mes sculptures sur ce site, ainsi que mon actualité.</p>
        </div>
    </Layout>
</template>

<script>
import Layout from '../Shared/Layout.vue';

export default {
    name: "Home",
    components: {Layout}
}
</script>

<style scoped>

</style>
