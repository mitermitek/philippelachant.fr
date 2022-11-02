<template>
    <nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5">
        <div class="container flex flex-wrap justify-between items-center mx-auto">
            <Link :href="`/`" class="flex items-center">
                <span class="self-center text-xl font-semibold whitespace-nowrap">
                    Philippe <span class="text-yellow-400">Lachant</span>
                </span>
            </Link>
            <div class="flex items-center md:hidden">
                <button class="rounded" type="button" @click="showMenu = !showMenu">
                    <Bars3Icon class="w-6 h-6"/>
                </button>
            </div>
            <div :class="showMenu ? '' : 'hidden'"
                 class="flex flex-col w-full mt-5 md:flex md:w-auto md:flex-row md:mt-0">
                <Link :href="`/`"
                      class="mr-0 mb-2 p-2 font-semibold rounded hover:text-yellow-400 bg-gray-50 md:bg-transparent md:mb-0 md:mr-5">
                    Accueil
                </Link>
                <Link :href="`/actu`"
                      class="mr-0 mb-2 p-2 font-semibold rounded hover:text-yellow-400 bg-gray-50 md:bg-transparent md:mb-0 md:mr-5">
                    Actualité
                </Link>
                <Link :href="`/`"
                      class="mr-0 mb-2 p-2 font-semibold rounded hover:text-yellow-400 bg-gray-50 md:bg-transparent md:mb-0 md:mr-5">
                    Galerie
                </Link>
                <Link :href="`/parcours`"
                      class="mb-2 p-2 font-semibold rounded hover:text-yellow-400 bg-gray-50 md:bg-transparent md:m-0">
                    Parcours
                </Link>
            </div>
        </div>
    </nav>
</template>

<script>
import {Link} from "@inertiajs/inertia-vue3";
import {Bars3Icon} from "@heroicons/vue/24/outline";

export default {
    name: "Navbar",
    components: {Link, Bars3Icon},
    data() {
        return {
            showMenu: false
        };
    },
}
</script>

<style scoped>

</style>
