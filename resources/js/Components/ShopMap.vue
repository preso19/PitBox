<template>
    <div ref="map" class="h-screen w-full"></div>
</template>

<script>
import { Loader } from '@googlemaps/js-api-loader'

export default {
    name: 'ShopMap',

    data: () => ({
        map: null,
    }),

    mounted() {
        this.initMap();
    },

    methods: {
        initMap() {
            const additionalOptions = []

            const loader = new Loader({
                apiKey: "AIzaSyDSLolUkcWHksi4KWsDIPufFwg_yW84hm4",
                version: "weekly",
                ...additionalOptions,
            });

            loader.load().then(() => {
                this.map = new google.maps.Map(this.$refs.map, {
                    center: { lat: -34.397, lng: 150.644 },
                    zoom: 8,
                });
            });
        }
    }
}
</script>
