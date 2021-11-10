<template>
    <div v-if="selected">
        <div class="p-4 border-b-2 border-indigo-400 cursor-pointer" v-for="appointment in userAppointments" :key="appointment.id" @click.prevent="updateSelectedAppointment(appointment)">
            <h2 class="inline" :class="{'font-bold': appointment.id == selected.id}">{{appointment.shop.name}}</h2>

            <span>- {{filterDate(appointment.datetime)}}</span>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'List',

        props: {
            newAppointment: Boolean,
            userAppointments: Array,
            newAppointmentShop: Object,
            selected: Object
        },

        methods: {
            filterDate(fullDatetime) {
                return fullDatetime.split(' ')[0]
            },

            updateSelectedAppointment(appointment) {
                this.$emit('updateSelectedAppointment', appointment)
            }
        }
    }
</script>
