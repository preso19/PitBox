<template>
    <app-layout>
        <div class="grid grid-cols-2 gap-4" v-if="$page.props.userAppointments.length > 0 || $page.props.newAppointment">
            <div class="mb-4 overflow-hidden bg-white shadow-md rounded-3xl">
                <appointments-list
                    :userAppointments="$page.props.userAppointments"
                    :newAppointment="$page.props.newAppointment"
                    :newAppointmentShop="$page.props.newAppointmentShop"
                    :selected="selected"
                    @updateSelectedAppointment="updateSelectedAppointment"
                ></appointments-list>
            </div>

            <div class="p-4 mb-4 bg-white shadow-md rounded-3xl">
                <appointments-form
                    v-if="$page.props.newAppointment"
                    :newAppointmentShop="$page.props.newAppointmentShop"
                    :selected="selected"
                    @createAppointment="createAppointment"
                ></appointments-form>

                <appointments-chat
                    v-if="!$page.props.newAppointment && selected"
                    :selected="selected"
                    :user="$page.props.user"
                ></appointments-chat>
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
    import AppointmentsChat from '@/Components/Appointments/Chat'

    export default {
        components: {
            AppLayout,
            AppointmentsList,
            AppointmentsForm,
            AppointmentsChat
        },

        data() {
            return {
                selected: null,
            }
        },

        mounted() {
            if (!this.selected && !this.$page.props.newAppointment) {
                this.selected = this.$page.props.userAppointments[0]
            }
        },

        methods: {
            createAppointment(form) {
                form.post(route('create.appointment'), {
                    onSuccess: () => {
                        this.selected = this.$page.props.userAppointments[0]
                    },
                });
            },

            updateSelectedAppointment(appointment) {
                this.selected = appointment
                this.$page.props.newAppointment = false
            }
        }
    }
</script>
