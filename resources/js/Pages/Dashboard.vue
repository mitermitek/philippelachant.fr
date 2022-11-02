<template>
    <Layout>
        <div class="grid grid-cols-1 gap-6">
            <div>
                <Link :href="`/utilisateurs`">
                    <button class="block w-full rounded bg-yellow-400 py-1 px-2 text-white font-semibold" type="button">
                        Gestion des utilisateurs
                    </button>
                </Link>
            </div>
            <div>
                <Link :href="`/categories`">
                    <button class="block w-full rounded bg-yellow-400 py-1 px-2 text-white font-semibold" type="button">
                        Gestion des catégories
                    </button>
                </Link>
            </div>
            <div>
                <Link :href="`/oeuvres`">
                    <button class="block w-full rounded bg-yellow-400 py-1 px-2 text-white font-semibold" type="button">
                        Gestion des oeuvres
                    </button>
                </Link>
            </div>
            <div>
                <Link :href="`/deconnexion`">
                    <button class="block w-full rounded bg-red-600 py-1 px-2 text-white font-semibold" type="button">
                        Déconnexion
                    </button>
                </Link>
            </div>
        </div>
    </Layout>
</template>

<script>
import {Link} from '@inertiajs/inertia-vue3';
import Layout from '../Shared/Layout.vue';

export default {
    name: "Dashboard",
    components: {Link, Layout}
}
</script>

<style scoped>

</style>
