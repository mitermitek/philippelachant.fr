<template>
    <Layout>
        <div class="max-w-xl mx-auto flex flex-col justify-center items-center">
            <h1 class="text-2xl font-bold mb-10">
                Mon fil d'actualité
            </h1>

            <div class="grid grid-cols-1 gap-6">
                <div v-for="post in posts" :key="post.id" class="bg-gray-50 p-4 rounded-lg">
                    <p class="mb-3">{{ post.content }}</p>
                    <p class="text-xs italic">Posté le {{ post.created_at }}</p>
                </div>
            </div>
        </div>
    </Layout>
</template>

<script>
import Layout from '../Shared/Layout.vue';

export default {
    name: "Feed",
    props: {
        posts: Object
    },
    components: {Layout}
}
</script>

<style scoped>

</style>
