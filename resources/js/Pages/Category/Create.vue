<template>
    <form @submit.prevent="store">
        <label for="name">Nom</label>
        <input v-model="form.name" id="name" type="text" placeholder="Nom">

        <p v-if="form.errors.name">{{ form.errors.name }}</p>

        <button type="submit">Créer</button>
    </form>
</template>

<script>
import {useForm} from '@inertiajs/inertia-vue3';

export default {
    name: "CategoryCreate",
    data() {
        const form = useForm({
            name: null
        });

        return {form}
    },
    methods: {
        store() {
            this.form.post(`/categories`);
        }
    }
}
</script>

<style scoped>

</style>
