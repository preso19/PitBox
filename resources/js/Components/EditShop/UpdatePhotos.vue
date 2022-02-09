<template>
    <jet-form-section @submitted="updatePhotos">
        <template #title>
            Shop Photos
        </template>

        <template #description>
            Update your shops's photos.
        </template>

        <template #form>
            <!-- Map -->
            <div class="col-span-6 sm:col-span-4 relative">
                <vue-dropzone ref="myVueDropzone" id="dropzone" :options="dropzoneOptions"></vue-dropzone>
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
    import vue2Dropzone from 'vue2-dropzone'
    import 'vue2-dropzone/dist/vue2Dropzone.min.css'

    export default {
        components: {
            JetActionMessage,
            JetButton,
            JetFormSection,
            vueDropzone: vue2Dropzone,
        },

        props: {
            shop: Object
        },

        data() {
            return {
                form: this.$inertia.form({
                    photos: []
                }),
                dropzoneOptions: {
                    url: 'https://httpbin.org/post',
                    maxFilesize: 100,
                }
            }
        },

        methods: {
            updatePhotos() {
                // this.form.put(route('update.shop', this.shop.id), {
                //     preserveScroll: true
                // });
            },
        },
    }
</script>
