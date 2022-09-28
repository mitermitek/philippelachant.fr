<template>
    <Layout>
        <h1 class="text-center font-bold text-xl mb-5">Connexion</h1>

        <form class="max-w-xs mx-auto" @submit.prevent="authenticate">
            <p v-if="form.errors.credentials" class="text-red-500 text-center mb-5">{{ form.errors.credentials }}</p>

            <div class="mb-3">
                <label class="block font-medium mb-1" for="email">Adresse mail</label>
                <input id="email" v-model="form.email" class="block w-full rounded border border-gray-300 px-2 py-1"
                       placeholder="Adresse mail"
                       type="email">

                <p v-if="form.errors.email" class="text-red-500 mt-2">{{ form.errors.email }}</p>
            </div>

            <div class="mb-3">
                <label class="block font-medium mb-1" for="password">Mot de passe</label>
                <input id="password" v-model="form.password"
                       class="block w-full rounded border border-gray-300 px-2 py-1" placeholder="Mot de passe"
                       type="password">

                <p v-if="form.errors.password" class="text-red-500 mt-2">{{ form.errors.password }}</p>
            </div>

            <button class="block w-full rounded bg-yellow-400 px-4 py-2 text-white font-semibold" type="submit">
                Connexion
            </button>
        </form>
    </Layout>
</template>

<script>
import {useForm} from '@inertiajs/inertia-vue3';
import Layout from '../Shared/Layout.vue';

export default {
    name: "Login",
    props: {
        errors: Object
    },
    components: {Layout},
    data() {
        const form = useForm({
            email: null,
            password: null
        });

        return {form}
    },
    methods: {
        authenticate() {
            this.form.post(`/connexion`);
        }
    }
}
</script>

<style scoped>

</style>
