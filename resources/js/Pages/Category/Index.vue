<template>
    <div class="overflow-x-auto relative rounded">
        <table class="w-full max-w-4xl mx-auto text-left text-sm">
            <thead class="uppercase bg-gray-100">
            <tr>
                <th class="py-3 px-6">Nom</th>
                <th class="py-3 px-6 text-center">Modifier</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="category in categories">
                <th class="py-4 px-6" scope="row">{{ category.name }}</th>
                <td class="py-4 px-6">
                    <Link :href="`/categories/${category.id}/modifier`">
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
</template>

<script>
import {Link} from '@inertiajs/inertia-vue3';

export default {
    name: "CategoryIndex",
    props: {
        categories: Object
    },
    components: {Link}
}
</script>

<style scoped>

</style>
