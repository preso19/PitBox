<template>
    <div>
        <loader class="mx-auto" v-if="loading"></loader>

        <div class="grid grid-cols-2 gap-4" v-else>
            <template v-for="shop in shops">
                <single-shop :shop="shop" :key="shop.id"></single-shop>
            </template>
        </div>
    </div>
</template>

<script>
import Loader from '@/Components/Common/Loader'
import SingleShop from '@/Components/Home/SingleShop'

export default {
    name: 'ShopList',

    components: {
        Loader,
        SingleShop
    },

    data() {
        return {
            loading: true,
            shops: []
        }
    },

    mounted() {
        this.loadShops()
    },

    methods: {
        loadShops() {
            axios.get('/api/shops').then((response) => {
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

