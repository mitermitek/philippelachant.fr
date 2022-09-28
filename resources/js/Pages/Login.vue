<template>
    <form @submit.prevent="authenticate">
        <p v-if="form.errors.credentials">{{ form.errors.credentials }}</p>

        <label for="email">Adresse mail</label>
        <input v-model="form.email" id="email" type="email" placeholder="Adresse mail">

        <p v-if="form.errors.email">{{ form.errors.email }}</p>

        <label for="password">Mot de passe</label>
        <input v-model="form.password" id="password" type="password" placeholder="Mot de passe">

        <p v-if="form.errors.password">{{ form.errors.password }}</p>

        <button type="submit">Connexion</button>
    </form>
</template>

<script>
import {useForm} from '@inertiajs/inertia-vue3';

export default {
    name: "Login",
    props: {
        errors: Object
    },
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
