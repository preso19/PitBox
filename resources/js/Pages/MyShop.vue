<template>
    <app-layout>
        <div class="grid grid-cols-2 gap-4">
            <single-shop :shop="$page.props.userShop"></single-shop>

            <div class="p-4 mb-4 bg-white shadow-md rounded-3xl">
                <h1>Here add calendar maybe?</h1>

                <button @click.prevent="editShop()" class="mt-4 py-2 px-4 border border-transparent shadow-sm text-sm rounded-md font-bold text-white bg-indigo-400 hover:bg-indigo-700">
                    Edit Shop
                </button>
            </div>
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

        methods: {
            editShop: function() {
                // ROUTE TO EDIT SHOP PAGE
            }
        }
    }
</script>
