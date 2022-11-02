<template>
    <Layout>
        <h1 class="text-center font-bold text-xl mb-5">Modifier une actualité</h1>

        <form class="max-w-xs mx-auto" @submit.prevent="update">
            <div class="mb-3">
                <textarea id="content" v-model="form.content"
                          class="block w-full rounded border border-gray-300 px-2 py-1"
                          maxlength="160" placeholder="Contenu" rows="5"></textarea>

                <p v-if="form.errors.content" class="text-red-500 mt-2">{{ form.errors.content }}</p>
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
    name: "TopicalityEdit",
    props: {
        topicality: Object
    },
    components: {Layout},
    data() {
        const form = useForm({
            content: this.topicality.content
        });

        return {form}
    },
    methods: {
        update() {
            this.form.put(`/actualites/${this.topicality.id}`);
        },
        destroy() {
            if (confirm('Supprimer cette actualité ?')) {
                this.form.delete(`/actualites/${this.topicality.id}`);
            }
        }
    }
}
</script>

<style scoped>

</style>
