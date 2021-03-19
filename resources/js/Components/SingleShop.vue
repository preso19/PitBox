<template>
    <div class="w-11/12 flex flex-col border border-indigo-400 rounded-sm">
        <VueSlickCarousel>
            <div>1</div>
            <div>2</div>
            <div>3</div>
            <div>4</div>
        </VueSlickCarousel>

        <h1>NAME HERE</h1>

        <p>My shop is amazing</p>

        <button>Reserve</button>
    </div>
</template>

<script>
import VueSlickCarousel from 'vue-slick-carousel'

export default {
    name: 'SingleShop',

    components: {
        VueSlickCarousel
    }
}
</script>
