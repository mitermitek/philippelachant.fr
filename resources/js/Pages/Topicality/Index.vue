<template>
    <Layout>
        <div class="max-w-4xl mx-auto mb-5">
            <Link :href="`/actualites/creer`">
                <button class="block rounded bg-yellow-400 py-1 px-2 text-white font-semibold" type="button">
                    Créer une actualité
                </button>
            </Link>
        </div>

        <div class="overflow-x-auto relative rounded">
            <table class="w-full max-w-4xl mx-auto text-left text-sm">
                <thead class="uppercase bg-gray-100">
                <tr>
                    <th class="py-3 px-6">Date de publication</th>
                    <th class="py-3 px-6">Contenu</th>
                    <th class="py-3 px-6">Utilisateur</th>
                    <th class="py-3 px-6 text-center">Modifier</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="topicality in topicalities">
                    <th class="py-4 px-6" scope="row">
                        {{ topicality.created_at }}
                    </th>
                    <td class="py-4 px-6">
                        <span>{{ truncate(topicality.content) }}...</span>
                    </td>
                    <td class="py-4 px-6">{{ topicality.user.name }}</td>
                    <td class="py-4 px-6">
                        <Link :href="`/actualites/${topicality.id}/modifier`">
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
import {Link} from "@inertiajs/inertia-vue3";
import Layout from "../../Shared/Layout.vue";

export default {
    name: "TopicalityIndex",
    props: {
        topicalities: Object
    },
    components: {Link, Layout},
    methods: {
        truncate(content) {
            return content.split('').slice(0, 25).join('')
        }
    }
}
</script>

<style scoped>

</style>
