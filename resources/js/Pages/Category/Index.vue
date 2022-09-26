<template>
    <table>
        <thead>
        <tr>
            <th>#</th>
            <th>Nom</th>
            <th>Modifier</th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="category in categories">
            <td>{{ category.id }}</td>
            <td>{{ category.name }}</td>
            <td>
                <Link :href="`/categories/${category.id}/modifier`">
                    <button type="button">
                        Modifier
                    </button>
                </Link>
            </td>
        </tr>
        </tbody>
    </table>
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
