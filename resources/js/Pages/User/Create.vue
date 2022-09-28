<template>
    <h1 class="text-center font-bold text-xl mb-5">Créer un utilisateur</h1>

    <form class="max-w-xs mx-auto" @submit.prevent="store">
        <div class="mb-3">
            <label class="block font-medium mb-1" for="name">Nom</label>
            <input id="name" v-model="form.name" class="block w-full rounded border border-gray-300 px-2 py-1"
                   placeholder="Nom" type="text">

            <p v-if="form.errors.name" class="text-red-500 mt-2">{{ form.errors.name }}</p>
        </div>

        <div class="mb-3">
            <label class="block font-medium mb-1" for="email">Adresse mail</label>
            <input id="email" v-model="form.email" class="block w-full rounded border border-gray-300 px-2 py-1"
                   placeholder="Adresse mail" type="email">

            <p v-if="form.errors.email" class="text-red-500 mt-2">{{ form.errors.email }}</p>
        </div>

        <div class="mb-3">
            <label class="block font-medium mb-1" for="password">Mot de passe</label>
            <input id="password" v-model="form.password" class="block w-full rounded border border-gray-300 px-2 py-1"
                   placeholder="Mot de passe" type="password">

            <p v-if="form.errors.password" class="text-red-500 mt-2">{{ form.errors.password }}</p>
        </div>

        <div class="mb-3">
            <label class="block font-medium mb-1" for="password_confirmation">Confirmation mot de passe</label>
            <input id="password_confirmation" v-model="form.password_confirmation"
                   class="block w-full rounded border border-gray-300 px-2 py-1" placeholder="Confirmation mot de passe"
                   type="password">

            <p v-if="form.errors.password" class="text-red-500 mt-2">{{ form.errors.password }}</p>
        </div>

        <button class="block w-full rounded bg-yellow-400 px-4 py-2 text-white font-semibold" type="submit">
            Créer
        </button>
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
