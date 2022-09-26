<template>
    <table>
        <thead>
        <tr>
            <th>#</th>
            <th>Nom</th>
            <th>Adresse mail</th>
            <th>Modifier</th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="user in users">
            <td>{{ user.id }}</td>
            <td>{{ user.name }}</td>
            <td>{{ user.email }}</td>
            <td>
                <Link :href="`/utilisateurs/${user.id}/modifier`">
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
    name: "UserIndex",
    props: {
        users: Object
    },
    components: {Link}
}
</script>

<style scoped>

</style>
