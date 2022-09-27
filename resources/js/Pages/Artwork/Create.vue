<template>
    <form @submit.prevent="store">
        <label for="name">Nom</label>
        <input id="name" v-model="form.name" placeholder="Nom" type="text">

        <p v-if="form.errors.name">{{ form.errors.name }}</p>

        <label for="image">Image</label>
        <input id="image" accept="image/png, image/jpeg" type="file" @input="form.image = $event.target.files[0]"/>

        <progress v-if="form.progress" :value="form.progress.percentage" max="100">
            {{ form.progress.percentage }}%
        </progress>

        <p v-if="form.errors.image">{{ form.errors.image }}</p>

        <label for="category">Catégorie</label>
        <select id="category" v-model="form.category">
            <option v-for="category in categories" :value="category.id">{{ category.name }}</option>
        </select>

        <p v-if="form.errors.category">{{ form.errors.category }}</p>

        <button type="submit">Créer</button>
    </form>
</template>

<script>
import {useForm} from '@inertiajs/inertia-vue3';

export default {
    name: "ArtworkCreate",
    props: {
        categories: Object
    },
    data() {
        const form = useForm({
            name: null,
            image: null,
            category: this.categories[0]['id']
        });

        return {form}
    },
    methods: {
        store() {
            this.form.post(`/oeuvres`);
        }
    }
}
</script>

<style scoped>

</style>
