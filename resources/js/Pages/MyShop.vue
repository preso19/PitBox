<template>
    <app-layout>
        <shop-main
            v-if="$page.props.userShop && !isEditing" :shop="$page.props.userShop"
            @editShop="editShop"
        ></shop-main>

        <shop-form
            v-else
            :shop="$page.props.userShop"
        ></shop-form>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'
    import ShopMain from '@/Components/MyShop/ShopMain'
    import ShopForm from '@/Components/MyShop/ShopForm'

    export default {
        components: {
            ShopMain,
            ShopForm,
            AppLayout
        },

        data() {
            return {
                isEditing: false,
            }
        },

        methods: {
            editShop: function () {
                this.isEditing = true;
            }
        }
    }
</script>
