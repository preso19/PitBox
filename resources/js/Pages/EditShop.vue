<template>
    <app-layout>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <div>
                <update-information :shop="$page.props.userShop" />

                <jet-section-border />

                <update-photos :shop="$page.props.userShop" />

                <jet-section-border />

                <update-location :shop="$page.props.userShop" />

                <jet-section-border />
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'
    import JetSectionBorder from '@/Jetstream/SectionBorder'
    import UpdateInformation from '@/Components/EditShop/UpdateInformation'
    import UpdatePhotos from '@/Components/EditShop/UpdatePhotos'
    import UpdateLocation from '@/Components/EditShop/UpdateLocation'

    export default {
        components: {
            AppLayout,
            JetSectionBorder,
            UpdateInformation,
            UpdatePhotos,
            UpdateLocation
        }
    }
</script>
