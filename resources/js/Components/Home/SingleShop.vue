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
            </div>

            <p v-if="shop.description">
                {{ shop.description }}
            </p>

            <div class="flex justify-between">
                <inertia-link :href="route('appointments')" :data="{ newAppointmentShop: this.shop.id }" class="mt-4 py-2 px-4 border border-transparent shadow-sm text-sm rounded-md font-bold text-white bg-indigo-400 hover:bg-indigo-700">
                    Reserve
                </inertia-link>

                <a :href="`https://www.google.com/maps/dir/?api=1&destination=${shop.lat},${shop.lng}`" target="_blank">
                    <button class="mt-4 py-2 px-4 border border-transparent shadow-sm text-sm rounded-md font-bold text-white bg-indigo-400 hover:bg-indigo-700">
                        Directions <i class="fas fa-directions ml-2"></i>
                    </button>
                </a>
            </div>
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
