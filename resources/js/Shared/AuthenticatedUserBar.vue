<template>
    <Link href="/">
        <div class="bg-yellow-400 p-2 flex justify-center items-center">
            <ArrowRightCircleIcon class="w-6 h-6 mr-2 text-white"/>
            <p class="text-white font-semibold">
                Accéder au tableau de bord
            </p>
        </div>
    </Link>
</template>

<script>
import {Link} from "@inertiajs/inertia-vue3";
import {ArrowRightCircleIcon} from "@heroicons/vue/24/outline";

export default {
    name: "Navbar",
    components: {Link, ArrowRightCircleIcon},
    data() {
        return {
            showMenu: false
        };
    },
}
</script>

<style scoped>

</style>
