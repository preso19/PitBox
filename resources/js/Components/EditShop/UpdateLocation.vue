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
                <div
                    class="rounded-md overflow-hidden"
                    style="width: 100%; height: 300px"
                    ref="map"
                ></div>
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

        mounted() {
            let map = new google.maps.Map(this.$refs.map, {
                center: { lat: parseFloat(this.shop.lat), lng: parseFloat(this.shop.lng) },
                zoom: 8,
            });

            let marker = new google.maps.Marker({
                position: { lat: parseFloat(this.shop.lat), lng: parseFloat(this.shop.lng) },
                map: map,
                draggable:true,
            });

            marker.addListener('dragend', event => {
                this.form.lat = event.latLng.lat()
                this.form.lng = event.latLng.lng()

                this.updateMarker(event)
            });
        },

        methods: {
            updateMarker(location) {
                this.form.put(route('update.shop.location', this.shop.id), {
                    preserveScroll: true,
                });
            }
        },
    }
</script>
