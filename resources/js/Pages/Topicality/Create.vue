<template>
    <Layout>
        <h1 class="text-center font-bold text-xl mb-5">Créer une actualité</h1>

        <form class="max-w-xs mx-auto" @submit.prevent="store">
            <div class="mb-3">
                <textarea id="content" v-model="form.content"
                          class="block w-full rounded border border-gray-300 px-2 py-1"
                          maxlength="160" placeholder="Contenu" rows="5"></textarea>

                <p v-if="form.errors.content" class="text-red-500 mt-2">{{ form.errors.content }}</p>
            </div>

            <button class="block w-full rounded bg-yellow-400 px-4 py-2 text-white font-semibold" type="submit">
                Créer
            </button>
        </form>
    </Layout>
</template>

<script>
import {useForm} from '@inertiajs/inertia-vue3';
import Layout from '../../Shared/Layout.vue';

export default {
    name: "TopicalityCreate",
    components: {Layout},
    data() {
        const form = useForm({
            content: null
        });

        return {form}
    },
    methods: {
        store() {
            this.form.post(`/actualites`);
        }
    }
}
</script>

<style scoped>

</style>
