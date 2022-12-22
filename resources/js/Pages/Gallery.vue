<template>
    <Layout>
        <h1 class="text-2xl text-center font-bold mb-10">
            Ma galerie d'art
        </h1>

        <div class="max-w-4xl mx-auto grid grid-cols-2 md:grid-cols-3 gap-4">
            <div v-for="(artwork, i) in artworks" :key="artwork.id" class="aspect-square block relative w-full h-full" @click="showMultiple(i)">
                <img :alt="artwork.name" :src="`/${artwork.image_path}`" class="object-cover w-full h-full rounded-lg">
                <div class="absolute bottom-0 p-3 bg-black bg-opacity-20 w-full rounded-b-lg">
                    <span class="text-white [text-shadow:_0_2px_5px_rgb(0_0_0_/_75%)]">{{ artwork.name }}</span>
                    <br/>
                    <span class="text-white [text-shadow:_0_2px_5px_rgb(0_0_0_/_75%)]">{{ artwork.category.name }}</span>
                </div>
            </div>
        </div>

        <vue-easy-lightbox
            :imgs="imgsRef"
            :index="indexRef"
            :visible="visibleRef"
            @hide="onHide"
        />
    </Layout>
</template>

<script>
import Layout from '../Shared/Layout.vue';
import {ref} from "vue";

export default {
    name: "Gallery",
    props: {
        artworks: Object
    },
    components: {Layout},
    setup(props) {
        const visibleRef = ref(false)
        const indexRef = ref(0)
        const imgsRef = ref([])

        const onShow = () => {
            visibleRef.value = true
        }

        const showMultiple = (i) => {
            let imgs = []

            props.artworks.forEach(a => {
                imgs.push({
                    src: `/${a.image_path}`,
                    title: `${a.name} - ${a.category.name}`,
                })
            })

            imgsRef.value = imgs
            indexRef.value = i
            onShow()
        }

        const onHide = () => (visibleRef.value = false)

        return {
            visibleRef,
            indexRef,
            imgsRef,
            showMultiple,
            onHide
        }
    }
}
</script>

<style scoped>

</style>
