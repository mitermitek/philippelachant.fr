<template>
    <Layout>
        <h1 class="text-center font-bold text-xl mb-5">Modifier une catégorie</h1>

        <form class="max-w-xs mx-auto" @submit.prevent="update">
            <div class="mb-3">
                <label class="block font-medium mb-1" for="name">Nom</label>
                <input id="name" v-model="form.name" class="block w-full rounded border border-gray-300 px-2 py-1"
                       placeholder="Nom" type="text">

                <p v-if="form.errors.name" class="text-red-500 mt-2">{{ form.errors.name }}</p>
            </div>

            <button class="block w-full rounded bg-yellow-400 px-4 py-2 text-white font-semibold mb-3" type="submit">
                Modifier
            </button>

            <button class="block w-full rounded bg-red-500 px-4 py-2 text-white font-semibold" type="button"
                    @click="destroy">
                Supprimer
            </button>
        </form>
    </Layout>
</template>

<script>
import {useForm} from '@inertiajs/inertia-vue3';
import Layout from '../../Shared/Layout.vue';

export default {
    name: "CategoryEdit",
    props: {
        category: Object
    },
    components: {Layout},
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
