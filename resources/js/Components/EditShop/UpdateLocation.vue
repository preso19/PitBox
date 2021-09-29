<template>
    <jet-form-section>
        <template #title>
            Shop Location
        </template>

        <template #description>
            Update your shops's location.
        </template>

        <template #form>
            <!-- Map -->
            <div class="col-span-6 sm:col-span-4 relative">
                <GmapMap
                    class="rounded-md overflow-hidden"
                    style="width: 100%; height: 300px"
                    :center="{lat: parseInt(form.lat), lng: parseInt(form.lng)}"
                    :zoom="10"
                    :options="{
                        zoomControl: true,
                        mapTypeControl: false,
                        scaleControl: false,
                        streetViewControl: false,
                        rotateControl: false,
                        fullscreenControl: false,
                        disableDefaultUi: true
                    }">
                        <GmapMarker
                            :key="form.lat"
                            :clickable="true"
                            :draggable="true"
                            :position="google && new google.maps.LatLng(parseInt(form.lat), parseInt(form.lng))"
                            @dragend="updateMarker"
                        />
                </GmapMap>
            </div>
        </template>

        <template #actions>
            <jet-action-message :on="form.recentlySuccessful" class="mr-3">
                Updated.
            </jet-action-message>

            <jet-button :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                Update
            </jet-button>
        </template>
    </jet-form-section>
</template>

<script>
    import JetButton from '@/Jetstream/Button'
    import JetFormSection from '@/Jetstream/FormSection'
    import JetActionMessage from '@/Jetstream/ActionMessage'
    import { gmapApi } from 'vue2-google-maps'

    export default {
        components: {
            JetActionMessage,
            JetButton,
            JetFormSection
        },

        props: {
            shop: Object
        },

        data() {
            return {
                form: this.$inertia.form({
                    lat: this.shop.lat,
                    lng: this.shop.lng
                }),
            }
        },

        computed: {
            google: gmapApi
        },

        methods: {
            updateMarker(location) {
                let lat = location.latLng.lat()
                let lng = location.latLng.lng()

                this.form.put(route('update.shop.location', this.shop.id), {
                    preserveScroll: true
                });
            }
        },
    }
</script>
