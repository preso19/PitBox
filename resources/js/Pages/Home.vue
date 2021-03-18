<template>
    <app-layout>
        <div class="flex">
            <div class="w-1/3">
                <shop-list></shop-list>
            </div>

            <div class="w-2/3">
                <shop-map></shop-map>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import ShopMap from '@/Components/ShopMap'
    import ShopList from '@/Components/ShopList'
    import AppLayout from '@/Layouts/AppLayout'

    export default {
        components: {
            ShopMap,
            ShopList,
            AppLayout
        }
    }
</script>
