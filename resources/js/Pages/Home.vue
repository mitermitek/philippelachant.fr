<template>
    <Layout>
        <div class="max-w-xl mx-auto text-center flex flex-col justify-center items-center">
            <img src="/images/philippelachant.jpeg" alt="Philippe Lachant" width="150" class="rounded-full mb-3">
            <h1 class="text-2xl font-bold mb-3">
                Philippe Lachant
            </h1>
            <p class="mb-10">Je suis un sculpteur contemporain. Vous pouvez retrouver toutes mes sculptures sur ce site, ainsi que mon actualité.</p>
            <Link :href="`/parcours`">
                <button class="block w-full rounded bg-yellow-400 px-4 py-2 text-white font-semibold mb-3" type="button">
                    Mon parcours
                </button>
            </Link>
        </div>
    </Layout>
</template>

<script>
import {Link} from "@inertiajs/inertia-vue3";
import Layout from '../Shared/Layout.vue';

export default {
    name: "Home",
    components: {Link, Layout}
}
</script>

<style scoped>

</style>
