<template>
    <div class="flex flex-col">
        <loader v-if="loading"></loader>

        <template v-else v-for="shop in shops">
            <single-shop :shop="shop" :key="shop.id"></single-shop>
        </template>
    </div>
</template>

<script>
import Loader from '@/Components/Common/Loader'
import SingleShop from '@/Components/SingleShop'

export default {
    name: 'ShopList',

    components: {
        Loader,
        SingleShop
    },

    data: () => ({
        loading: true,
        shops: []
    }),

    mounted() {
        this.loadShops()
    },

    methods: {
        loadShops() {
            axios.get('/shops').then((response) => {
                this.shops = response.data
            }).catch((error) => {
                console.error(error)
            }).finally(() => {
                this.loading = false
            })
        }
    }
}
</script>

