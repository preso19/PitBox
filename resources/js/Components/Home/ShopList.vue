<template>
    <div>
        <div class="grid grid-cols-2 gap-4">
            <template v-for="shop in $page.props.shops">
                <single-shop :shop="shop" :key="shop.id"></single-shop>
            </template>
        </div>
    </div>
</template>

<script>
import SingleShop from '@/Components/Home/SingleShop'

export default {
    name: 'ShopList',

    components: {
        SingleShop
    }
}
</script>

