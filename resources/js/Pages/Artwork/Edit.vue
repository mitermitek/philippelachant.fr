<template>
    <form @submit.prevent="update">
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

        <button type="submit">Modifier</button>

        <button type="button" @click="destroy">Supprimer</button>
    </form>
</template>

<script>
import {useForm} from '@inertiajs/inertia-vue3';

export default {
    name: "ArtworkEdit",
    props: {
        categories: Object,
        artwork: Object
    },
    data() {
        const form = useForm({
            name: this.artwork.name,
            image: null,
            category: this.artwork.category_id
        });

        return {form}
    },
    methods: {
        update() {
            this.$inertia.post(`/oeuvres/${this.artwork.id}`, {
                _method: 'put',
                name: this.form.name,
                image: this.form.image,
                category: this.form.category,
                old_image: this.artwork.image_path
            })
        },
        destroy() {
            if (confirm('Supprimer cette oeuvre ?')) {
                this.form.delete(`/oeuvres/${this.artwork.id}`);
            }
        }
    }
}
</script>

<style scoped>

</style>
