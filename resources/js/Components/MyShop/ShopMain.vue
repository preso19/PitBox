<template>
    <div class="grid grid-cols-2 gap-4">
        <single-shop :shop="shop"></single-shop>

        <div class="p-4 mb-4 bg-white shadow-md rounded-3xl">
            <h1>Here add calendar maybe?</h1>

            <button @click.prevent="editShop()" class="mt-4 py-2 px-4 border border-transparent shadow-sm text-sm rounded-md font-bold text-white bg-indigo-400 hover:bg-indigo-700">
                Edit Shop
            </button>
        </div>
    </div>
</template>

<script>
    import SingleShop from '@/Components/Home/SingleShop';

    export default {
        components: {
            SingleShop
        },

        props: {
            shop: Object,
        },

        methods: {
            editShop: function() {
                this.$emit('editShop')
            }
        }
    }
</script>
