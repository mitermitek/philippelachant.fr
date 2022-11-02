<template>
    <Layout>
        <div class="max-w-4xl mx-auto mb-5">
            <Link :href="`/oeuvres/creer`">
                <button class="block rounded bg-yellow-400 py-1 px-2 text-white font-semibold" type="button">
                    Créer une oeuvre
                </button>
            </Link>
        </div>

        <div class="overflow-x-auto relative rounded">
            <table class="w-full max-w-4xl mx-auto text-left text-sm">
                <thead class="uppercase bg-gray-100">
                <tr>
                    <th class="py-3 px-6">Nom</th>
                    <th class="py-3 px-6">Catégorie</th>
                    <th class="py-3 px-6 text-center">Modifier</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="artwork in artworks">
                    <th class="py-4 px-6" scope="row">{{ artwork.name }}</th>
                    <td class="py-4 px-6">{{ artwork.category.name }}</td>
                    <td class="py-4 px-6">
                        <Link :href="`/oeuvres/${artwork.id}/modifier`">
                            <button class="block w-full rounded bg-yellow-400 py-1 px-2 text-white font-semibold"
                                    type="button">
                                Modifier
                            </button>
                        </Link>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </Layout>
</template>

<script>
import {Link} from '@inertiajs/inertia-vue3';
import Layout from '../../Shared/Layout.vue';

export default {
    name: "ArtworkIndex",
    props: {
        artworks: Object
    },
    components: {Link, Layout}
}
</script>

<style scoped>

</style>
