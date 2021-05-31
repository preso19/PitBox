<template>
    <div class="flex flex-col mb-4 bg-white shadow-md rounded-3xl overflow-hidden">
        <div class="custom-carousel">
            <VueSlickCarousel>
                <img src="https://via.placeholder.com/500x250">
                <img src="https://via.placeholder.com/500x250">
                <img src="https://via.placeholder.com/500x250">
                <img src="https://via.placeholder.com/500x250">
            </VueSlickCarousel>
        </div>

        <div class="p-4">
            <div class="flex flex-row justify-between">
                <h1 class="text-xl text-indigo-400 font-bold">{{ shop.name }}</h1>

                <a :href="`https://www.google.com/maps/dir/?api=1&destination=${shop.lat},${shop.lng}`" class="text-xl text-indigo-400 hover:text-black transition duration-300" target="_blank">
                    <i class="fas fa-directions"></i>
                </a>
            </div>

            <p v-if="shop.description">{{ shop.description }}</p>

            <button>Reserve</button>
        </div>
    </div>
</template>

<script>
import VueSlickCarousel from 'vue-slick-carousel'
import 'vue-slick-carousel/dist/vue-slick-carousel.css'

export default {
    name: 'SingleShop',

    props: {
        shop: Object
    },

    components: {
        VueSlickCarousel
    }
}
</script>