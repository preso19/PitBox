<template>
    <app-layout>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <div>
                <update-information :shop="$page.props.userShop" />

                <jet-section-border />
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'
    import JetSectionBorder from '@/Jetstream/SectionBorder'
    import UpdateInformation from '@/Components/MyShop/Form/UpdateInformation'

    export default {
        components: {
            AppLayout,
            JetSectionBorder,
            UpdateInformation
        }
    }
</script>
