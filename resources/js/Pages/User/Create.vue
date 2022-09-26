<template>
    <form @submit.prevent="store">
        <label for="name">Nom</label>
        <input v-model="form.name" id="name" type="text" placeholder="Nom">

        <p v-if="form.errors.name">{{ form.errors.name }}</p>

        <label for="email">Adresse mail</label>
        <input v-model="form.email" id="email" type="email" placeholder="Adresse mail">

        <p v-if="form.errors.email">{{ form.errors.email }}</p>

        <label for="password">Mot de passe</label>
        <input v-model="form.password" id="password" type="password" placeholder="Mot de passe">

        <p v-if="form.errors.password">{{ form.errors.password }}</p>

        <label for="password_confirmation">Confirmation mot de passe</label>
        <input v-model="form.password_confirmation" id="password_confirmation" type="password" placeholder="Confirmation mot de passe">

        <p v-if="form.errors.password">{{ form.errors.password }}</p>

        <button type="submit">Créer</button>
    </form>
</template>

<script>
import {useForm} from '@inertiajs/inertia-vue3';

export default {
    name: "UserCreate",
    data() {
        const form = useForm({
            name: null,
            email: null,
            password: null,
            password_confirmation: null
        });

        return {form}
    },
    methods: {
        store() {
            this.form.post(`/utilisateurs`);
        }
    }
}
</script>

<style scoped>

</style>
