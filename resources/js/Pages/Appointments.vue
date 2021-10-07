<template>
    <app-layout>
        <div class="grid grid-cols-2 gap-4" v-if="$page.props.userAppointments">
            <div class="p-4 mb-4 bg-white shadow-md rounded-3xl">
                <!-- <appointments-list><appointments-list> -->
            </div>

            <div class="p-4 mb-4 bg-white shadow-md rounded-3xl">
                <!-- <appointment-form></appointment-form> -->
            </div>
        </div>

        <div class="grid grid-cols-2 gap-4" v-else>
            <h2>You don't have any appointments go to the home page to create some</h2>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'
    import SingleShop from '@/Components/Home/SingleShop';

    export default {
        components: {
            AppLayout,
            SingleShop
        },
        // $page.props.userAppointments
        methods: {
            createShop() {
                let form = this.$inertia.form({});

                form.post(route('create.shop'))
            }
        }
    }
</script>
