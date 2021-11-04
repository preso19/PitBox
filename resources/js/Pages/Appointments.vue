<template>
    <app-layout>
        <div class="grid grid-cols-2 gap-4" v-if="$page.props.userAppointments > 0">
            <div class="p-4 mb-4 bg-white shadow-md rounded-3xl">
                <appointments-list></appointments-list>
            </div>

            <div class="p-4 mb-4 bg-white shadow-md rounded-3xl">
                <appointments-form></appointments-form>
            </div>
        </div>

        <div class="grid grid-cols-1 gap-4" v-else>
            <div class="p-4 mb-4 bg-white shadow-md rounded-3xl text-center">
                <h2>You don't have any appointments go to the homepage to create some!</h2>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'
    import AppointmentsList from '@/Components/Appointments/List'
    import AppointmentsForm from '@/Components/Appointments/Form'

    export default {
        components: {
            AppLayout,
            AppointmentsList,
            AppointmentsForm
        },

        props: {
            newAppointment: String
        },

        created() {
            console.log(this.newAppointment);
        }
    }
</script>
