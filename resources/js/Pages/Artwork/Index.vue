<template>
    <table>
        <thead>
        <tr>
            <th>#</th>
            <th>Nom</th>
            <th>Image</th>
            <th>Catégorie</th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="artwork in artworks">
            <td>{{ artwork.id }}</td>
            <td>{{ artwork.name }}</td>
            <td>{{ artwork.image_path }}</td>
            <td>{{ artwork.category.name }}</td>
            <td>
                <Link :href="`/oeuvres/${artwork.id}/modifier`">
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
    name: "ArtworkIndex",
    props: {
        artworks: Object
    },
    components: {Link}
}
</script>

<style scoped>

</style>
