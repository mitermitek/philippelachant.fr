<template>
    <form @submit.prevent="update">
        <label for="name">Nom</label>
        <input v-model="form.name" id="name" type="text" placeholder="Nom">

        <p v-if="form.errors.email">{{ form.errors.email }}</p>

        <label for="email">Adresse mail</label>
        <input v-model="form.email" id="email" type="email" placeholder="Adresse mail">

        <p v-if="form.errors.email">{{ form.errors.email }}</p>

        <label for="password">Mot de passe</label>
        <input v-model="form.password" id="password" type="password" placeholder="Mot de passe">

        <p v-if="form.errors.password">{{ form.errors.password }}</p>

        <label for="password_confirmation">Confirmation mot de passe</label>
        <input v-model="form.password_confirmation" id="password_confirmation" type="password" placeholder="Confirmation mot de passe">

        <p v-if="form.errors.password">{{ form.errors.password }}</p>

        <button type="submit">Modifier</button>

        <button type="button" @click="destroy">Supprimer</button>
    </form>
</template>

<script>
import {useForm} from '@inertiajs/inertia-vue3';

export default {
    name: "UserEdit",
    props: {
        user: Object
    },
    data() {
        const form = useForm({
            name: this.user.name,
            email: this.user.email,
            password: null,
            password_confirmation: null
        });

        return {form}
    },
    methods: {
        update() {
            this.form.put(`/utilisateurs/${this.user.id}`);
        },
        destroy() {
            if (confirm('Supprimer cet utilisateur ?')) {
                this.form.delete(`/utilisateurs/${this.user.id}`);
            }
        }
    }
}
</script>

<style scoped>

</style>
