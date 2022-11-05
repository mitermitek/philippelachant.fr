<template>
    <Layout>
        <h1 class="text-2xl text-center font-bold mb-10">
            Ma galerie d'art
        </h1>

        <div class="max-w-4xl mx-auto grid grid-cols-3 gap-4">
            <div v-for="artwork in artworks" :key="artwork.id" class="aspect-square">
                <img :alt="artwork.name" :src="`/${artwork.image_path}`" class="object-cover w-full h-full rounded-lg">
            </div>
        </div>
    </Layout>
</template>

<script>
import Layout from '../Shared/Layout.vue';

export default {
    name: "Gallery",
    props: {
        artworks: Object
    },
    components: {Layout}
}
</script>

<style scoped>

</style>
