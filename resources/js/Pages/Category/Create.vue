<template>
    <h1 class="text-center font-bold text-xl mb-5">Créer une catégorie</h1>

    <form class="max-w-xs mx-auto" @submit.prevent="store">
        <div class="mb-3">
            <label class="block font-medium mb-1" for="name">Nom</label>
            <input id="name" v-model="form.name" class="block w-full rounded border border-gray-300 px-2 py-1"
                   placeholder="Nom" type="text">

            <p v-if="form.errors.name" class="text-red-500 mt-2">{{ form.errors.name }}</p>
        </div>

        <button class="block w-full rounded bg-yellow-400 px-4 py-2 text-white font-semibold" type="submit">
            Créer
        </button>
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
