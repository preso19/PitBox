<template>
    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <div>
                <update-information :shop="shop" />

                <jet-section-border />
            </div>
        </div>
    </div>
</template>

<script>
    import JetSectionBorder from '@/Jetstream/SectionBorder'
    import UpdateInformation from '@/Components/MyShop/Form/UpdateInformation'

    export default {
        components: {
            JetSectionBorder,
            UpdateInformation
        },

        props: {
            shop: Object,
        },
    }
</script>
