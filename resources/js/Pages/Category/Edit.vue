<template>
    <form @submit.prevent="update">
        <label for="name">Nom</label>
        <input v-model="form.name" id="name" type="text" placeholder="Nom">

        <p v-if="form.errors.name">{{ form.errors.name }}</p>

        <button type="submit">Modifier</button>

        <button type="button" @click="destroy">Supprimer</button>
    </form>
</template>

<script>
import {useForm} from '@inertiajs/inertia-vue3';

export default {
    name: "CategoryEdit",
    props: {
        category: Object
    },
    data() {
        const form = useForm({
            name: this.category.name
        });

        return {form}
    },
    methods: {
        update() {
            this.form.put(`/categories/${this.category.id}`);
        },
        destroy() {
            if (confirm('Supprimer cette catégorie ?')) {
                this.form.delete(`/categories/${this.category.id}`);
            }
        }
    }
}
</script>

<style scoped>

</style>
