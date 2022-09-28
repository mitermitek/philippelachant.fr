<template>
    <h1 class="text-center font-bold text-xl mb-5">Créer une oeuvre</h1>

    <form class="max-w-xs mx-auto" @submit.prevent="store">
        <div class="mb-3">
            <label class="block font-medium mb-1" for="name">Nom</label>
            <input id="name" v-model="form.name" class="block w-full rounded border border-gray-300 px-2 py-1"
                   placeholder="Nom" type="text">

            <p v-if="form.errors.name" class="text-red-500 mt-2">{{ form.errors.name }}</p>
        </div>

        <div class="mb-3">
            <label class="block font-medium mb-1" for="image">Image</label>
            <input id="image" accept="image/png, image/jpeg"
                   class="block w-full rounded border-0 px-2 py-1 file:rounded file:border-0 file:px-2 file:py-1"
                   type="file"
                   @input="form.image = $event.target.files[0]"/>

            <p v-if="form.errors.image" class="text-red-500 mt-2">{{ form.errors.image }}</p>
        </div>

        <div class="mb-3">
            <label class="block font-medium mb-1" for="category">Catégorie</label>
            <select id="category" v-model="form.category" class="block w-full rounded border border-gray-300 px-2 py-1">
                <option v-for="category in categories" :value="category.id">{{ category.name }}</option>
            </select>

            <p v-if="form.errors.category" class="text-red-500 mt-2">{{ form.errors.category }}</p>
        </div>

        <button class="block w-full rounded bg-yellow-400 px-4 py-2 text-white font-semibold" type="submit">
            Créer
        </button>
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
