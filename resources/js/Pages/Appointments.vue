<template>
    <app-layout>
        <div class="grid grid-cols-2 gap-4" v-if="$page.props.userAppointments">
            <div class="p-4 mb-4 bg-white shadow-md rounded-3xl">
                <appointments-list @updateChat="dsadsa"><appointments-list>
            </div>

            <div class="p-4 mb-4 bg-white shadow-md rounded-3xl">
                <appointment-form :service="shopID2"></appointment-form>
            </div>
        </div>

        <div class="grid grid-cols-2 gap-4" v-else>
            <h2>You don't have any appointments go to the home page to create some</h2>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'

    export default {
        components: {
            AppLayout
        },

        // $page.props.userAppointments
    }
</script>
