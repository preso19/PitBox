<template>
    <app-layout>
        <shop-list></shop-list>
    </app-layout>
</template>

<script>
    import ShopList from '@/Components/Home/ShopList'
    import AppLayout from '@/Layouts/AppLayout'

    export default {
        components: {
            ShopList,
            AppLayout
        }
    }
</script>
